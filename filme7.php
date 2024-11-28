<?php 
//Verificar se o usuário está verificado
require_once './utils/auth.php';
checklogin();
?>
<?php include_once './views/includes/header.php' ?>

    <section class="banner">
        <img src="https://i.ibb.co/BGjNFL5/d28a7014ab19.jpg" alt="Storm">
        <div class="banner-content">
            <h1>Chucky</h1>
            <p>Terror | 2021 | 8 Episódio</p>
            <button id="openModal" class="watch-btn"><i class="fas fa-play"></i> Assistir Agora</button></div>
    </section>

    <main class="container2">

        <section class="sinopse">
            <h2>Sinopse</h2>
            <p>Baseado na série de filmes O Brinquedo Assassino, Chucky acompanha Jake Wheeler (Zachary Arthur), um jovem solitário vítima de bullying na escola e que sofre com o pai abusivo. Depois de encontrar um boneco Chucky (Brad Dourif) muito antigo em um bazar de quintal, ele não esperava as atrocidades que iria desencadear. Rapidamente, o boneco passa a cometer uma série de assassinatos brutais, aterrorizando a pequena comunidade local de Hackensack. Enquanto isso, diversos segredos dos moradores são expostos publicamente, causando um verdadeiro caos. Aos poucos, Chucky e Jake acabam criando um forte laço e o boneco vê no jovem um pupilo em potencial que pode dar continuidade a sua jornada de terror. A trama ainda traz informações inéditas sobre o passado de Chucky como o assassino Charles Lee Ray, desde sua complicada infância até a adolescência.</p>
        </section>

        <br class="avaliacoes">
        <br></br>
        <h2>Avaliações</h2>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <span>(3.0/5)</span>
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
                <iframe width="100%" height="510" src="https://www.youtube.com/embed/HMTwebx_Wr0?si=r1Ng4R07rgpU7lJe"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </modal>


<script src="./javaScript/script-filme.js"></script>
<?php include_once './views/includes/footer.php' ?>