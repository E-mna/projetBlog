	document.getElementById("inscription").addEventListener("submit", function(e) {
 
	let erreur;
 
	let inputs = this.getElementsByTagName("input");
 
	for (var i = 0; i < inputs.length; i++) {
		console.log(inputs[i]);
		if (!inputs[i].value) {
			erreur = "Veuillez renseigner tous les champs";
		}
	}
 
	if (erreur) {
		e.preventDefault();
		document.getElementById("erreur").innerHTML = erreur;
		return false;
	} else {
		alert('Formulaire envoyé !');
	}
 });
 
	/* let pseudo = document.getElementById("pseudo");
	let email = document.getElementById("email");
	let email2 = document.getElementById("email2");
	let mdp = document.getElementById("mdp");
 
	if (!mdp.value) {
		erreur = "Veuillez renseigner un mot de passe";
	}
	if (!email.value) {
		erreur = "Veuillez renseigner un email";
	}
	if (!pseudo.value) {
		erreur = "Veuillez renseigner un pseudo";
	} */
	
 
	
 
document.getElementById("email2").addEventListener("input", function() {
	var paragrapheErreur = document.getElementById("erreur");
 
	if (this.value != document.getElementById("email").value) {
		paragrapheErreur.innerHTML = "Les deux adresses email ne correspondent pas";
	} else {
		paragrapheErreur.innerHTML = "";
	}
});





