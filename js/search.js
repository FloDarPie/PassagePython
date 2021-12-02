b = document.getElementById('bouton');
bar = document.getElementById('query');


b.addEventListener('click', recherche );
bar.addEventListener('keydown', (evt) => {
if (evt.key === 'Enter') 
    recherche(evt);
})

function recherche(evt) { 
    evt.preventDefault();
    const value = document.getElementById('query').value; 
    document.getElementById('query').value = "";
    //TODO
}