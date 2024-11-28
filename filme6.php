<?php 
//Verificar se o usuário está verificado
require_once './utils/auth.php';
checklogin();
?>
<?php include_once './views/includes/header.php' ?>

    <section class="banner">
        <img src="https://i.ibb.co/zr7v0Wx/378c2eb4f2b9.jpg" alt="Storm">
        <div class="banner-content">
            <h1>Kong</h1>
            <p>Ação | Aventura | 2005 | 3h 00min</p>
            <button id="openModal" class="watch-btn"><i class="fas fa-play"></i> Assistir Agora</button></div>
    </section>

    <main class="container2">

        <section class="sinopse">
            <h2>Sinopse</h2>
            <p>Em 1933, Ann Darrow (Naomi Watts), uma atriz de vaudeville, enfrenta dificuldades para se sustentar, como vários outros americanos durante a Grande Depressão. Ela caminha pelas ruas de Manhattan pensando na possibilidade de trabalhar em um cabaré, até que a fome a faz roubar uma maçã. Ann é salva pelo cineasta Carl Denham (Jack Black), que oferece a ela o papel principal em sua próxima produção. Inicialmente indecisa, Ann aceita a oferta após saber que o roteirista é o conceituado dramaturgo Jack Driscoll (Adrien Brody). Na verdade Carl está em apuros, já que o patrocínio para concluir seu filme inacabado foi cancelado e sua antiga atriz principal abandonou o projeto. Apesar dos problemas, Carl embarca a equipe e o elenco de seu filme no cargueiro fretado S.S. Venture. O objetivo da viagem é chegar na Ilha da Caveira, que tem a fama de abrigar uma raça perdida e várias criaturas consideradas extintas.</p>
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
                <iframe width="100%" height="510" src="https://www.youtube.com/embed/3_S7A6UwTG8?si=NXyR5ZAEX4upSj9D" 
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </modal>



<script src="./javaScript/script-filme.js"></script>
<?php include_once './views/includes/footer.php' ?>