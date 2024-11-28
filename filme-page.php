<?php
// Verificar se o usuário está autenticado
require_once './utils/auth.php';
checklogin();

require_once './models/Filme.php';

$id_filme = isset($_GET['id']) ? intval($_GET['id']) : 0;

$filmeModel = new FilmeModel();
$filme = $filmeModel->selectById($id_filme);

if (!$filme) {
    echo "Filme não encontrado.";
    exit;
}

include_once './views/includes/header.php';
?>

<section class="banner">
    <img src="<?= $filme['img_banner'] ?>" alt="Banner do filme">
    <div class="banner-content">
        <h1><?= htmlspecialchars($filme['titulo_filme']) ?></h1>
        <p><?= htmlspecialchars($filme['especificidade_filme']) ?></p>
        <div class="btn-container">
            <button id="openModal" class="watch-btn"><i class="fas fa-play"></i> Assistir Agora</button>
            <a href="filme.php?action=editar&id=<?= $filme['id'] ?>" class="edit-btn">Edite seu filme</a>
            <button class="delete-btn" id="openModalBtnDelete">Deletar Filme</button>
        </div>
    </div>
</section>

<main class="container2">
    <section class="sinopse">
        <h2>Sinopse</h2>
        <p><?= htmlspecialchars($filme['sinopse']) ?></p>
    </section>

    <br class="avaliacoes">
    <br></br>
    <h2>Avaliações</h2>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <span>(5/5)</span>
    </div>
    </section>

    <br class="comentarios">
    <br></br>
    <h2>O que o público está dizendo?</h2>
    <div class="comentario">
        <p>"Uma história emocionante e cheia de reviravoltas. Me fez chorar e sorrir!"</p>
        <span>- Erick Richard</span>
    </div>
    <div class="comentario">
        <p>"Perfeito !"</p>
        <span>- Roberto Almeida</span>
    </div>
    </section>
</main>

<modal>
    <!-- Trigger/Open The Modal -->
    <!--<button id="myBtn">Open Modal</button>-->

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <iframe width="100%" height="510" src="<?= htmlspecialchars($filme['trailer']); ?>"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</modal>

<div id="modalDelete" class="modal2">
    <div class="modal-content2">
        <span id="closeModalBtnDelete" class="close-btn">&times;</span>
        <h2>Atenção</h2>
        <p>Você tem certeza que quer deletar esse filme?</p>
        <a href="filme.php?action=delete&id=<?= $filme['id'] ?>">Deletar Filme</a>
    </div>
</div>

<script src="./javaScript/script-modal-delete.js"></script>
<script src="./javaScript/script-filme.js"></script>
<?php include_once './views/includes/footer.php'; ?>