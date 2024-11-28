<?php 
//Verificar se o usuário está verificado
require_once './utils/auth.php';
checklogin();
?>
<?php include_once './views/includes/header.php' ?>

    <section class="banner">
        <img src="https://i.ibb.co/rFBH4Nq/c526fa4b3443.jpg" alt="Storm">
        <div class="banner-content">
            <h1>Terrifer</h1>
            <p>Terror | Drama| 2016 | 1h 50min</p>
            <button id="openModal" class="watch-btn"><i class="fas fa-play"></i> Assistir Agora</button></div>
    </section>

    <main class="container2">

        <section class="sinopse">
            <h2>Sinopse</h2>
            <p>Em Terrifier, um programa de televisão passa. Nele, um repórter entrevista uma mulher gravemente desfigurada, a única sobrevivente de um massacre ocorrido no Halloween anterior. Brown menciona que o corpo do assassino, conhecido apenas como "Art the Clown", desapareceu do necrotério. Na véspera do Halloween, as garotas Dawn (Catherine Corcoran) e Tara (Jenna Kanell) procuram a melhor festa da cidade. Mas, em vez de passar a noite com álcool e garotos bonitos, eles vivenciam o momento mais cruel de suas vidas. Quando param em uma pequena lanchonete e pedem uma selfie ao palhaço Art (David Howard Thornton), Dawn e Tara não suspeitam de nenhum mal. Mas quando as jovens encontram o homem mascarado assustador novamente naquela mesma noite, o horror começa. Porque Art é um palhaço assassino - e tem suas próximas vítimas em vista...</p>
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
            <span>(3/5)</span>
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
                <iframe width="100%" height="510" src="https://www.youtube.com/embed/fN5j1MtGO2Q?si=i5OPCGBdl3YHtXAU" 
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </modal>


<script src="./javaScript/script-filme.js"></script>
<?php include_once './views/includes/footer.php' ?>