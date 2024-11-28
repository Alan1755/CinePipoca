<?php
if (isset($_SESSION) == false) {
    session_start();
}
require_once './controllers/UsuarioController.php';
$controller = new UsuarioController();
$action = "";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
echo $action;
if ($action == 'registrar') {
    if (isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['nome']))  {
        $controller->insert($_POST);
        exit();
    }
}

if (isset($_SESSION['usuario_id']) || $action == 'login') {
    switch ($action){
        case 'logout':
            $controller->logout();
            break;
        case 'login':
            if (isset($_POST['login_email']) && isset($_POST['login_senha'])) {
                $controller->login($_POST);
                // Verifique se houve erro de login antes de redirecionar
                if (!empty($_SESSION['login_error'])) {
                    // Exibe o erro e só então redireciona
                    header('Location: ./login.php');
                    exit();
                }
            }
            break;
        default:
            header('Location: ./home.php');
            exit;
    }
} else {
    header('Location: ./login.php');
    exit;
}
