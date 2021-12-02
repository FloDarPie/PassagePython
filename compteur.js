var compteur = 1;
var dechet; // temps qui passe -> doit devenir nb dechet par seconde

function incrementer() {
	compteur++;
	document.formulaire.heure.value = compteur; // équivalent print ? fait référence à heure de html
}

function init() {
	dechet = setInterval("incrementer()", 1000);
}