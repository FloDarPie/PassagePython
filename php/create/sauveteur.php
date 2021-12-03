<?php
require "../connect.php";

function creation_sauveteur($database, $name, $firstname, $role, $resume){

  $database->query(''
  . 'INSERT INTO `Sauveteur` (`id`, `nom`, `prenom`, `role`, `description`) VALUES'
  . "(NULL, '$name', '$firstname', '$role', '$resume')"
  );
}

echo creation_sauveteur($db, $_POST['name'], $_POST['firstname'], $_POST['role'], $_POST['resume']);

?>
