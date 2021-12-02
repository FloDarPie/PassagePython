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
    <script src="js/search.js" charset="utf-8"></script>
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
    <header>
        <h1><a href="index.html">Les Sauveteurs du Dunkerquois</a></h1>
        <nav>
          <ul>
            <li><a href="#">page1</a></li>
            <li><a href="#">page2</a></li>
          </ul>
        </nav>
    </header>
    <main>
      <banner>
        <form id="form">
          <input type="search" id="query" name="q" placeholder="Recherche...">
          <button id="bouton" type=button>Recherche</button>
        </form>
        <span class="decoration"></span>
      </banner>
      <section>
        <h1>Les Sauveteurs du Dunkerquois</h1>
        <?php echo makeList($db, "SELECT * FROM Sauveteur", array('prenom', 'nom')); ?>
      </section>
    </main>
  </body>
</html>
