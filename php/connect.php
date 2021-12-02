<?php
  require "creditential.php";

  try {
    $db = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
  } catch (Exception $err) {
    die("Connection failed: " . $err->getMessage());
  }

  function debug($var) {
    echo "<script type='text/javascript'>console.log($var);</script>";
  }

  // Creer une liste html de sauveteur
  function makeList($db, $sql) {
    debug($sql);
    $res = $db->query($sql);
    $ul = "<ul>";
    while ($line = $res->fetch()) {
      $ul .= "<li><p>${$line['prenom']} ${$line['nom']}</p></li>";
    }
    $ul .= "</ul>";
    return $ul;
  }

  // Recherche les sauveteurs par nom
  function searchSauveteur($db, $name, $table){
    $sql = "SELECT * FROM sauveteur WHERE (
      `nom` LIKE '%$name%' OR
      `prenom` LIKE '%$name%'
    )";
    $res = $db->query($sql);
    return $res;
  }
?>
