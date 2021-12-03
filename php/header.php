<header>
  <h1><a href="/index.php">Les Sauveteurs</a></h1>
  <nav>
    <ul>
      <li><a href="/php/pages/creation/sauveteur.php">Création Sauveteur</a></li>
      <li><a href="/php/pages/creation/sauve.php">Création Sauvé</a></li>
      <li><a href="/php/pages/creation/bateau.php">Création Bateau</a></li>
    </ul>
  </nav>
  <button type="button" name="button" onclick="openForm()"><i class="fas fa-wheelchair"></i></button>
</header>

<div class="loginPopup">
  <div class="formPopup" id="popupForm">
    <form action="" class="formContainer" name="handi">
        <div id="type-handi">
          <label><input type="checkbox" name="park" value="true">Parkinson</label>
          <label><input type="checkbox" name="dalt" value="true">Daltonien</label>
          <label><input type="checkbox" name="dys" value="true">Dyslexique</label>
        </div>
        <div id="reponse">
          <button type="submit" class="btn" id="submit">Valider</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
        </div>
    </form>
  </div>
</div><div class="loginPopup">
  <div class="formPopup" id="popupForm">
    <form action="index.php" class="formContainer" name="handi">
        <div id="type-handi">
          <label><input type="checkbox" name="park" value="true">Parkinson</label>
          <label><input type="checkbox" name="dalt" value="true">Daltonien</label>
          <label><input type="checkbox" name="dys" value="true">Dyslexique</label>
        </div>
        <div id="reponse">
          <button type="submit" class="btn" id="submit">Valider</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
        </div>
    </form>
  </div>
</div>



<script type="text/javascript">
var min = 0;
var seconde =0;

var dechet; // temps qui passe -> doit devenir nb dechet par seconde
var digit_pos = 0
var aiguille_deg = 0
var attendu = 0
var x = 1/attendu

var compteur=0;

var dechet; // temps qui passe -> doit devenir nb dechet par seconde



function incrementer() {

  var taux = 6.8*compteur/600;

  if(taux<136){
      document.getElementById("aiguille").style.transform = 'rotate('+taux*180/136+'deg)'
  }

  if (seconde>=60){
      min+=1;
      seconde=0
  }
  else {
      seconde+=0.1
  }

  compteur+=1

  var compt=document.getElementById("compteur")

document.getElementById("co2").innerHTML =((taux/10).toFixed(2)+ "   g de co2" ); // équivalent print ? fait référence à heure de html
  document.getElementById("cpt").innerHTML =(min + "  min "+ seconde.toFixed(0)+ " secondes");
  document.getElementById("compteur").setAttribute("style", "color:black");
  document.getElementById("min").innerHTML =(((min*60+seconde)*19/3600).toFixed(2));


}

function cpt() {
document.getElementById("compteur").innerHTML = "Test";
}

function init() {
dechet = setInterval("incrementer()",100);
}


function move_aiguille() {
aiguille_deg = attendu*180/10 - (1/x)*180/10
document.getElementById("aiguille").style.transform = 'rotate('+aiguille_deg+'deg)'
}



</script>
<div id="bulleVerte">
  <div hidden id="bulle">
    <div id="cadran">
      <div id="aiguille"></div>
    </div>
    <div id="cpt-ges-text">
      <p id="co2"></p>
    </div>
  </div>
</div>
<div id="bulleOrange" style="text-align:left">
  <p id="message" style="color: white; font-size: 12pt; padding-left: 10px;" >
    Tu as laiss&eacute ta chambre allum&eacutee<br>
    pendant <span id="min"></span> min.
  </p>
</div>
