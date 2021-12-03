<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Les Sauveteurs du Dunkerquois</title>
    <?php
      require "php/head.php";    
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

  </body>
</html>
