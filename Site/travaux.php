<?php
include("entete.php");
?>
    <script src="src/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <div class ="block" >
      <div class="banner" >
          <img src="src/img/power.jpg" class="banner-image" style="position: relative;">
      </div>
    </div>

    <!--1st paragraphe-->
    <div class="container is-fluid">
      <div class="notification">
        <h1 class="title is-1">Une bibliothèque Python adapté : Tweepy </h1>
        <p>La bibliothèque<strong> Tweepy </strong> fut le choix adapté pour nous permettre de coder un outil
        performant et en toute simplicité et ce pour plusieurs raisons : 
        </p>
        <div class="column">
          <ol>
            <li>Une documentation riche et complète :<a href="https://tweepy.readthedocs.io/en/latest/index.html">Tweepy Docs</a></a> </li>
            <li>Une expérience : Existe depuis 2013 et donc possède beaucoup de forum d'aide sur Stack Overflow</li>            </li>
            <li>Une compatibilité REST API & Sreaming API de Twitter : Ici nous utilisons uniquement les RESTful API</li>
          </ol>
        </div>
      </div>
    </div>
    <!--1st paragraphe-->
    </br>
    <!--2nd paragraphe-->
    <div class="container is-fluid">
      <div class="notification">
        <h1 class="title is-1">Mais pas que... </h1>
        <p>
          Plusieurs bibliothèques python ont sont nécesssaires au bon fonctionnement de cet outils dont voici la liste et leur dscription : 
        </p>
        <div class="column">
          <ol>
            <li><strong>numpy</strong> : Pour la création de tableaux (array) </li>
            <li><strong>pandas</strong> : Pour la création de tableaux de données (data frame) que l'on peut sauvegarder
            dans un tableau excel pour ensuite en exploiter les données.</li>
            <li><strong>textblob</strong> : Permet le traitement de données texte. Il fournit une API simple 
            permettant le traitement du langage et plus particulièrement : l'analyse de sentiments. </li>
            <li><strong>re</strong> : Regular expression operations : Permet de nettoyer les tweets des caractères inutiles. </li>
            <li><strong>matplotlib</strong> : Permet de visualiser les données traités sous forme graphique. </li>
            <li><strong>json</strong> : Permet de sérialiser ( inclure des données dans un flux ) </li>
            <li><strong>collections</strong> : Avec Counter qui permet de compter des élèments.</li>
            <li><strong>wordcloud</strong> :Permet de générer un nuage de mots de différentes tailles, qui représentent la 
            fréquence ou l'importance de chaque mot.</li>
            <li><strong>plotly</strong> : Une bibliothèque qui permet de générér des graphes en ligne (similaire à matplotlib).</li>            
          </ol>
        </div>
      </div>
    </div>
    <!--2nd paragraphe-->
    </br>
    <!--3rd paragraphe-->
    <div class="container is-fluid">
      <div class="notification">
        <h1 class="title is-1 has-text-centered">Un développement en 3 parties</h1>
      </div>
      <div class="notification">
        <!--Part 1-->
        <h2 class="title is-2">Un code multifonction</h2>
        <div class="columns">
          <div class="column about-single-element-1">
            <p>Nous sommes une équipe de 3 développeurs et nous avons fait le choix de coder en utilisant la plateforme github 
              qui est une solution de contrôle de version de code très performante et largement utilisé.</p>
            <p>L'intégralité de notre code se trouve par ailleurs sur notre <a href="https://github.com/Madmax21x/TER_twitter_API.git">github</a></p>
            <p>La 1ère étape fut tout d'abord de récupérer les <strong>identifiants développeurs</strong> twitter permettant de se connecter à leurs API.</p>
            <p>Ainsi nous disposons des accès de base à leurs données qui est limité, mais il est possible de payer pour avoir accès à plus de fonctionnalités.</p>
          </div>
          <div class="column about-single-element-1">
            <center>
              <img src="src/img/credencials_img.png" class="is-rounded" style="position: relative; width: 300px;">
            </center>
          </div>
        </div>
        <!--Part 1-->
        <!--Part 2-->
        <div>
          <div class="columns">
            <div class="column about-single-element-1">
              <center>
                <img src="src/img/code1.png" class="is-rounded" style="position: relative; width: 400px;">
              </center>
            </div>
            <div class="column about-single-element-1">
                <h3 class="subtitle is-3">Différentes classes pour différents usages :</h3>
                <p class="subtitle is-5"> - TwitterAuthenticator :</p>
                <p>TwitterAuthenticator est une classe qui sert à récupérer nos identifiants développeurs twitter pour seconnecter à leurs API.</p>
                <br/>
                <p class="subtitle is-5"> - TwitterStreamer:</p>
                <p>TwitterStreamer permet de traiter en temps réel les tweets.</p>
            </div>
            <div class="column about-single-element-1">
                <br/>
                <p class="subtitle is-5"> -  TweetAnalyser :</p>
                <p>Permet de nettoyer les tweets récupérés de tout caractères inutiles mais aussi de faire l'analyse sentimatale des tweets 
                    ainsi que la répartition dans un tableau de données des informations spécifiques récupérés par tweet. </p>
                <br/>
                <p class="subtitle is-5"> - TwitterListener :</p>
                <p>TwitterListener permet quand à lui de stocker un grand nombre de tweet dans un fichier ".txt".</p>
            </div>
          </div>
        </div>
        <!--Part 2-->
        <!--Part 3-->
        <div>
          <div class="columns">
            <div class="column about-single-element-1">
            </div>
            <div class="column about-single-element-1">
              <center>
                  <img src="src/img/code2.png" class="is-rounded" style="position: relative; width: 400px;">
              </center>
            </div>
          </div>
        </div>
        <!--Part 3-->
      </div>
    </div>
    <!--3rd paragraphe-->


<?php
include("pied.php");
?>
