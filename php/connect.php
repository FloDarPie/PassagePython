<?php
  require "credential.php";

  try {
    $db = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
  } catch (Exception $err) {
    die("Connection failed: " . $err->getMessage());
  }

  function debug($var) {
    echo "<script type='text/javascript'>console.log($var);</script>";
  }

  // Creer une liste html a partir d'une requette
  function makeList($db, $sql, $keys, $primary_key, $name) {
    $res = $db->query($sql);
    $ul = "<ul>";
    while ($line = $res->fetch()) {
      $ul .= '<li id="' . $line[$primary_key] . '"><a href="' . $name . '?id=' . $line[$primary_key] . '">';
      foreach ($keys as $key) {
        $ul .= "<div class='". $key ."'>". $line[$key] . "</div>";
      }
      $ul .= "</a></li>";
    }
    $ul .= "</ul>";
    return $ul;
  }

?>
