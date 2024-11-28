<?php
$sessao_criada = isset($_SESSION['sua_variavel_de_sessao']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cine Pipoca</title>

  <!-- CSS principal -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- Logo -->
  <link rel="icon" type="image/x-icon" href="https://i.ibb.co/GWjvxj6/3646082af843.png">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <!-- Toastr -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
</head>

<body>

  <header class="navbar" id="navbar">
    <div class="logo">
        <img src="https://i.ibb.co/GWjvxj6/3646082af843.png" alt="Cine Pipoca">
      <h1>Cine Pipoca</h1>
    </div>

    <nav class="menu">
      <ul>
        <a href="./home.php">Início</a>
        <a href="./serie.php">Séries</a>
        <a href="./filmes.php">Filmes</a>
        <a href="./novela.php">Novelas</a>
        <a href="./desenho.php">Animações</a>
      </ul>
    </nav>

    <div class="actions">
      <button id="openModalBtnLogout" class="profile">
        <div class="flex-h">
          <p>
            <?php
            if (isset($_SESSION['usuario_nome'])) {
              echo htmlspecialchars($_SESSION['usuario_nome']);
            } else {
              echo '<a href="login.php">Entrar</a>';
            }
            ?>
          </p>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
          </svg>
        </div>
      </button>
      <a class="add-btn" href="filme.php?action=adicionar">+ Adicionar Filme</a>
    </div>

    <div id="modalLogout" class="modal2">
      <div class="modal-content2">
        <span id="closeModalBtnLogout" class="close-btn">&times;</span>
        <h2>Atenção</h2>
        <p>Você tem certeza que quer deslogar da sua conta?</p>
        <a href="index.php?action=logout">Deslogar</a>
      </div>
    </div>

    <script src="./javaScript/script-modal-logout.js"></script>
  </header>