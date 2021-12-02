<?php
  require "creditential.php";

  echo "<script type="text/javascript">
    console.log('1');
  </script>";
  try { // Create connection
    $db = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
  } catch (Exception $err) {
    die("Connection failed: " . $err->getMessage());
  }
  echo "<script type="text/javascript">
    console.log('ALAID');
  </script>";
  // Creer une liste html de sauveteur
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
