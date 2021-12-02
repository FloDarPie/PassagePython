<?php

function recherche_sauveteur($database, $value){
  // on selectionne les colonnes des sauveteurs a partir d'un mot
  // contenu soit dans le prenom, soit dans le nom du sauveteur
  $sauveteurs = $sauveteurs->query(''
  . 'SELECT `Sauveteur`.`id`, `Sauveteur`.`nom`, `Sauveteur`.`prenom` FROM `Sauveteur`'
  . "WHERE `Sauveteur`.`nom` LIKE '%$value%'"
  . "OR `Sauveteur`.`prenom` LIKE '%$value%'"
  . 'LIMIT 50'
  );  // on limite le nombre de resultats a 50

  $data = '<table>';
  while($sauveteur = sauveteurs->fetch()){
    // on recupere les colonnes de la table Sauveteur
    $id = $sauveteur['id'];
    $nom = $sauveteur['nom'];
    $prenom = $sauveteur['prenom'];

    $data .= '<tr>';

    $data .= '<td>' . $id . '</td>';
    $data .= '<td>' . $nom . '</td>';
    $data .= '<td>' . $prenom . '</td>';

    $data .= '</tr>';
  }
  $data .= '</table>'

  return $data;
}

recherche_sauveteur($db, $_POST['value']);
?>
