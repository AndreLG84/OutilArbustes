const listphrase = document.getElementById('listphrase');
    // On crée le canal de communication avec le serveur
	// On veut aller sur la database
let xhr = new XMLHttpRequest();
    // To send a request to a server, you can use the open() and send() methods of the XMLHttpRequest object:
xhr.open('POST','./models/Sconj_Ajax.php', true)
    //Defines a function to be called when the readyState property changes
xhr.onreadystatechange = function () {
        // readyState:Holds the status of the XMLHttpRequest    200:"OK"
    if (xhr.readyState == 4 && xhr.status == 200) {
        listphrase.innerHTML = xhr.response;
        // console.log(JSON.parse(xhr.response));
    }
}
xhr.send();