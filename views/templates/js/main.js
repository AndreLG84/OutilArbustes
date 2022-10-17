const Phrase = document.getElementById('phrase');
    // On crée le canal de communication avec le serveur
	// On veut aller sur la database
const xhr = new XMLHttpRequest();
    // To send a request to a server, you can use the open() and send() methods of the XMLHttpRequest object:
xhr.open('GET', './models/ModelJeu.php', true)
    //Defines a function to be called when the readyState property changes
xhr.onreadystatechange = function () {
        // readyState:Holds the status of the XMLHttpRequest    200:"OK"
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        Phrase.innerHTML = httpRequest.response;
    }
}
xhr.send()


