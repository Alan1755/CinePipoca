<?php 
//Verificar se o usuário está verificado
require_once './utils/auth.php';
checklogin();
?>
<?php include_once './views/includes/header.php' ?>

    <section class="banner">
        <img src="https://i.ibb.co/qj4ZG9R/df9a7643ffcb.jpg" alt="Storm">
        <div class="banner-content">
            <h1>Um parto de viagem</h1>
            <p>Ação | Comédia | 2010 | 1h 40min</p>
            <button id="openModal" class="watch-btn"><i class="fas fa-play"></i> Assistir Agora</button></div>
    </section>

    <main class="container2">

        <section class="sinopse">
            <h2>Sinopse</h2>
            <p>Em Um Parto de Viagem, Peter Highman (Robert Downey Jr.) está longe de casa e vai ser pai pela primeira vez. Assim, tudo o que ele queria era acompanhar o parto de seu filho e para isso ele tem exatos cinco dias para chegar a Atlanta, algo que um simples vôo faria em algumas horas. Mas ele não contava em conhecer, no meio do caminho, o aspirante a ator Ethan Tremblay (Zach Galifianakis), alguém que irá transformar sua viagem de volta numa verdadeira loucura.</p>
        </section>

        <br class="avaliacoes">
        <br></br>
        <h2>Avaliações</h2>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <span>(1.5/5)</span>
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
                <iframe width="100%" height="510" src="https://www.youtube.com/embed/yvlO_CaPssI?si=6YAIwIni0jLeFoXe"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </modal>


<script src="./javaScript/script-filme.js"></script>
<?php include_once './views/includes/footer.php' ?>