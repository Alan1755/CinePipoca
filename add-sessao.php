<?php
//Verificar se o usuário está verificado
require_once './utils/auth.php';
checklogin();
?>
<?php
if (!empty($result) && isset($result['id'])) {
    $title = 'Editar Sessão';
    $action = 'update';
    $id_filme = $result['id'];
    $nome_sessao = $result['nome'];
} else {
    $title = 'Adicionar Sessão';
    $action = 'insert';
    $id_filme = '';
    $nome_sessao = '';
}
?>
<?php
$erro = $erro ?? ''; // Define a variável se ainda não existir
?>


<?php include './views/includes/header.php' ?>

<div class="container-form">
    <form action="./sessao.php?action=<?= $action ?>" method="post" class="user" enctype="multipart/form-data">
        <input type="hidden" name="sessao_id" id="sessao_id" value="<?= $id_filme ?>">
        <h1 class="align"><?= $title ?></h1>
        <div class="form-group">
            <input type="text" placeholder="Título da sessão" name="nome_sessao" id="nome_sessao" class="form-control form-control-user titulo2" value="<?= $nome_sessao ?>">
        </div>
        <span id="erro-nome-sessao" class="erro-mensagem <?= empty($erro) ? '' : 'visivel' ?>">
            <?= $erro ?>
        </span>


        <div class="form-group row">
            <button type="submit" class="form- btn btn-primary btn-user btn-block2">Salvar</button>
        </div>
    </form>
</div>


<script src="./javaScript/script-sessao.js"></script>
<?php include './views/includes/footer.php' ?>