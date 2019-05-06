<?php
include("entete.php");
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">



    <!-- banner -->
    <div class ="block">
      <div class="banner">
          <img src="src/img/bg1.jpg" alt="Plusieurs ordinateurs" class="banner-image">
          <div class="banner-content">
              <h1 class="title is-1">Bienvenue chez</h1>
              <h1 class="title is-1">Pie2Eat<img src="src/img/logo_pie2eat.png" class="header-logo" style="position: relative; width:50px;"></h1>
              <h2 class="subtitle">Découvrez nos offres et nos travaux! </h2>
              <button class="button is-link" id="open_modal">Contactez-nous!</button>

      </div>
    </div>


    <?php
    include("formulaire.php");
    ?>

    <br/>
    <br/>
    <!-- portfolio -->
    <div class="block">
      <div class="container">
        <div class="tile is-ancestor">
          <div class="tile is-vertical is-8">
            <div class="tile">
              <div class="tile is-parent is-vertical">
                <article class="tile is-child notification ">
                  <p class="title">Vertical...</p>
                  <p class="subtitle">- Les réseaux sociaux et les consommateurs</p>
                  <p class="subtitle">- Le comportement et le choix du consommateur</p>
                </article>
                <article class="tile is-child notification is-warning">
                  <p class="title">...tiles</p>
                  <p class="subtitle">Bottom tile</p>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child notification is-info">
                  <p class="title">Python un outil multifonction </p>
                  <p class="subtitle">Découvrez son utilisation ...</p>
                  <figure class="image is-4by3">
                    <img src="src/img/2.jpg">
                  </figure>
                </article>
              </div>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child notification is-danger">
                <p class="title">Wide tile</p>
                <p class="subtitle">Aligned with the right tile</p>
                <div class="content">
                  <!-- Content -->
                </div>
              </article>
            </div>
          </div>
          <div class="tile is-parent">
            <article class="tile is-child notification is-primary">
              <div class="content">
                <a href="https://siecledigital.fr/2019/01/22/quel-avenir-pour-le-social-listening/" target="_blank" rel="noopener noreferrer"><p class="title">Quel avenir pour le Social Listening ?</p></a>
                <p class="subtitle">With even more content</p>
                <div class="content">
                  <!-- Content -->
                  <p>Les solutions SaaS de Social Listening utilisées par les directions marketing reposant sur des data appartenant aux réseaux sociaux, qu’en est-il de leur avenir ?</p>
                  <p> Comment les outils s’adaptent-ils à une data devenue plus rare et plus onéreuse ? </p>
                  <figure class="image is-4by3">
                    <a href="https://siecledigital.fr/2019/01/22/quel-avenir-pour-le-social-listening/" target="_blank" rel="noopener noreferrer"><img src="src/img/social_network_article.jpg"></a>
                  </figure>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>

    <!-- portfolio -->

    <!-- section: à propos -->
    <div class="block">
      <h2 class="subtitle heading-site">A propos</h2>
      <br/>
      <div class="container about">
        <div class="columns">
            <div class="column about-single-element">
              <i class="fab fa-python icon"></i>
              <p>Projet basé sur un code Python</p>
            </div>

            <div class="column about-single-element">
              <i class="fas fa-users icon"></i>
              <p>Un travail d'équipe</p>
              </div>
            <div class="column about-single-element">
              <i class="fab fa-twitter icon"></i>
              <p>Utilisation des APIs de twitter</p>
            </div>
        </div>
      </div>
    </div>

    <!-- banner -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="src/js/main.js"></script>


  </body>

  <!-- body -->
</html>
<?php
include("pied.php");
?>
