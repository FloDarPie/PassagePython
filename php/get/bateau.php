<?php
require "../connect.php";

function get_sauve($database, $id){

  $table = $database->query(''
    . 'SELECT `Bateau`.`nom`, `Bateau`.`description` FROM `Bateau`'
    . 'WHERE `Bateau`.`id` = ' . $id
  );

  $sauveteur = $table->fetch();
  if($sauveteur){
    $data = ''
      . '<h1 id="nom">' . $sauveteur['nom'] . '</h1>'
      . '<section id="description">' . $sauveteur['description'] . '</section>'
    ;

    return $data;
  }
}

echo get_sauve($db, (int)$_POST['id']);

?>
