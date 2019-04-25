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
              <h1 class="title is-1">Bienvenue sur notre site</h1>
              <h2 class="subtitle">Découvrez nos offres et nos travaux! </h2>
              <button class="button is-link" id="open_modal">Contactez-nous!</button>
      </div>
    </div>


    <?php
    include("formulaire.php");
    ?>

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
              <p>Utilisation des APIs de </p>
            </div>
        </div>
      </div>
    </div>

    <!-- portfolio -->
    <div class="block">
      <h2 class="subtitle heading-site">Mon portfolio</h2>
      <div class="container">
        <div class="tile is-ancestor">
          <div class="tile is-vertical is-8">
            <div class="tile">
              <div class="tile is-parent is-vertical">
                <article class="tile is-child notification is-primary">
                  <p class="title">Vertical...</p>
                  <p class="subtitle">Top tile</p>
                </article>
                <article class="tile is-child notification is-warning">
                  <p class="title">...tiles</p>
                  <p class="subtitle">Bottom tile</p>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child notification is-info">
                  <p class="title">Middle tile</p>
                  <p class="subtitle">With an image</p>
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
            <article class="tile is-child notification is-success">
              <div class="content">
                <p class="title">Tall tile</p>
                <p class="subtitle">With even more content</p>
                <div class="content">
                  <!-- Content -->
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>

    <!-- portfolio -->

      <!-- <center>
        <div class="footer-informations">
          <p> Université de Bordeaux</p>
          <p> 33 076 Bordeaux CEDEX</p>
          <div class="info" style="margin-left: 46%; font-size: 30px;">
            <div class="field is-horizontal">
              <a href="#" style="margin-right: 15px; "><i class="fab fa-twitter"></i></a>
              <a href="#" style="margin-right: 15px;"><i class="fab fa-facebook-square"></i></a>
              <a href="#" style="margin-right: 15px;"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
    </center> -->
    <!-- Contact -->



    <!-- banner -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="src/js/main.js"></script>


  </body>

  <!-- body -->
</html>
<?php
include("pied.php");
?>
