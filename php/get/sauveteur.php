<?php
require "../connect.php";

function get_sauveteur($database, $id){

  $table = $database->query(''
    . 'SELECT `Sauveteur`.`nom`, `Sauveteur`.`prenom`, `Sauveteur`.`role`, `Sauveteur`.`description`, `Sauveteur`.`lien` FROM `Sauveteur`'
    . 'WHERE `Sauveteur`.`id` = ' . $id
  );

  $sauveteur = $table->fetch();
  if($sauveteur){
    $data = ''
      . '<h1 id="nom">' . $sauveteur['nom'] . " " .  $sauveteur['prenom'] . '</h1>'
      . '<h2 id="role">' . $sauveteur['role'] . '</h2>'
      . '<section id="description">' . $sauveteur['description'] . '</section>'
      . '<p>source:</p> <a id="lien" href="' . $sauveteur['lien'] . '">' . $sauveteur['lien'] . '</a>'
    ;

    return $data;
  }
}

echo get_sauveteur($db, (int)$_POST['id']);

?>
