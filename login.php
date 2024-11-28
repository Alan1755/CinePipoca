<?php 
    if (isset($_SESSION) == false) {
        session_start();
    }
    if (isset($_SESSION['usuario_id'])) {
        header('Location: ./index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./css/style-login.css">
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/GWjvxj6/3646082af843.png">
    <title>Cine Pipoca | Login</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="./index.php?action=registrar" method="POST">
                <h1>Crie uma conta!</h1>
                <div class="social-icons">
                    <a href="../home.html" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Ou use um email para criar</span>

                <input type="text" placeholder="Nome" id="nome" name="nome" required>
                <input type="text" placeholder="E-mail" id="email" name="email" required>
                <input type="password" placeholder="Senha" id="senha" name="senha" required>

                <button type="submit">Registrar</button>

            </form>
        </div>
        <div class="form-container sign-in">
            <form action="./index.php?action=login" method="POST">
                <h1>Login</h1>
                <div class="social-icons">
                    <a href="../home.html" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Ou use seu e-mail e senha</span>
                <input type="email" placeholder="E-mail" id="login_email" name="login_email">
                <input type="password" placeholder="Senha" id="login_senha" name="login_senha">
                <a href="#">Esqueceu sua senha?</a>
                <?php if (!empty($_SESSION['login_error'])): ?>
                    <span class="erro-text"><?= $_SESSION['login_error']; ?></span>
                    <?php unset($_SESSION['login_error']); ?>
                <?php endif; ?>

                <button type="submit">Logar</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bem-vindo de volta!</h1>
                    <p>Clique aqui e coloque suas credencias já registrada para logar em nosso site!</p>
                    <button class="" id="login" id="login">Logar</button>
                    <img src="./img/cine-logo-wtext.png" alt="" class="img-left">
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Olá, Amigos!</h1>
                    <p>Clique aqui para registre sua conta com suas informações pessoas para usar nosso site!</p>
                    <button class="" id="register" id="register">Registrar</button>
                    <img src="./img/cine-logo-wtext.png" alt="" class="img-right">
                </div>
            </div>
        </div>
    </div>
    <script src="./javaScript/script-login.js"></script>
</body>
</html>