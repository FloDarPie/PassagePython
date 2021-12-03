<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Les Sauveteurs du Dunkerquois</title>
    <!-- API -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" charset="utf-8"></script>
    <script src="http://semantic-ui.com/dist/semantic.min.js" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/da84674338.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://semantic-ui.com/dist/semantic.min.css">
    <!-- Fichiers locaux -->
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/ui.css">
    <link rel="stylesheet" href="css/handicap.css">
    <link href="style.css" rel="stylesheet">
    <script src="js/search.js" charset="utf-8" defer></script>
    <script src="js/handicap.js" defer></script>

    <script type="text/javascript" src="compteur.js"></script>
    <?php
      if(isset($_GET['dys']))
        echo '<link rel="stylesheet" href="css/dys.css">';
      if(isset($_GET['park']))
        echo '<link rel="stylesheet" href="css/park.css">';
      if(isset($_GET['dalt']))
        echo '<link rel="stylesheet" href="css/dalt.css">';
      require "php/connect.php";
    ?>

  </head>
  <body>
    <?php require "php/header.php" ?>
    <main>
      <banner>
        <form id="form">
          <div id="entry">
            <input type="search" id="query" name="q" placeholder="Recherche...">
            <button id="bouton" type=button><i class="fas fa-search"></i></button>
          </div>
          <div id="selection">
            <label class="rad-label">
              <input type="radio" class="rad-input" name="rad" value="sauveteur" id="sauveteur" checked>
              <div class="rad-design"></div>
              <div class="rad-text">Sauveteur</div>
            </label>

            <label class="rad-label">
              <input type="radio" class="rad-input" name="rad" value="bateau" id="bateau">
              <div class="rad-design"></div>
              <div class="rad-text">Sauvé</div>
            </label>

            <label class="rad-label">
              <input type="radio" class="rad-input" name="rad" value="sauvetage" id="sauvetage">
              <div class="rad-design"></div>
              <div class="rad-text">Bateau</div>
            </label>
          </div>
        </form>
        <span class="decoration"></span>
      </banner>
      <h1>Les Sauveteurs du Dunkerquois</h1>
      <section id="section"></section>

    </main>

   </div>
 <ul id="compteur-beau">
   <li id=digit3></li>
   <li id=digit2></li>
   <li id=digit1></li>
 </ul>
 <div id="affichagechiffre">

    <div id="bulleVerte">
      <div hidden id="bulle">
        <div id="cadran">
          <div id="aiguille"></div>
        </div>
        <div id="cpt-ges-text">
          <p id="co2"></p>
        </div>
      </div>
    </div>
    <div id="bulleOrange" style="text-align:left">
      <p id="message" style="color: white; font-size: 12pt; padding-left: 10px;" >
        Tu as laiss&eacute ta chambre allum&eacutee<br>
        pendant <span id="min"></span> min.
      </p>
    </div>

  </body>
</html>
