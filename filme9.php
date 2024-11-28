<?php 
//Verificar se o usuário está verificado
require_once './utils/auth.php';
checklogin();
?>
<?php include_once './views/includes/header.php' ?>

    <section class="banner">
        <img src="https://i.ibb.co/rk3c5Fc/17ef931952ff.jpg" alt="Storm">
        <div class="banner-content">
            <h1>Hobbit</h1>
            <p>Ação|Ficção Científica | 2014 | 3h 2min</p>
            <button id="openModal" class="watch-btn"><i class="fas fa-play"></i> Assistir Agora</button></div>
    </section>

    <main class="container2">

        <section class="sinopse">
            <h2>Sinopse</h2>
            <p>A Batalha dos Cinco Exércitos, após ser expulso da montanha de Erebor, o dragão Smaug ataca com fúria a cidade dos homens que fica próxima ao local. Após muita destruição, Bard (Luke Evans) consegue derrotá-lo. Não demora muito para que a queda de Smaug se espalhe, atraindo os mais variados interessados nas riquezas que existem dentro de Erebor. Entretanto, Thorin (Richard Armitage) está disposto a tudo para impedir a entrada de elfos, anões e orcs, ainda mais por ser tomado por uma obsessão crescente pela riqueza à sua volta. Paralelamente a estes eventos, Bilbo Bolseiro (Martin Freeman) e Gandalf (Ian McKellen) tentam impedir a guerra.</p>
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
                <iframe width="100%" height="510" src="https://www.youtube.com/embed/7EHl1DMKKKE?si=_FiRkcK5wmtaqpvo"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </modal>



<script src="./javaScript/script-filme.js"></script>
<?php include_once './views/includes/footer.php' ?>