
<!DOCTYPE html>
<html>
<head>

    <title>Descriptif du compteur</title>
    <link href="style.css" rel="stylesheet">

    <?php require "./head.php"; ?>

    <script type="text/javascript" src="compteur.js"></script>
</head>

<body onload="init();">
  <?php require "./header.php" ?>
    <h2> Etapes de réalisation du Compteur GES </h2>

    Ce compteur a pour objectif de sensibiliser à l'émission de CO2 d'un site Internet. <br>
    Nous avons valorisé le côté interactif via les bulles et le compteur analogique. <br>
    De plus, on a choisi une référence commune à tous les foyers via l'ampoule.

    <p>
        Plusieurs perspectives se sont offertes à nous: </p>
    <ul>
        <li>Chercher à mettre en relation différentes variables <em>( débit internet, taille et poids du site, temps de réalisation...)</em>
            Au vue de la complexité du calcul et de la modéliation trop vaste nous nous sommes penchés sur une deuxième idée</li>
        <li>    Récupérer une information venant d'un autre site via API ou Scraping. Sans aboutissement après de longues recherches et beaucoup d'essais nous avons cherché une autre solution plus simple.
        </li>
        <li>Constituer notre propre relation se projetant dans des moyennes:<br>
            <ul> <br>
                <li>Une personne consulte internet environ <span style='font-weight: bold;'>2h et 25 min/jour</span></li>
                <li>En moyenne, 1 site dispose de <span style='font-weight: bold;'>300 liens</span></li>
                <li>1 lien a <span style='font-weight: bold;'>5%</span> de chance qu'une personne clique dessus </li>
                <li>Une page d'un site libère environ <span style='font-weight: bold;'>6.8g de CO2</span> lors de son chargement</li>
                <li>Nous obtenons donc une moyenne de <span style='font-weight: bold;'>15 clics par personnes</span> soit 1 clic toute les <span style='font-weight: bold;'>10 minutes </span></li>
            </ul>
        </li>
    </ul>


Notre compteur est donc un rapport temps/émission de CO2 d'une personne lambda sur une page internet quelconque.
L'Union Européenne se fixant pour objectif une baisse de <em style='font-weight: bold;'>55%</em> de l'émission de CO2.
Notre indicateur fait donc référence à la moyenne de 6.8 g de CO2 émis, la zone verte correspond à la validation de l'objectif et à contrario il se termine quand on a dépassé 55% de la moyenne. <br>
<br>

<em > Sources : "actu.fr", "journal du net.fr , "kinsta.fr", "european-union.europa.eu" </em>

</p>
    </div>

    <div id="affichagechiffre">

    </div>


</body>

</html>
