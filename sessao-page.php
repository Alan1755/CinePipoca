<?php
require_once './controllers/SessaoController.php';
require_once './controllers/FilmeController.php';
require_once './utils/auth.php';
checklogin();

// Obtém o ID da sessão da URL
$sessaoId = $_GET['id'] ?? null;

if ($sessaoId) {
    // Inicializa os controladores
    $sessaoController = new SessaoController();
    $filmeController = new FilmeController();

    // Busca os dados da sessão
    $sessao = $sessaoController->buscarSessaoPorId($sessaoId);

    // Verifica se a sessão foi encontrada antes de buscar os filmes
    if ($sessao) {
        // Busca todos os filmes da sessão
        $filmes = $filmeController->buscarFilmesPorSessao($sessaoId);
    } else {
        $filmes = []; // Define uma lista vazia para evitar erros
    }
}

include_once './views/includes/header.php';
?>

<section class="container-sessao">
    <?php if ($sessao): ?>
        <h1 class="sessao-title"><?= htmlspecialchars($sessao['nome']); ?></h1>
        <div class="btn-container">
            <a href="sessao.php?action=editar&id=<?= $sessao['id'] ?>" class="edit-btn">Editar Sessão</a>
            <button class="delete-btn" id="openModalBtnDelete">Deletar Sessão</button>
        </div>
        <div class="movie-grid">
            <?php if (!empty($filmes)) : ?>
                <?php foreach ($filmes as $filme): ?>
                    <div class="movie-item">
                        <img class="movie-item-img" src="<?= htmlspecialchars($filme['img_filme']); ?>" alt="<?= htmlspecialchars($filme['titulo_filme']); ?>">
                        <span class="movie-item-title"><?= htmlspecialchars($filme['titulo_filme']); ?></span>
                        <p class="movie-item-desc"><?= htmlspecialchars($filme['mini_sinopse']); ?></p>
                        <a href="./filme-page.php?id=<?= $filme['id'] ?>" class="movie-item-button">Assistir</a>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="no-filmes-msg">Nenhum filme nesta sessão.</p>
            <?php endif; ?>
        </div>
    <?php else: ?>
        <p>Sessão não encontrada.</p>
    <?php endif; ?>
</section>

<div id="modalDelete" class="modal2">
    <div class="modal-content2">
        <span id="closeModalBtnDelete" class="close-btn">&times;</span>
        <h2>Atenção</h2>
        <p>Você tem certeza que quer deletar essa sessão</p>
        <a href="sessao.php?action=delete&id=<?= $sessao['id'] ?>">Deletar sessão</a>
    </div>
</div>

<script src="./javaScript/script-modal-delete.js"></script>
<?php include_once './views/includes/footer.php'; ?>