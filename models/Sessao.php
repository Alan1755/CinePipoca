<?php 

require_once './models/ConexaoBanco.php';

class SessaoModel extends ConexaoBanco {
    
    function __construct() {
        parent::__construct();
    }

    function selectAll() {
        $sql = $this->conBD->prepare('SELECT * FROM sessao');
        $sql->execute();
        return $sql->fetchAll();
    }

    function selectById($sessao_id) {
        $sql = $this->conBD->prepare('SELECT * FROM sessao WHERE id = :sessao_id');
        $sql->bindParam(':sessao_id', $sessao_id);
        $sql->execute();
        return $sql->fetch();
    }    

    function insert($data) {
        $sql = $this->conBD->prepare('INSERT INTO sessao (nome, id_usuario) VALUES (:nome, :id_usuario)');
        $sql->bindParam(':nome', $data['nome_sessao']);
        $sql->bindParam(':id_usuario', $data['usuario_id']);
        $sql->execute();
        return $sql->rowCount();
    }

    function update($data) {
        $sql = $this->conBD->prepare('UPDATE sessao SET nome = :nome WHERE id = :id');
        $sql->bindParam(':id', $data['sessao_id']);
        $sql->bindParam(':nome', $data['nome_sessao']);
        $sql->execute();
        return $sql->rowCount();
    }
    

    function buscarSessoesPorUsuario($usuario_id) {
        $sql = $this->conBD->prepare('SELECT * FROM sessao WHERE id_usuario = :id_usuario');
        $sql->bindParam(':id_usuario', $usuario_id);
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function delete($sessao_id) {
        $sql = $this->conBD->prepare("DELETE FROM sessao WHERE id = :id");
        $sql->bindParam(':id', $sessao_id);
        $sql->execute();
        return $sql->rowCount();
    }
}
