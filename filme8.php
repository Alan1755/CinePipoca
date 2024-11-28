<?php 
//Verificar se o usuário está verificado
require_once './utils/auth.php';
checklogin();
?>
<?php include_once './views/includes/header.php' ?>

    <section class="banner">
        <img src="https://i.ibb.co/J2hXrrN/b630aa54f868.jpg" alt="Storm">
        <div class="banner-content">
            <h1>Oblivion</h1>
            <p>Ação|Aventura | 2013 | 2h 2min</p>
            <button id="openModal" class="watch-btn"><i class="fas fa-play"></i> Assistir Agora</button></div>
    </section>
    
    <main class="container2">

        <section class="sinopse">
            <h2>Sinopse</h2>
            <p>Jack Harper (Tom Cruise) é o responsável pela manutenção de equipamentos de segurança em um planeta Terra irreconhecível, visto que a superfície foi destruída devido a confrontos com uma raça alienígena. O que restou da humanidade vive hoje em uma colônia lunar. Jack irá para este local daqui a duas semanas, já que está perto de terminar seu trabalho na Terra. Só que, um dia, ele encontra uma espaçonave que traz uma mulher dentro. Ao conhecê-la, tudo o que Jack sabe até então é posto em dúvida. É o início de uma jornada onde ele precisará descobrir o que realmente aconteceu no passado.</p>
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
        <!-- Trigger/Open The Modal -->
       <!--<button id="myBtn">Open Modal</button>-->

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe width="100%" height="510" src="https://www.youtube.com/embed/ge9Dod74T1I?si=FxFW24PQqnLtbknr"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </modal>



<script src="./javaScript/script-filme.js"></script>
<?php include_once './views/includes/footer.php' ?>