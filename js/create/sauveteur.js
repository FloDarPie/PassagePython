const button = document.getElementById('send')
const name = document.getElementById('name')
const firstname = document.getElementById('firstname')
const role = document.getElementById('role')
const resume = document.getElementById('resume')

const creation_sauveteur = new XMLHttpRequest()

button.addEventListener('click', (evt) => {
  const text_name = name.value
  const text_firstname = firstname.value
  const text_role = role.value
  const text_resume = resume.value

  name.value = ""
  firstname.value = ""
  role.value = ""
  resume.value = ""

  creation_sauveteur.open("POST", "/php/create/sauveteur.php", true)
  creation_sauveteur.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')

  creation_sauveteur.send('name=' + text_name + '&firstname=' + text_firstname + '&role=' + text_role + '&resume=' + text_resume)

})
