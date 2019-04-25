<?php
include("entete.php");
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<div class ="block" >
  <div class="banner" >
      <img src="src/img/bg12.jpg" class="banner-image" style="position: relative;">
      <div class="banner-content-1" style="position: absolute; top: 25%; left: 5%;" >
          <h1 class="subtitle" style="color:#FFFFFF; font-size: 60px;">Découvrez nos offres!</h1>
          <button class="button is-link" id="open_modal">Contactez-nous!</button>
  </div>
</div>

<?php
include("formulaire.php");
?>

<div class="block">
  <br/>
  <br/>
  <h2 class="subtitle heading-site-1" style= "margin-left: 10%; font-size: 30px;">Les réseaux sociaux et les consommateurs</h2>
  <br/>
  <div class="container about">
    <div class="columns">
        <div class="column about-single-element-1">
          <img src="src/img/reseau.jpg" class="banner-image" style="position: relative;">
        </div>

        <div class="column about-single-element-1" style="text-align:justify;">
          <p>L’émergence et la multiplication des réseaux sociaux ont révolutionné notre
             manière de partager, dénoncer, nous exprimer, informer… Les individus partagent
             de plus en plus leur quotidien, leurs centres d'intérêts, leurs émotions, leurs valeurs,
             leurs habitudes de consommateurs.
           Le fait de partager permet de renforcer son "self-esteem" en suscitant des réactions parmi
         ses amis (likes, re-partages, retweets, commentaires) mais aussi de se sentir populaire ou influent.
         Pour avoir du succès, les contenus qu'on partage doivent créer de l'émotion, de l'admiration,
         de l'amusement chez les autres internautes. Il faut du contenu qui capte l'attention à travers le
         visuel (images, vidéos, gifs..).
       </p>
          <p>Les réseaux sociaux ont changé notre façon de consommer. Il devient indispensable
            pour les entreprises de changer leurs manières de communiquer. La communication se fait
            désormais dans les deux sens. Les publicités ne suffisent plus. La voix des consommateurs
            est plus qu'importante. Désormais les marques communiquent, les internautes interpellent
             et il faut que les marques répondent en retour. </p>
          </div>
    </div>
  </div>
</div>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="src/js/main.js"></script>

<?php
include("pied.php");
?>
