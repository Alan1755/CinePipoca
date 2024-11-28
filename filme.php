<?php
// Verificar se o usuário está verificado
require_once './utils/auth.php';
require_once './utils/util.php';
checklogin();

require_once "./controllers/FilmeController.php";

$controller = new FilmeController();

$action = 'listar';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

// AÇÕES
switch ($action) {
    case 'adicionar':
        $controller->novoFilme();
        break;
    case 'editar':
        if (isset($_GET['id'])) {
            $controller->editar($_GET['id']);
        }
        break;
    case 'insert':
        $controller->insert($_POST);
        break;
    case 'update':
        if (isset($_POST['id_filme'])) {
            $controller->update($_POST);
        }
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            $controller->delete($_GET['id']);
        }
        break;
    default:
        echo 'Erro 404';
        break;
}
