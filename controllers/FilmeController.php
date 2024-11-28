<?php 

require_once "./models/Filme.php"; 

class FilmeController {
    protected $model;

    function __construct(){
        $this->model = new FilmeModel();
    }

    function novoFilme() {
        require_once './controllers/SessaoController.php';
        $sessaoController = new SessaoController();
    
        $sessoes = $sessaoController->listarSessoesDoUsuario();
    
        if (empty($sessoes)) {
            $_SESSION['message'] = 'Você precisa criar uma sessão antes de adicionar um filme.';
            $_SESSION['messageType'] = 'warning';
            header('Location: ./sessao.php?action=adicionar');
            exit;
        }
        require('./add-filme.php');
    }
    
    
    function editar($id_filme) {
        $result = $this->model->selectById($id_filme);
        if (!$result) {
            $_SESSION['message'] = 'Filme não encontrado.';
            $_SESSION['messageType'] = 'danger';
            header('Location: ./home.php');
            exit;
        }
    
        // Obtenha as sessões do usuário
        require_once './controllers/SessaoController.php';
        $sessaoController = new SessaoController();
        $sessoes = $sessaoController->listarSessoesDoUsuario();
        $capa = $result['img_filme'];
        $banner = $result['img_banner'];
    
        require('./add-filme.php');
    }
    

    function uploadImage($file) {
        $apiKey = '0121063378e83b93993dd3f7fbe7d600';
        if ($file['error'] === UPLOAD_ERR_OK) {
            $url = 'https://api.imgbb.com/1/upload';
            $data = [
                'key' => $apiKey,
                'image' => base64_encode(file_get_contents($file['tmp_name']))
            ];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($ch);
            curl_close($ch);

            $result = json_decode($response, true);

            if ($result['success']) {
                return $result['data']['url']; // URL (importante)
            } else {
                throw new Exception("Erro ao enviar a imagem: " . $result['error']['message']);
            }
        } else {
            throw new Exception("Erro no upload: " . $file['error']);
        }
    }

    function insert($data) {
        try {
            $data['capa'] = $this->uploadImage($_FILES['capa']);
            $data['banner'] = $this->uploadImage($_FILES['banner']);
            
            $result = $this->model->insert($data);
            if ($result > 0) {
                $_SESSION['message'] = 'Filme inserido com sucesso.';
                $_SESSION['messageType'] = 'success';
            } else {
                $_SESSION['message'] = 'Erro ao inserir filme.';
                $_SESSION['messageType'] = 'error';
            }
            header('Location: ./home.php');   
            exit;
        } catch (Exception $e) {
            $_SESSION['message'] = 'Erro: ' . $e->getMessage();
            $_SESSION['messageType'] = 'error';
            header('Location: ./add-filme.php');
            exit;
        }
    }
    
    function update($data) {
        try {
            if (!empty($_FILES['capa']['tmp_name'])) {
                $data['capa'] = $this->uploadImage($_FILES['capa']);
            } else {
                $data['capa'] = $data['capa_atual'];
            }
    
            if (!empty($_FILES['banner']['tmp_name'])) {
                $data['banner'] = $this->uploadImage($_FILES['banner']);
            } else {
                $data['banner'] = $data['banner_atual'];
            }
    
            $result = $this->model->update($data);
            
            // Redirecionamento e mensagem
            if ($result > 0) {
                $_SESSION['message'] = 'Filme alterado com sucesso.';
                $_SESSION['messageType'] = 'success';
            } else {
                $_SESSION['message'] = 'Erro ao alterar filme.';
                $_SESSION['messageType'] = 'error';
            }
            header('Location: ./home.php');
            exit;
        } catch (Exception $e) {
            $_SESSION['message'] = 'Erro: ' . $e->getMessage();
            $_SESSION['messageType'] = 'error';
            header('Location: ./add-filme.php');
            exit;
        }
    }    
    
    function buscarTodos() {
        return $this->model->buscarTodos();
    }

    function buscarFilmesPorSessao($id_sessao) {
        return $this->model->buscarFilmesPorSessao($id_sessao);
    }

    function delete($id_filme) {
        $result = $this->model->delete($id_filme);
        if ($result > 0) {
            $_SESSION['message'] = 'Filme deletado com sucesso.';
            $_SESSION['messageType'] = 'success';
        }
        header('Location: ./home.php');
    }

    function deletarFilmesPorSessao($id_sessao) {
        return $this->model->deletarFilmesPorSessao($id_sessao);
    }
}
