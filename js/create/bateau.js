const button = document.getElementById('send')
const name = document.getElementById('name')
const resume = document.getElementById('resume')

const creation_bateau = new XMLHttpRequest()

button.addEventListener('click', (evt) => {


  const text_name = name.value
  const text_resume = resume.value

  name.value = ""
  resume.value = ""

  creation_bateau.open("POST", "/php/create/bateau.php", true)
  creation_bateau.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')

  creation_bateau.send('name=' + text_name + '&resume=' + text_resume)

})
