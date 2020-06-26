window.onload = function(e) {
	fetch(
		'https://jsonplaceholder.typicode.com/posts', {
		}).then(response => response.json())				
	.then(data => { 
		data.forEach(post => {  
			var table = document.getElementById("tabeladedados");
            var row = table.insertRow(-1);            
			var userIdColuna = row.insertCell(0);
			var idColuna = row.insertCell(1); 
			var titleColuna = row.insertCell(2); 
			var bodyColuna = row.insertCell(3); 
			userIdColuna.innerHTML = post.userId;
			idColuna.innerHTML = post.id;
			titleColuna.innerHTML = post.title;
			bodyColuna.innerHTML = post.body;
		})
	}).catch(error => console.error(error))
}

function enviarForm() {
	var form = document.getElementById('formPessoa').style.display="block";
	var data = {};
	data['userId'] = form.userId.value 
	data['title'] = form.title.value;
	data['body'] = form.body.value;
	fetch('https://jsonplaceholder.typicode.com/comments', {
		method: 'POST',       
		body: JSON.stringify(data)
	})
        .then((response) => {   
		if (response.ok) {
			return response.json() 
		} else {
			return Promise.reject({ status: res.status, statusText: res.statusText });
		}   

	})
	.then((data) => console.log("Sucess", data))
	.catch(err => console.log('Error message:', err.statusText));
}