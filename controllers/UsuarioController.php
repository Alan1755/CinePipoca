<?php
require_once './models/Usuario.php';

class UsuarioController {
    
    protected $model;

    function __construct() {
        $this->model = new UsuarioModel;
    }

    function login($data) {
        $result = $this->model->login($data);
        if ($result == false) {
            $_SESSION['login_error'] = 'E-mail ou senha incorretos';
        } else {
            unset($_SESSION['login_error']);
        }
        header('Location: ./index.php');
    }

    function insert($data) {
        $result = $this->model->insert($data);
        header('Location: ./index.php'); 
    }

    function logout() {
        session_destroy();
        header('Location: ./index.php');
    }
}
