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
    $res = $db->query($sql);
    $ul = "<ul>";
    while ($line = $res->fetch()) {
      $ul .= "<li><p>".$line['prenom']." ".$line['nom']."</p></li>";
    }
    $ul .= "</ul>";
    return $ul;
  }

?>
