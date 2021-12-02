<?php
  require "creditential.php";

  try { // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
  } catch (Exeption $err) {
    die("Connection failed: " . $err->getMessage());
  }
  $sql = "SELECT * FROM table"
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


try {
  $database = connect($host, $username, $password, $database_name);
  echo query_students($database, $_GET['date'], $_GET['value']);
} catch(PDOException $error) {
  echo 'Connection failed : ' . $error->getMessage();
}

?>
