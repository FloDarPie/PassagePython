<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Création sauveteur · Les Sauveteurs du Dunkerquois</title>
    <script src="/js/create/sauveteur.js" charset="utf-8" defer></script>
    <?php require "../../../php/head.php" ?>
  </head>
  <body>
    <?php require "../../../php/header.php" ?>
    <main>
      <h1>CREATION DE SAUVETEUR</h1>
      <p>nom :</p>
      <textarea id="name" name="nom" rows="1" cols="64"></textarea>
      <p>prenom :</p>
      <textarea id="firstname" name="prenom" rows="1" cols="64"></textarea>
      <p>role :</p>
      <textarea id="role" name="role" rows="1" cols="64"></textarea>
      <p>description :</p>
      <textarea id="resume" name="description" rows="32" cols="64"></textarea>
      <button type="button" name="button" id="send">PUSH</button>
    </main>
  </body>
</html>
