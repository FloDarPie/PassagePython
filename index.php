<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Nom site</title>
    <!-- API -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" charset="utf-8"></script>
    <script src="http://semantic-ui.com/dist/semantic.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="http://semantic-ui.com/dist/semantic.min.css">
    <!-- Fichiers locaux -->
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/header.css">
    <?php require "php/connect.php"; ?>
  </head>
  <body>
    <header>
        <h1><a href="index.html">Nom site</a></h1>
        <nav>
          <ul>
            <li><a href="#">page1</a></li>
            <li><a href="#">page2</a></li>
          </ul>
        </nav>
    </header>
    <main>
      <section>
        <h1>Titre</h1>
        <span class="decoration"></span>
        <?php echo makeList($db, "SELECT * FROM Sauveteur", array('prenom', 'nom')); ?>
      </section>
    </main>
  </body>
</html>
