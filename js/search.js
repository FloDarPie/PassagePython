const button = document.getElementById('bouton')
const bar = document.getElementById('query')
const section = document.getElementById('section')

const recherche_sauveteur = new XMLHttpRequest()
recherche_sauveteur.onreadystatechange = function() {
  if(this.readyState == 4 && this.status == 200){
    const text = recherche_sauveteur.responseText

    section.innerHTML = "" // retire tous les enfants de section
    section.innerHTML = text
  }
}

button.addEventListener('click', recherche);
bar.addEventListener('keydown', (evt) => {
  if (evt.key === 'Enter')
    recherche(evt);
})

function recherche(evt) {
    evt.preventDefault();
    const value = bar.value;
    bar.value = "";

    //TODO
    recherche_sauveteur.open("POST", "php/search/sauveteur.php", true)
    recherche_sauveteur.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')

    recherche_sauveteur.send('value=' + value)
}
