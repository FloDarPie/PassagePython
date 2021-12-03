<?php
require "../connect.php";

function creation_bateau($database, $name, $resume){

  $database->query(''
  . 'INSERT INTO `Bateau` (`id`, `nom`, `description`) VALUES'
  . "(NULL, '$name', '$resume')"
  );
}

echo creation_bateau($db, $_POST['name'], $_POST['resume']);

?>
