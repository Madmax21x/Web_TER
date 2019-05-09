<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <!-- head -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="src/img/icon1.png">
    <title>TER API - Pie2Eat</title>

    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="src/css/main.css" type="text/css" media="all"/>
    <!-- css -->

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:700|Montserrat:700" rel="stylesheet">
    <!-- Font -->

    <!-- meta SEO -->
    <meta name='description' content='Site de la sartup Pie2Eat sur les API des réseaux sociaux.'>
    <meta name="keywords" content="API, twitter, e-reputation, data">
    <!-- meta SEO -->
    <script src="src/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


  </head>
  <!-- head -->

  <!-- body -->
  <body>
    <!-- header -->
    <div class="container-fluid">
      <nav class="navbar is-fixed-top is-light" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="index.php">
            <img src="src/img/test_2.png" alt="Logo Pie2Eat">
            <img src="src/img/pie2Eat.png" alt="Text Pie2Eat">
          </a>

          <a role="button" class="navbar-burger burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div class="navbar-menu" id="navMenu">
          <div class="navbar-start">
            <a class="navbar-item" href="index.php">Accueil</a>

            <a class="navbar-item" href="services.php">Nos services</a>

            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">Nos ressources</a>

              <div class="navbar-dropdown">
                <a class="navbar-item" href="travaux.php">Nos travaux</a>
                <a class="navbar-item" href="presse.php">Presse</a>
                <a class="navbar-item" href="contact.php">Contact</a>
                <hr class="navbar-divider">
                <a class="navbar-item" href="abstract.php">Abstract</a>
              </div>
            </div>
          </div>
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a class="button is-link" id="open_modal">
                  <strong>Contactez-nous!</strong>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
<?php
include("formulaire.php")
?>
    <script src="src/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- header -->
