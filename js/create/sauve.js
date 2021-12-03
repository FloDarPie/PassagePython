const button = document.getElementById('send')
const name = document.getElementById('name')
const firstname = document.getElementById('firstname')
const resume = document.getElementById('resume')

const creation_sauve = new XMLHttpRequest()

button.addEventListener('click', (evt) => {
  const text_name = name.value
  const text_firstname = firstname.value
  const text_resume = resume.value

  name.value = ""
  firstname.value = ""
  resume.value = ""

  creation_sauve.open("POST", "/php/create/sauve.php", true)
  creation_sauve.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')

  creation_sauve.send('name=' + text_name + '&firstname=' + text_firstname + '&resume=' + text_resume)

})
