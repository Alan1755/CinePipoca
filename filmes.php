<?php
//Verificar se o usuário está verificado
require_once './utils/auth.php';
checklogin();
?>

<?php include_once './utils/util.php' ?>
<?php include_once './views/includes/header.php' ?>


<div class="container">
    <div class="content-container">
        <div class="featured-content" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('https://i.ibb.co/TMnyJtP/cd88ece272d1.jpg');">
            <img class="featured-title" src="https://i.ibb.co/c2jPb60/dba476ac0238.jpg" alt="">
            <p class="featured-desc">
                Na série La Casa de Papel, da Netflix, nove habilidosos ladrões (Nairóbi, Berlim, Tókyo, Rio, Helsinki, Oslo, Professor, Denver e Moscou) se trancam na Casa da Moeda da Espanha, com o ambicioso plano de realizar o maior roubo da história.
            </p>
            <a href="./filmes-html/filme_destaque1.html">
                <button class="featured-button">Assistir</button>
            </a>
        </div>
        <div class="movie-list-container">
            <h1 class="movie-list-title">Lançamentos</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <!-- Parte bem imporante, não esquece de copiar -->
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/jDYLR3D/765461a3228b.jpg" alt="">
                        <span class="movie-list-item-title">Ela</span>
                        <p class="movie-list-item-desc">O enredo gira em torno de um homem que desenvolve uma relação pessoal com o sistema operacional.</p>
                        <a href="./filme1.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/gVd3zy9/661c8883d5bc.jpg" alt="">
                        <span class="movie-list-item-title">Star Wars</span>
                        <p class="movie-list-item-desc">O enredo gira pós a era de Luke Skywalker, com Rey como protagonista.</p>
                        <a href="./filme2.php">
                            <br> <button class="movie-list-item-button">Assistir</button> </a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/BCx8gTk/354a8097b079.jpg" alt="">
                        <span class="movie-list-item-title">Tempestade</span>
                        <p class="movie-list-item-desc">A grande tempestade se aproxima, Um drama com Joaquin phoneix, a destruição das terras, um mundo caótico os espera !</p>
                        <a href="./filme3.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/kqV65jD/bde09e083533.jpg" alt="">
                        <span class="movie-list-item-title">1917</span>
                        <p class="movie-list-item-desc">Narra a história de dois jovens soldados britânicos durante o auge da 1° Guerra Mundial.</p>
                        <a href="./filme4.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/ZVLW507/15e22dc9368c.jpg" alt="">
                        <span class="movie-list-item-title">Vingadores</span>
                        <p class="movie-list-item-desc">Grupo de super heróis se juntam para defender o mundo de uma grande ameaça.</p>
                        <a href="./filme5.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/M1XHD9W/b675990aefd2.jpg" alt="">
                        <span class="movie-list-item-title">Kong</span>
                        <p class="movie-list-item-desc">O enredo gira em torno de um homem e um gorila gigante, onde inicialmente sua espécies estava extinta, MAS NÃO.</p>
                        <a href="./filme6.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/Dp4pchk/eeeb10616a73.jpg" alt="">
                        <span class="movie-list-item-title">chucky</span>
                        <p class="movie-list-item-desc">O Brinquedo assasino retorna, e agora mais louco do que nunca</p>
                        <a href="./filme7.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                </div>
                <i class="fas fa-chevron-right arrow"></i>
            </div>
        </div>
        <div class="movie-list-container">
            <h1 class="movie-list-title">Ação</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/2hh2p5g/01312b3092c1.jpg" alt="">
                        <span class="movie-list-item-title">Oblivion</span>
                        <p class="movie-list-item-desc">A terra não é mais como antes, Ja não se pode confiar em tudo, principalmente neles...</p>
                        <a href="./filme8.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/xCqVR4s/98972f0110bf.jpg" alt="">
                        <span class="movie-list-item-title">Hobbit</span>
                        <p class="movie-list-item-desc">Se passa pós Senhor do Anéis, mas á aventura continua firme e forte.</p>
                        <a href="./filme9.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <!-- Muito importante aqui tbm -->
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/qj4ZG9R/df9a7643ffcb.jpg" alt="">
                        <span class="movie-list-item-title">Due Date</span>
                        <p class="movie-list-item-desc">Uma organização pretender sequestrar um cachorro, assim seus donos tem que lutar para o defende-lo</p>
                        <a href="./filme10.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/FqHQyr9/6fe9e7885a42.jpg" alt="">
                        <span class="movie-list-item-title">Kick-Ass 2</span>
                        <p class="movie-list-item-desc">Em um mundo de crimes, duas crianças decidem erradicar o mal.</p>
                        <a href="./filme11.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/sbRfhch/1c66a1d9779f.jpg" alt="">
                        <span class="movie-list-item-title">Coringa 2</span>
                        <p class="movie-list-item-desc">Aonde um homem suporta a sociedade, mas ao mesmo tempo luta para não enloquecer !</p>
                        <a href="./filme12.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/gVd3zy9/661c8883d5bc.jpg" alt="">
                        <span class="movie-list-item-title">Star Wars</span>
                        <p class="movie-list-item-desc">O enredo gira pós a era de Luke Skywalker, com Rey como protagonista.</p>
                        <a href="./filme2.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/kqV65jD/bde09e083533.jpg" alt="">
                        <span class="movie-list-item-title">1917</span>
                        <p class="movie-list-item-desc">Narra a história de dois jovens soldados britânicos durante o auge da 1° Guerra Mundial.</p>
                        <a href="./filme4.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                </div>
                <i class="fas fa-chevron-right arrow"></i>
            </div>
        </div>
        <div class="featured-content"
            style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('https://i.ibb.co/zSQwKCM/9afad8a43c7e.jpg');">
            <img class="featured-title" src="https://i.ibb.co/Tq0DjJq/877e12d3f592.png" alt="">
            <p class="featured-desc">A trama da série se passa na fictícia cidade alemã de Winden, quando quatro famílias iniciam uma busca desesperada por respostas após o desaparecimento de duas crianças que aparenta estar relacionado a um outro desaparecimento ocorrido 33 anos antes. Aos poucos, segredos familiares passam a ser expostos e um complexo mistério envolvendo três gerações começa a se revelar.</p>
            <a href="./filme_destaque2.php" button class="featured-button">Assistir</button>
            </a>
        </div>
        <div class="movie-list-container">
            <h1 class="movie-list-title">Drama</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/jDYLR3D/765461a3228b.jpg" alt="">
                        <span class="movie-list-item-title">Ela</span>
                        <p class="movie-list-item-desc">Um romance, envolvendo um sistema operacional, cheio de trama e drama!</p>
                        <a href="./filme1.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/gVd3zy9/661c8883d5bc.jpg" alt="">
                        <span class="movie-list-item-title">Star Wars</span>
                        <p class="movie-list-item-desc">Pós era de Luke Skywalker, onde ainda sim encontra o lado negro da força.</p>
                        <a href="./filme2.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/HBZtk24/c5ff8038edd7.jpg" alt="">
                        <span class="movie-list-item-title">Argo</span>
                        <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                            hic fugit similique accusantium.</p>
                        <a href="./filme13.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/BCx8gTk/354a8097b079.jpg" alt="">
                        <span class="movie-list-item-title">Storm</span>
                        <p class="movie-list-item-desc">Um drama nos meados do seculos XVIII.</p>
                        <a href="./filme3.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/kqV65jD/bde09e083533.jpg" alt="">
                        <span class="movie-list-item-title">1917</span>
                        <p class="movie-list-item-desc">Narra a história de dois jovens soldados britânicos durante o auge da 1° Guerra Mundial.</p>
                        <a href="./filme4.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/ZVLW507/15e22dc9368c.jpg" alt="">
                        <span class="movie-list-item-title">Vingadores</span>
                        <p class="movie-list-item-desc">Grupo de super heróis formado por Nick Fyru, para combater o mal desperto.</p>
                        <a href="./filme5.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/Dp4pchk/eeeb10616a73.jpg" alt="">
                        <span class="movie-list-item-title">Chucky</span>
                        <p class="movie-list-item-desc">O brinquedo assasino retorna !</p>
                        <a href="./filme7.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                </div>
                <i class="fas fa-chevron-right arrow"></i>
            </div>
        </div>
        <div class="movie-list-container">
            <h1 class="movie-list-title">Terror</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/Dp4pchk/eeeb10616a73.jpg" alt="">
                        <span class="movie-list-item-title">Chucky</span>
                        <p class="movie-list-item-desc">Brinquedo assasino retornou, mais travesso do que nunca!</p>
                        <a href="./filme7.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/Sm4KWvj/42050c469cf5.jpg" alt="">
                        <span class="movie-list-item-title">Stranger Things</span>
                        <p class="movie-list-item-desc">Um mundo invertido, cheio de misterios</p>
                        <a href="./filme14.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/L8SCs9M/55f75e923906.jpg" alt="">
                        <span class="movie-list-item-title">Tlou</span>
                        <p class="movie-list-item-desc">Um terror psicologico, até onde a cura é prioridade?</p>
                        <a href="./filme15.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/JrVTwW9/0600f54b2edc.jpg" alt="">
                        <span class="movie-list-item-title">Freira</span>
                        <p class="movie-list-item-desc">1877, um padre foi convocado para um caso sobre-natural.</p>
                        <a href="./filme16.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="https://i.ibb.co/rFBH4Nq/c526fa4b3443.jpg" alt="">
                        <span class="movie-list-item-title">Terrifier</span>
                        <p class="movie-list-item-desc">Archie, um palhaço louco por matança..</p>
                        <a href="./filme17.php">
                            <br> <button class="movie-list-item-button">Assistir</button></a>
                        </a>
                    </div>
                </div>
                <i class="fas fa-chevron-right arrow"></i>
            </div>
        </div>
        <h1 class="movie-title">Seus filmes</h1>
        <!-- Listar Sessões -->
        <?php if (!empty($sessoes)) : ?>
            <?php foreach ($sessoes as $sessao) : ?>
                <div class="movie-list-container">
                    <a class="teste" href="sessao-page.php?id=<?= $sessao['id'] ?>" class="movie-list-title-link">
                        <h1 class="movie-list-title"><?= htmlspecialchars($sessao['nome']); ?></h1>
                    </a>
                    <div class="movie-list-wrapper">
                        <div class="movie-list">
                            <?php
                            // Buscar filmes da sessão atual
                            $filmes = $filmeController->buscarFilmesPorSessao($sessao['id']);
                            if (!empty($filmes)) :
                                foreach ($filmes as $filme) :
                            ?>
                                    <div class="movie-list-item">
                                        <img class="movie-list-item-img" src="<?= htmlspecialchars($filme['img_filme']); ?>" alt="<?= htmlspecialchars($filme['titulo_filme']); ?>">
                                        <span class="movie-list-item-title"><?= htmlspecialchars($filme['titulo_filme']); ?></span>
                                        <p class="movie-list-item-desc"><?= htmlspecialchars($filme['sinopse']); ?></p>
                                        <a href="./filme-page.php?id=<?= $filme['id'] ?>">
                                            <button class="movie-list-item-button">Assistir</button>
                                        </a>
                                    </div>
                            <?php
                                endforeach;
                            else :
                                echo "<p class='no-filmes-msg'>Nenhum filme nesta sessão.</p>";
                            endif;
                            ?>
                        </div>
                        <i class="fas fa-chevron-right arrow"></i>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <div class="create-session-container">
            <a href="sessao.php?action=adicionar" class="btn-create-session">+ Criar Nova Sessão</a>
        </div>

    </div>
</div>

</main>

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

<script src="./javaScript/script-home.js"></script>
<?php include_once './views/includes/footer.php' ?>