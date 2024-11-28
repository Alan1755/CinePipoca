<?php
//Verificar se o usuário está verificado
require_once './utils/auth.php';
checklogin();
?>
<?php
if (!empty($result['id'])) {
    //EDITAR
    $title = 'Editar Filme';
    $action = 'update';
    $id_filme = $result['id'];
    $titulo = $result['titulo_filme'];
    $especificidade = $result['especificidade_filme'];
    $elenco = $result['elenco'];
    $capa = $result['img_filme'];
    $mini_sinopse = $result['mini_sinopse'];
    $sinopse = $result['sinopse'];
    $trailer = $result['trailer'];
    $banner = $result['img_banner'];
} else {
    //ADICIONAR
    $title = 'Adicionar Filme';
    $action = 'insert';
    $id_filme = '';
    $titulo = '';
    $especificidade = '';
    $elenco = '';
    $capa = '';
    $mini_sinopse = '';
    $sinopse = '';
    $trailer = '';
    $banner = '';
}
?>

<?php include_once './utils/util.php' ?>
<?php include './views/includes/header.php' ?>


<div class="container-form">
    <form action="./filme.php?action=<?= $action ?>" method="post" class="user" enctype="multipart/form-data">
        <input type="hidden" name="id_filme" id="id_filme" value="<?= $id_filme ?>">
        <input type="hidden" name="capa_atual" value="<?= $capa ?>">
        <input type="hidden" name="banner_atual" value="<?= $banner ?>">
        <h1 class="align"><?= $title ?></h1>
        <div class="form-group">
            <input type="text" placeholder="Título" name="titulo_filme" id="titulo_filme" class="form-control form-control-user titulo" value="<?= $titulo ?>">
        </div>
        <div class="form-group row">
            <div>
                <input type="text" placeholder="Especificidades do filme" name="especificidade" id="especificidade" class="espec form-control form-control-user" value="<?= $especificidade ?>">
            </div>
            <div>
                <input type="text" placeholder="Trailer do filme (link via iframe)" name="trailer" id="trailer" class="trailer form-control form-control-user" value="<?= $trailer ?>">
            </div>
        </div>
        <div class="form-group row">
            <div>
                <label for="capa">Capa do Filme</label>
                <?php if (!empty($capa)): ?>
                <?php endif; ?>
                <input type="file" name="capa" id="capa" class="capa form-control form-control-user input-label">
            </div>
            <div>
                <label for="banner">Banner do Filme</label>
                <?php if (!empty($banner)): ?>
                <?php endif; ?>
                <input type="file" name="banner" id="banner" class="inp-banner form-control form-control-user">
            </div>
            <div>
                <label for="id_sessao">Selecione a Sessão</label>
                <select name="id_sessao" id="id_sessao" class="sessao form-control form-control-user">
                    <?php foreach ($sessoes as $sessao): ?>
                        <option value="<?= $sessao['id'] ?>" <?= (!empty($result['id_sessao']) && $result['id_sessao'] == $sessao['id']) ? 'selected' : '' ?>>
                            <?= $sessao['nome'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <textarea type="textarea" placeholder="Sinopse" name="sinopse" id="sinopse" class="form-control form-control-user sinopse"><?= $sinopse ?></textarea>
        </div>
        <div class="form-group row">

        </div>
        <div class="form-group row">
            <div>
                <textarea type="textarea" placeholder="Mini sinopse do filme" name="mini_sinopse" id="mini_sinopse" class="trailer form-control form-control-user"><?= $mini_sinopse ?></textarea>
            </div>
            <div>
                <textarea type="textarea" placeholder="Elenco" name="elenco" id="elenco" class="elenco form-control form-control-user"><?= $elenco ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <button type="submit" class="form- btn btn-primary btn-user btn-block">Salvar</button>
        </div>


    </form>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Begin Toastr (Mensagens importantissimas) -->
<?php
if (isset($_SESSION['message']) && isset($_SESSION['messageType'])) {
    echo showMsgToastr($_SESSION['messageType'], $_SESSION['message']);
}
unset($_SESSION['message']);
unset($_SESSION['messageType']);
?>
<!-- End Toastr (Mensagens) -->

<?php include './views/includes/footer.php' ?>