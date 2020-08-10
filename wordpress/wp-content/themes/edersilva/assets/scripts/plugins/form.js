
document.addEventListener('submit', e => {

	let name = document.getElementById('name').value;
	let email = document.getElementById('email').value;
	let subject = document.getElementById('subject').value;
	let message = document.getElementById('message').value;

	fetch('https://cors-anywhere.herokuapp.com/https://edersilva.com/send.php', {
		method: 'POST',
		header: {
			'Content-Type': 'multipart/form-data',
		},
		body:JSON.stringify({name, email, subject, message})
	}).then((res) => res.json())
	.then((data) =>  console.log(data))
	.catch((err)=>console.log(err))

  // Prevent the default form submit
  e.preventDefault()

});