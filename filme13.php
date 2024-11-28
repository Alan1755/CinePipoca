<?php 
//Verificar se o usuário está verificado
require_once './utils/auth.php';
checklogin();
?>
<?php include_once './views/includes/header.php' ?>

    <section class="banner">
        <img src="https://i.ibb.co/HBZtk24/c5ff8038edd7.jpg" alt="Storm">
        <div class="banner-content">
            <h1>Argo</h1>
            <p>Ação | Drama| 2009 | 1h 50min</p>
            <button id="openModal" class="watch-btn"><i class="fas fa-play"></i> Assistir Agora</button></div>
    </section>

    <main class="container2">

        <section class="sinopse">
            <h2>Sinopse</h2>
            <p>O Irã está em ebulição, com a chegada ao poder do aiatolá Khomeini. Como o antigo xá ganhou asilo político nos Estados Unidos, que haviam apoiado seu governo de opressão ao povo iraniano, há nas ruas de Teerã diversos protestos contra os americanos. Um deles acontece em frente à embaixada do país, que acaba invadida. Seis diplomatas americanos conseguem escapar do local pouco antes da invasão, indo se refugiar na casa do embaixador canadense. Lá eles vivem durante meses, sob sigilo absoluto, enquanto a CIA busca um meio de retirá-los do país em segurança. A melhor opção é apresentada por Tony Mendez (Ben Affleck), um especialista em exfiltrações, que sugere que uma produção de Hollywood seja utilizada como fachada para a operação. Aproveitando o sucesso de filmes como "Guerra nas Estrelas" e "A Batalha do Planeta dos Macacos", a ideia é criar um filme falso, a ficção científica Argo, que usaria as paisagens desérticas do Irã como locação. O projeto segue adiante com a ajuda do produtor Lester Siegel (Alan Arkin) e do maquiador John Chambers (John Goodman), que conhecem bem como funciona Hollywood.</p>
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
                <iframe width="100%" height="510" src="https://www.youtube.com/embed/6Y_uWmOxvt8?si=GlPmRLz61OjHn4ga" 
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </modal>



<script src="./javaScript/script-filme.js"></script>
<?php include_once './views/includes/footer.php' ?>