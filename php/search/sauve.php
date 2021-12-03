<?php
require "../connect.php";

function recherche_sauve($database, $value){
  // on selectionne les colonnes des sauveteurs a partir d'un mot
  // contenu soit dans le prenom, soit dans le nom du sauveteur
  $sauveteurs = makeList($database, ''
  . 'SELECT `Sauve`.`id`, `Sauve`.`nom`, `Sauve`.`prenom` FROM `Sauve`'
  . "WHERE `Sauve`.`nom` LIKE '%$value%'"
  . "OR `Sauve`.`prenom` LIKE '%$value%'"
  . 'LIMIT 50',
  array('nom', 'prenom'), 'id', "/php/pages/view/sauve.php"
  );  // on limite le nombre de resultats a 50

  return $sauveteurs;
}

echo recherche_sauve($db, $_POST['value']);

?>
