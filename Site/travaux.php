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
        <h1 class="title is-1">Une bibliothèque Python adaptée: Tweepy </h1>
        <p>La bibliothèque<strong> Tweepy </strong> fut le choix adapté pour nous permettre de coder un outil
        performant et en toute simplicité et ce pour plusieurs raisons:
        </p>
        <div class="column">
          <ol>
            <li>Une documentation riche et complète :<a href="https://tweepy.readthedocs.io/en/latest/index.html">Tweepy Docs</a></a> </li>
            <li>Une expérience : Existe depuis 2013 et donc possède beaucoup de forum d'aide sur Stack Overflow</li>            </li>
            <li>Une compatibilité REST API & Sreaming API de Twitter: Ici nous utilisons uniquement les RESTful API</li>
          </ol>
        </div>
      </div>
    </div>
    <!--1st paragraph-->
    </br>

    <!--2nd paragraph-->
    <div class="container is-fluid">
      <div class="notification">
        <h1 class="title is-1">Mais pas que... </h1>
        <p>
          Plusieurs bibliothèques Python sont nécessaires au bon fonctionnement de cet outil dont voici la liste et la description:
        </p>
        <div class="column">
          <ol>
            <li><strong>numpy</strong> : Pour la création de tableaux (array). </li>
            <li><strong>pandas</strong> : Pour la création de tableaux de données (data frame) que l'on peut sauvegarder
            dans un tableau Excel pour ensuite en exploiter les données.</li>
            <li><strong>textblob</strong> : Permet le traitement de données texte. Il fournit une API simple
            permettant le traitement du langage et plus particulièrement: l'analyse de sentiments. </li>
            <li><strong>re</strong> : Regular expression operations: Permet de nettoyer les tweets des caractères inutiles. </li>
            <li><strong>matplotlib</strong> : Permet de visualiser les données traitées sous forme graphique. </li>
            <li><strong>json</strong> : Permet de sérialiser (inclure des données dans un flux). </li>
            <li><strong>collections</strong> : Avec Counter qui permet de compter des éléments.</li>
            <li><strong>wordcloud</strong> :Permet de générer un nuage de mots de différentes tailles, qui représentent la
            fréquence ou l'importance de chaque mot.</li>
            <li><strong>plotly</strong> : Une bibliothèque qui permet de générer des graphes en ligne (similaire à matplotlib).</li>
          </ol>
        </div>
      </div>
    </div>
    <!--2nd paragraph-->
    </br>

    <!--3rd paragraph-->
    <div class="container is-fluid">
      <div class="notification">
        <h1 class="title is-1 has-text-centered">Un développement en 3 parties</h1>
      </div>
      <div class="notification">
        <!--Part 3.1-->
        <h2 class="title is-2">Un code multifonction</h2>
        <div class="columns">
          <div class="column about-single-element-1">
            <p>Nous sommes une équipe de 3 développeurs et nous avons fait le choix de coder en utilisant la plateforme Github
              qui est une solution de contrôle de versions de code très performante et largement utilisée.</p>
            <p>L'intégralité de notre code se trouve par ailleurs sur notre <a href="https://github.com/Madmax21x/TER_twitter_API.git">Github</a></p>
            <p>La 1ère étape fut de récupérer les <strong>identifiants développeurs</strong> twitter permettant de se connecter à leurs APIs.</p>
            <p>Ainsi, nous disposons des accès de base à leurs données qui est limité, mais il est possible de payer pour avoir accès à plus de fonctionnalités.</p>
          </div>
          <div class="column about-single-element-1">
            <center>
              <img src="src/img/credencials_img.png" class="is-rounded" style="position: relative; width: 300px;">
            </center>
          </div>
        </div>
        <!--Part 3.1-->
        <!--Part 3.2-->
        <div>
          <div class="columns">
            <div class="column about-single-element-1">
              <br/>
              <center>
                <img src="src/img/code1.png" class="is-rounded" style="position: relative; width: 400px;">
              </center>
            </div>
            <div class="column about-single-element-1">
                <h3 class="subtitle is-3">Différentes classes pour différents usages:</h3>
                <p class="subtitle is-5"> - TwitterAuthenticator:</p>
                <p>TwitterAuthenticator est une classe qui sert à récupérer nos identifiants développeurs twitter pour se connecter à leurs APIs.</p>
                <br/>
                <p class="subtitle is-5"> - FollowerAnalyzer:</p>
                <p>Permet de récupérer et stocker des informations précises sur les followers d'un compte (ex: son nom, sa localisation,
                si il/elle est vérifié(e), son nombre de followers, d'ami(e)s, etc..)
                </p>
            </div>
            <div class="column about-single-element-1">
                <p class="subtitle is-5"> -  TweetAnalyser:</p>
                <p>Permet de nettoyer les tweets récupérés de tous caractères inutiles mais aussi de faire l'analyse sentimatale des tweets
                    ainsi que la répartition dans un tableau de données des informations spécifiques récupérées par tweet. </p>
                <br/>
                <p class="subtitle is-5"> - TwitterListener:</p>
                <p>TwitterListener permet quant à lui de stocker un grand nombre de tweets dans un fichier ".txt".</p>
                <br/>
                <p class="subtitle is-5"> - TwitterStreamer:</p>
                <p>TwitterStreamer permet de traiter en temps réel les tweets.</p>
            </div>
          </div>
        </div>
        <!--Part 3.2-->
        <!--Part 3.3-->
        <div>
          <div class="columns">
            <div class="column about-single-element-1">
              <p class="subtitle is-5"><strong> - TwitterClient</strong>:</p>
              <p>La fonciton la plus importante du code, elle permet premièrement, en appellant <em>TwitterAuthenticator</em> de se connecter,
              s'authentifier auprès de Twitter et via son API nous donner accès à différentes fonctionnalités.
              Nous nous sommes donc concentrés sur l'accès à certains types de données via différentes fonctions:</p>
              <br/>
              <ol>
                <li>get_user_timeline_tweets: renvoie un nombre prédéfini de tweets disponibles sur la timeline d'un utilisateur.</li>
                <li>get_friend_list: renvoie un nombre prédéfini d'ami(e)s pour un utilisateur donné.</li>
                <li>get_follower_list: renvoie un nombre prédéfini de followers pour un utilisateur donné.</li>
                <li>get_home_timeline_tweets: renvoie un nombre prédéfini de tweets disponibles sur la timeline du compte utilisateur.</li>
                <li>get_hashtag_tweets: Permet de récupérer tous les tweets qui ont un hashtag prédéfini dans leurs textes.</li>
                <li>get_other_hashtag: Permet de récupérer les mots ou hashtags les plus fréquents qui sont associés avec un hashtag prédéfini.</li>
                <li>get_trends: Permet de récupérer les tendances par localisation (avec un code WOE_ID prédéfini).</li>
              </ol>

            </div>
            <div class="column about-single-element-1">
              <center>
                  <img src="src/img/code3.png" class="is-rounded" style="position: relative; width: 400px;">
              </center>
            </div>
          </div>
        </div>
        <!--Part 3.3-->
      </div>
    </div>
    <!--3rd paragraph-->
    <br/>

    <!--4th paragraph-->
    <div class="container is-fluid">
      <div class="notification">
        <h2 class="title is-2">Accèder à votre demande en quelques secondes...</h2>
        <div class="columns">
          <div class="column about-single-element-1">
            <p>
            La seconde partie du développement a été de se concentrer à créer une interface permettant
            d'automatiser les demandes de données et via un ensemble de questions qui sont posées à l'utilisateur
            lui fournir un accès à ces données et un premier traitement approprié.
            </p>
            <br/>
            <p>
            <strong>Exemple :</strong> Ici on teste avec le compte <em>'EmmanuelMacron'</em>, on précise la langue
            (fr), le nombre de tweets qu'on veut récupérer sur sa timeline (ici 300), le nombre de tweet que l'on
            souhaite voir dans un tableau avec les données récupérées (ici 10).
            </p>
            <br/>
            <p>Nous obtenons certaines statistiques comme la longueur moyenne des tweets de Mr Macron, le nombre
            de likes en moyenne, ainsi que le nombre moyen de retweets.
            </p>
          </div>
          <div class="column about-single-element-1">
            <center>
              <img src="src/img/testcode_1.png" class="is-rounded" style="position: relative; width: 500px;">
            </center>
          </div>
        </div>
        <div class="columns">
            <div class="column about-single-element-1">
              <br/>
              <p class="subtitle is-5">- Analyse de sentiments -</p>
              <p>
                Nous pouvons ensuite choisir d'afficher un diagramme circulaire des sentiments des tweets de Mr Macron:
              </p>
              <br/>
              <br/>
              <p class="subtitle is-5">- Graphique like / retweets en fonction du temps -</p>
              <p>
              Enfin, nous pouvons choisir d'afficher un graphique de l'évolution des ses likes et retweets au cours de
              ses derniers 300 tweets.
              </p>
            </div>
            <div class="column about-single-element-1">
              <center>
                <figure class="is-320x320">
                  <img src="src/img/testcode_2.png" class="is-rounded" style="position: relative; width: 400px;">
                </figure>
              </center>
            </div>
          </div>
          <div class="column about-single-element-1">
              <center>
                <img src="src/img/testcode_3.png" class="is-rounded" style="position: relative;">
              </center>
          </div>
        <div>
          <p>Ici, il est par exemple intéressant de s'intéresser au pic autour de la date du 15 avril 2019.</p>
          <p>Après quelques recherches, il est facile de trouver qu'il s'agit d'un tweet posté lors de l'incendie
            de notre Dame.</p>
          <p><strong>Le tweet en question:</strong></p>
        </div>
        <div class="column about-single-element-1">
          <center>
            <img src="src/img/testcode_4.png" class="is-rounded" style="position: relative;width: 600px;">
          </center>
        </div>

      </div>
    </div>
    <!--4th paragraph-->
    <br/>

    <!--5 paragraph-->
    <div class="container is-fluid">
      <div class="notification">
        <h2 class="title is-2">Big Data, Stockage & Analyse</h2>
        <div class="columns">
          <div class="column about-single-element-1">
            <p>La 3ème et dernière partie concerne le traitement massif de données quantitatives, leurs stockages dans
              un fichier xlsx et enfin son traitement.
            </p>
            <br/>
            <p>
              Pour commencer, nous utilisons une version améliorée de <strong>TwitterClient </strong>vue précédement qui s'occupe ici
              précisément de récupérer un grand nombre de tweets (1000 ici) pour un certain mot clé (Boeing ici).
            </p>
            <br/>
            <p>Toutes ces données sont stockées pour ensuite être traitées par une seconde partie via
              <strong>analyse_tweet</strong> qui permet de nettoyer les tweets, faire une analyse sentimentale du texte,
              générer un diagramme circulaire de sentiments, générer un wordcloud des mots les plus fréquents dans cet
              ensemble de tweets et enfin d'afficher cette fréquence de mots sous la forme d'un diagramme en bâton.
            </p>
          </div>
          <div class="column about-single-element-1">
            <center>
              <img src="src/img/bigdata1.png" class="is-rounded" style="position: relative; width: 600px;">
            </center>
          </div>
        </div>
        <div class="columns">
          <div class="column about-single-element-1">
            <center>
                <img src="src/img/pie_plot.jpg" class="is-rounded" style="position: relative; width: 360px;">
            </center>
          </div>
          <br/>
          <div class="column about-single-element-1">
            <center>
                <img src="src/img/Boeing_wordcloud.png" class="is-rounded" style="position: relative; width: 460px;">
            </center>
          </div>
        </div>
        <div class="column about-single-element-1">
          <center>
            <img src="src/img/word_frequency.png" class="is-rounded" style="position: relative; width: 800px;">
          </center>
        </div>
      </div>
    </div>
    <!--5 paragraph-->
<?php
include("pied.php");
?>
