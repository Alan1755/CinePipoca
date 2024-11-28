<?php 
//Verificar se o usuário está verificado
require_once './utils/auth.php';
checklogin();
?>
<?php include_once './views/includes/header.php' ?>

    <section class="banner">
        <img src="https://i.ibb.co/27KpHHH/6ed87725dc7c.jpg" alt="Storm">
        <div class="banner-content">
            <h1>Kick-Ass 2</h1>
            <p>Ação | Comédia | 2008 | 1h 20min</p>
            <button id="openModal" class="watch-btn"><i class="fas fa-play"></i> Assistir Agora</button></div>
    </section>

    <main class="container2">

        <section class="sinopse">
            <h2>Sinopse</h2>
            <p>O ato insano de Dave Lizewski (Aaron Taylor-Johnson) em se vestir como o super-herói Kick-Ass e ir para as ruas combater o crime, mesmo sem ter qualquer tipo de superpoder, serviu de inspiração para dezenas de pessoas, que resolveram seguir o mesmo caminho. Mindy Macready (Chloë Moretz) deseja seguir como a super-heroína Hit-Girl, mas o sargento Marcus Williams (Morris Chestnut), que prometeu ao pai dela que iria cuidá-la em sua ausência, não quer que ela leve uma vida perigosa. Com isso, Mindy é obrigada a levar a vida de uma garota de sua idade, deixando de lado os atos heróicos, por mais que Dave insista para que ela faça o contrário. Entretanto, a carreira heróica de Dave não será solitária por muito tempo, já que não demora muito para conhecer o Coronel Estrelas e Listras (Jim Carrey), um ex-integrante da máfia que está reunindo um grupo de super-heróis sem poderes para combater o crime. Paralelamente, Chris D'Amico (Christopher Mintz-Plasse) prepara sua vingança contra Kick-Ass, assumindo um novo codinome: Motherfucker.</p>
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
                <iframe width="100%" height="510"  src="https://www.youtube.com/embed/naQWLBbQbBQ?si=5ZJK8PlaA08tuVUI"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </modal>



<script src="./javaScript/script-filme.js"></script>
<?php include_once './views/includes/footer.php' ?>