<?php 
//Verificar se o usuário está verificado
require_once './utils/auth.php';
checklogin();
?>
<?php include_once './views/includes/header.php' ?>

    <section class="banner">
        <img src="https://i.ibb.co/xq9vCHL/10a860403fc5.jpg" alt="Storm">
        <div class="banner-content">
            <h1>Ela</h1>
            <p>Drama | 2013 | 2h 06min</p>
            <button id="openModal" class="watch-btn"><i class="fas fa-play"></i> Assistir Agora</button>
            </section>

    <main class="container2">

        <section class="sinopse">
            <h2>Sinopse</h2>
            <p>Gira em torno de um homem que desenvolve uma relação pessoal com o sistema operacional/assistente virtual de computador (OS) (semelhante a Siri, Cortana, Alexa ou Google Assistente) com uma voz feminina e personalidade própria.</p>
        </section>

        <br class="avaliacoes">
        <br></br>
        <h2>Avaliações</h2>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <span>(4.0/5)</span>
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
        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe width="100%" height="510" src="https://www.youtube.com/embed/gSxW32C7mjo?si=9E0cEjvJuXEdYicw"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </modal>


<script src="./javaScript/script-filme.js"></script>
<?php include_once './views/includes/footer.php' ?>