<?php
require "../connect.php";

function get_sauve($database, $id){

  $table = $database->query(''
    . 'SELECT `Sauve`.`nom`, `Sauve`.`prenom`, `Sauve`.`description` FROM `Sauve`'
    . 'WHERE `Sauve`.`id` = ' . $id
  );

  $sauveteur = $table->fetch();
  if($sauveteur){
    $data = ''
      . '<h1 id="nom">' . $sauveteur['nom'] . " " .  $sauveteur['prenom'] . '</h1>'
      . '<section id="description">' . $sauveteur['description'] . '</section>'
    ;

    return $data;
  }
}

echo get_sauve($db, (int)$_POST['id']);

?>
