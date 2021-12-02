var compteur = 0;
var nb
(123456789).toString(10).split("")


var dechet; // temps qui passe -> doit devenir nb dechet par seconde

var MonTableau = [];

function incrementer() {
    var tableau =  (compteur).toString(10).split("")
	compteur++;
    var compt=document.getElementById("compteur")
    var vmax=300
	document.getElementById("compteur").innerHTML = compteur; // équivalent print ? fait référence à heure de html

    var ener

    if (compteur<50){
        document.getElementById("compteur").setAttribute("style", "color:green");
    }
    else{
        if (compteur<vmax){
            document.getElementById("compteur").setAttribute("style", "color:hsl("+((vmax-compteur)*120/vmax).toString()+",100%,50%)");
        }
        else{
            document.getElementById("compteur").setAttribute("style", "color:red");
    
        }
    
       
       
    
         
}
console.log(tableau)
var affichage = document.getElementById("affichagechiffre");
affichage.innerHTML = ""
tableau.forEach( (index, item) => {

    var chiffre = document.createElement('p');
    chiffre.innerHTML = tableau[item] 
    

    affichage.appendChild(chiffre)

})
    

    
  /*  if (compteur >10 ){
        document.getElementById("compteur").setAttribute("style", "color:red"); 
    } 

    if ( 5 < compteur < 10){
        document.getElementById("compteur").setAttribute("style", "color:orange");
    }*/
     
}

function cpt() {
	document.getElementById("compteur").innerHTML = "Test";
}

function init() {
	dechet = setInterval("incrementer()",1000);
}




