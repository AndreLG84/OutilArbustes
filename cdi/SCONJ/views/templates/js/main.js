
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


