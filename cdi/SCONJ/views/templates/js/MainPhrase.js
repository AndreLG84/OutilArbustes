let countclick = document.getElementsByClassName("RepBtn"), count = 0;
let nbrclick = document.getElementById("nombreClick")
countclick.onclick = function() {
    count += 1;
    nbrclick.innerHTML = "nombre de click:" + count;
};

const BtnRep = document.getElementsByClassName("RepBtn")
const arrayBtnRep = Array.from(BtnRep)

arrayBtnRep.forEach(btn => {
    btn.addEventListener('click', ()=> {
        let btnvalue = btn.innerText
        verifReponse(btnvalue)
    })
});

function verifReponse(btnvalue){
    const reponse = document.getElementById("reponse");
    const blockRep = document.getElementById("phrase")
    const oldphrase = document.getElementById("avant")
    const phraseCorrect = document.getElementById("apres")
    const Nextbtn = document.getElementById("Next")
    
    if (btnvalue === reponse.innerText) {
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
        document.getElementById(btnvalue).style.backgroundColor='red';
        document.getElementById(btnvalue).style.color='white';
    }
}

