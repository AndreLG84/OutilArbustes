const BtnRep = document.getElementsByClassName("RepBtn");

const arrayBtnRep = Array.from(BtnRep)

arrayBtnRep.forEach(btn => {
    btn.addEventListener('click', ()=> {
        let btnvalue = btn.innerText
        verifReponse(btnvalue)
    })
});
function verifReponse(btnvalue){
    const reponse = document.getElementById("reponse");
    console.log(reponse.innerText)
    const blockRep = document.getElementById("phrase")
    const oldphrase = document.getElementById("avant")
    const phraseCorrect = document.getElementById("apres")
    const blockVerbe = document.getElementById("hideVerbe")
    const Nextbtn = document.getElementById("Next")

    if (btnvalue === reponse.innerText) {
        // alert('Bonne réponse')
        oldphrase.style.display = "none"
        blockRep.style.backgroundColor = "green"
        phraseCorrect.style.color = "white"
        phraseCorrect.style.display = "flex"
        phraseCorrect.style.alignItems = "center"
        phraseCorrect.style.justifyContent = "center"
        phraseCorrect.style.height = "100%"
        Nextbtn.style.display = "block"
    }
    else {
        // alert('Mauvaise réponse')
        blockRep.style.backgroundColor = "red"
        blockVerbe.style.backgroundColor = "grey"
        blockRep.style.color = "white"
    }
}