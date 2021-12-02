<?php
  require "creditential.php";

  try { // Create connection
    $db = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
  } catch (Exeption $err) {
    die("Connection failed: " . $err->getMessage());
  }
  $sql = "SELECT * FROM table" // TODO


  // Creer une list html de sauveteur
  function makeList($sql) {
    $res = $db->query($sql);
    $ul = "<ul>";
    while ($line = $res->fetch()) {
      $ul .= "<li><p>${$line['prenom']} ${$line['nom']}</p></li>";
    }
    $ul .= "</ul>";
    return $ul;
  }

  // Recherche les sauveteurs par nom
  function searchSauveteur($name, $table){
    $sql = "SELECT * FROM sauveteur WHERE (
      `nom` LIKE '%$name%' OR
      `prenom` LIKE '%$name%'
    )";
    $res = $db->query($sql);
    return $res;
  }
?>
