let countclick = document.getElementsByClassName("RepBtn"), count = 0;
let nbrclick = document.getElementById("nombreClick")
countclick.onclick = function() {
    count += 1;
    nbrclick.innerHTML = "nombre de click:" + count;
};

// mettre en vert la bonne reponse et rouge la mauvaise
const BtnRep = document.getElementsByClassName("RepBtn")
const arrayBtnRep = Array.from(BtnRep)

arrayBtnRep.forEach(btn => {
    btn.addEventListener('click', ()=> {
        let btnvalue = btn.innerText
        verifReponse(btnvalue)
    })
});
console.log(arrayBtnRep)

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
        document.getElementById(btnvalue).style.backgroundColor='green';
        document.getElementById(btnvalue).style.color='white';
    }

    else {
        document.getElementById(btnvalue).style.backgroundColor='red';
        document.getElementById(btnvalue).style.color='white';
    }
}

// fonction phrase suivante

const suivant = document.getElementById('Next')




