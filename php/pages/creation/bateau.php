<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Création bateau · Les Sauveteurs du Dunkerquois</title>
    <?php require "../../../php/head.php" ?>
    <script src="/js/create/bateau.js" charset="utf-8" defer></script>
  </head>
  <body>
    <?php require "../../../php/header.php" ?>
    <main>
      <h1>CREATION DE BATEAU</h1>
      <p>nom :</p>
      <textarea id="name" name="nom" rows="1" cols="64"></textarea>
      <p>description :</p>
      <textarea id="resume" name="description" rows="32" cols="64"></textarea>
      <button type="button" name="button" id="send">PUSH</button>

    </main>
  </body>
</html>
