const demo = document.getElementById('phrasedemo');
    // On crée le canal de communication avec le serveur
	// On veut aller sur la database
const xhr = new XMLHttpRequest();
    // To send a request to a server, you can use the open() and send() methods of the XMLHttpRequest object:
xhr.open('GET', './models/ModelJeu.php', true)
    //Defines a function to be called when the readyState property changes
xhr.onreadystatechange = function () {
        // readyState:Holds the status of the XMLHttpRequest    200:"OK"
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        demo.innerHTML = xhr.response;
        // console.log(JSON.parse(xhr.response));
    }
}
xhr.send();


document.getElementById("selectreseau").addEventListener("click", showTemps);
document.getElementById("selectecole").addEventListener("click", showTemps);

function showTemps() {
  document.getElementById("Choix_temps").style.display = "block";
  document.getElementById("Choix_phrases").style.height = "80px"; 
  document.getElementById("Choix_phrases").style.margin = "auto";
  document.getElementById("Choix_phrases").style.width = "90%";
  document.getElementById("selectreseau").style.height = "auto";
  document.getElementById("selectecole").style.height = "auto";
  document.getElementById("tps0").style.margin = "10px auto";
}

document.getElementById("Commencer").addEventListener("click", hide);

function hide(){
    document.getElementById("Lancer").style.display = "none";
}

let rep = document.getElementById("reponse");
let vide = "";
let test = document.getElementById("phraseTest");
test.style.color = "red";
console.log(rep, test);

function replaceString(oldS, newS, fullS) {
    // On remplace oldS avec newS dans fullS
    for (var i = 0; i < fullS.length; i++) {
        if (fullS.substring(i, i + oldS.length) == oldS) {
         fullS = fullS.substring(0, i) + newS + fullS.substring(i + oldS.length, fullS.length);
        }
    }
    return fullS;
}
replaceString("World", "Web", "Brave New World");
console.log(replaceString);





