<?php
require "../connect.php";

function creation_sauve($database, $name, $firstname, $resume){

  $database->query(''
  . 'INSERT INTO `Sauve` (`id`, `nom`, `prenom`, `description`) VALUES'
  . "(NULL, '$name', '$firstname', '$resume')"
  );
}

echo creation_sauve($db, $_POST['name'], $_POST['firstname'], $_POST['resume']);

?>
