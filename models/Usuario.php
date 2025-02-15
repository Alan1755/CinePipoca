<?php 
require_once './models/ConexaoBanco.php';

class UsuarioModel extends ConexaoBanco {
    function __construct() {
        parent:: __construct();
    }

    function login($data) {
        $sql = $this->conBD->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha");
        $sql->bindParam(':email', $data['login_email']);
        $sql->bindParam(':senha', $data['login_senha']);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $result = $sql->fetch();
            $_SESSION['usuario_id'] = $result['id'];
            $_SESSION['usuario_nome'] = $result['nome'];
            return true;
        } else {
            return false;
        }
    }
    
    function insert($data) {
        $sql = $this->conBD->prepare("INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)");
        $sql->bindParam(':nome', $data['nome']);
        $sql->bindParam(':email', $data['email']);
        $sql->bindParam(':senha', $data['senha']);
        $sql->execute();
        return $sql->rowCount();
    }
}