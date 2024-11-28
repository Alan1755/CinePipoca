<?php 
//Verificar se o usuário está verificado
require_once './utils/auth.php';
checklogin();
?>
<?php include_once './views/includes/header.php' ?>

    <section class="banner">
        <img src="https://i.ibb.co/xYyWxx5/08876b9fdbe7.jpg" alt="Storm">
        <div class="banner-content">
            <h1>Coringa 2</h1>
            <p>Ação | Comédia | 2024 | 1h 50min</p>
            <button id="openModal" class="watch-btn"><i class="fas fa-play"></i> Assistir Agora</button></div>
    </section>

    <main class="container2">

        <section class="sinopse">
            <h2>Sinopse</h2>
            <p>Em Coringa 2, acompanhamos a sequência do longa sobre Arthur Fleck (Joaquin Phoenix), que trabalhava como palhaço para uma agência de talentos e precisou lidar desde sempre com seus problemas mentais. Vindo de uma origem familiar complicada, sua personalidade nada convencional o fez ser demitido do emprego, e, numa reação a essa e tantas outras infelicidades em sua vida, ele assumiu uma postura violenta - e se tornou o Coringa. A continuação se passa depois dos acontecimentos do filme de 2019, após ser iniciado um movimento popular contra a elite de Gotham City, revolução esta, que teve o Coringa como seu maior representante. Preso no hospital psiquiátrico de Arkham, ele acaba conhecendo Harleen "Lee" Quinzel (Lady Gaga). A curiosidade mútua acaba se transformando em paixão e obsessão e eles desenvolvem um relacionamento romântico e doentio. Lee e Arthur embarcam em uma desventura alucinada, fervorosa e musical pelo submundo de Gotham City, enquanto o julgamento público d'O Coringa se desenrola, impactando toda a cidade e suas próprias mentes conturbadas.</p>
        </section>

        <br class="avaliacoes">
        <br>
        <br>
        <br>
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
            <p>"Uma historia raza!"</p>
            <span>- Erick Richard</span>
        </div>
        <div class="comentario">
            <p>"Muito ruim !"</p>
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
                <iframe width="100%" height="510"  src="https://www.youtube.com/embed/_OKAwz2MsJs?si=8KZ3QHmMOygTCIle" 
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </modal>



<script src="./javaScript/script-filme.js"></script>
<?php include_once './views/includes/footer.php' ?>