<?php

require_once './models/Sessao.php';
require_once './controllers/FilmeController.php';

class SessaoController
{
    protected $model;

    function __construct()
    {
        $this->model = new SessaoModel();
    }

    // Função para buscar todas as sessões
    function buscarTodas()
    {
        return $this->model->selectAll();
    }

    function novaSessao()
    {
        require './add-sessao.php';
    }

    function editar($sessao_id) {
        $result = $this->model->selectById($sessao_id);
        error_log(print_r($result, true));
        if (!$result) {
            header('Location: ./home.php');
            exit;
        }
        require('./add-sessao.php');
    }
    

    function insert($data) {
        if (empty(trim($data['nome_sessao']))) {
            $nome_sessao = $data['nome_sessao']; // Preenche o campo já inserido
            $erro = 'O título da sessão é obrigatório.';
            require './add-sessao.php'; // Recarrega o formulário com a mensagem de erro
            exit;
        }
    
        $data['usuario_id'] = $_SESSION['usuario_id'];
        $result = $this->model->insert($data);
    
        if ($result > 0) {
            $_SESSION['message'] = 'Sessão criada com sucesso.';
            $_SESSION['messageType'] = 'success';
            header('Location: ./index.php');
            exit;
        } else {
            $_SESSION['message'] = 'Erro ao criar a sessão.';
            $_SESSION['messageType'] = 'error';
            header('Location: ./index.php');
            exit;
        }
    }    
    
    function update($data) {
        if (empty(trim($data['nome_sessao']))) {
            $_SESSION['message'] = 'O título da sessão é obrigatório.';
            $_SESSION['messageType'] = 'error';
            header('Location: ./sessao.php?action=editar&id=' . $data['sessao_id']);
            exit;
        }
    
        $result = $this->model->update($data);
    
        if ($result > 0) {
            $_SESSION['message'] = 'Sessão alterada com sucesso.';
            $_SESSION['messageType'] = 'success';
            header('Location: ./home.php');
            exit;
        } else {
            $_SESSION['message'] = 'Erro ao alterar a sessão.';
            $_SESSION['messageType'] = 'error';
            header('Location: ./home.php');
            exit;
        }
    }
    
     
    function listarSessoesDoUsuario() {
        $usuario_id = $_SESSION['usuario_id'];
        return $this->model->buscarSessoesPorUsuario($usuario_id);
    }

    function delete($sessao_id) {
        $filmeController = new FilmeController();
        $filmeController->deletarFilmesPorSessao($sessao_id);
        
        $result = $this->model->delete($sessao_id);
        if ($result > 0) {
            $_SESSION['message'] = 'Sessão excluída com sucesso.';
            $_SESSION['messageType'] = 'success';
        }
        header('Location: ./home.php');
    }

    function buscarSessaoPorId($sessao_id) {
        return $this->model->selectById($sessao_id);
    }
}
