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

   /* if (compteur<50){
        document.getElementById("compteur").setAttribute("style", "color:green");
    }
    else{
        if (compteur<vmax){
            document.getElementById("compteur").setAttribute("style", "color:hsl("+((vmax-compteur)*120/vmax).toString()+",100%,50%)");
        }
        else{
            document.getElementById("compteur").setAttribute("style", "color:red");

        }*/





}
/*
console.log(tableau)
var affichage = document.getElementById("affichagechiffre");
affichage.innerHTML = ""
tableau.forEach( (index, item) => {

    var chiffre = document.createElement('p');
    chiffre.innerHTML = tableau[item]


    affichage.appendChild(chiffre)

})
 */


  /*  if (compteur >10 ){
        document.getElementById("compteur").setAttribute("style", "color:red");
    }

    if ( 5 < compteur < 10){
        document.getElementById("compteur").setAttribute("style", "color:orange");
    }*/

//}

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
