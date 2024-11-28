<?php 
//Verificar se o usuário está verificado
require_once './utils/auth.php';
checklogin();
?>
<?php include_once './views/includes/header.php' ?>

    <section class="banner">
        <img src="https://i.ibb.co/Sm4KWvj/42050c469cf5.jpg" alt="Storm">
        <div class="banner-content">
            <h1>Stranger Things</h1>
            <p>Terror | Drama| 2017 | 4 Temporadas</p>
            <button id="openModal" class="watch-btn"><i class="fas fa-play"></i> Assistir Agora</button></div>
    </section>

    <main class="container2">

        <section class="sinopse">
            <h2>Sinopse</h2>
            <p>Em novembro de 1983, o estudante Will Byers é abduzido por uma criatura de uma realidade alternativa chamada "Mundo Invertido", causando mistério e pavor aos habitantes de Hawkins, Indiana. Sua mãe, Joyce Byers, tenta encontrar seu paradeiro com a ajuda do xerife Jim Hopper, enquanto Mike Wheeler, Dustin Henderson e Lucas Sinclair fazem outra investigação para encontrá-lo, porém são surpreendidos quando uma estranha garota com poderes telecinéticos chamada Onze aparece na cidade. Onze é uma fugitiva do Laboratório Nacional de Hawkins, localizado nas proximidades, que faz ostensivamente pesquisas científicas para o Departamento de Energia dos Estados Unidos e realiza secretamente experimentos paranormais e sobrenaturais em humanos.</p>
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
                <iframe width="100%" height="510" src="https://www.youtube.com/embed/b6XKRA2DFQI?si=o801EtxnnEjve-jl"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </modal>


<script src="./javaScript/script-filme.js"></script>
<?php include_once './views/includes/footer.php' ?>