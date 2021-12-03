<?php
require "../connect.php";

function recherche_bateau($database, $value){
  // on selectionne les colonnes des sauveteurs a partir d'un mot
  // contenu soit dans le prenom, soit dans le nom du bateau
  $bateaux = makeList($database, ''
  . 'SELECT `Bateau`.`id`, `Bateau`.`nom` FROM `Bateau`'
  . "WHERE `Bateau`.`nom` LIKE '%$value%'"
  . 'LIMIT 50',
  array('nom'), 'id', "/php/pages/view/bateau.php"
  );  // on limite le nombre de resultats a 50

  return $bateaux;
}

echo recherche_bateau($db, $_POST['value']);

?>
