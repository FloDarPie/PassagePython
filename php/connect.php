<?php
  require "creditential.php";

  try { // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
  } catch (Exeption $err) {
    die("Connection failed: " . $err->getMessage());
  }
  $sql = "SELECT * FROM table" // TODO
  $res = $conn->query($sql);

  while ($line = $res->fetch()) {
    // TODO: faire affichage
  }


  // TODO: retourne une liste de sauveteur
  function search($database, $name){
    $sql = "SELECT * FROM T WHERE (
      `nom` LIKE '%$name%' OR
      `prenom` LIKE '%$name%'
    )";
    $students = $database->query($sql);

  }
?>
