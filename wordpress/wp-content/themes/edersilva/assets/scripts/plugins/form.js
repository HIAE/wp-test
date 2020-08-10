
document.addEventListener('submit', e => {

	let name = document.getElementById('name').value;
	let email = document.getElementById('email').value;
	let subject = document.getElementById('subject').value;
	let message = document.getElementById('message').value;
	let element = document.getElementById('loading');
	element.classList.add('active');

	fetch('https://cors-anywhere.herokuapp.com/https://phpenthusiast.com/dummy-api', {
		method: 'POST',
		header: {
			"Content-Type": "application/json"
		},
		body:JSON.stringify({name, email, subject, message})
	}).then((res) => res.json())
	.then(function(){
		
		let element = document.getElementById('success');
		element.classList.add('active');
		
		let loading = document.getElementById('loading');
		loading.classList.remove('active');

		document.getElementById('name').value = "";
		document.getElementById('email').value = "";
		document.getElementById('subject').value = "";
		document.getElementById('message').value = "";

	})
	.catch(function(){

		let element = document.getElementById('error');
		element.classList.add('active');

		let loading = document.getElementById('loading');
		loading.classList.remove('active');

	})

  // Prevent the default form submit
  e.preventDefault()

});