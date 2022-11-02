
const phrase = document.getElementById("phraseTps");
const VerbeCachee = document.getElementById("hideVerbe");


const BtnRep = document.getElementsByClassName("RepBtn");

const arrayBtnRep = Array.from(BtnRep)
// console.log(arrayBtnRep)

arrayBtnRep.forEach(btn => {
    btn.addEventListener('click', ()=> {
        let btnvalue = btn.innerText
        // console.log(btnvalue)
        verifReponse(btnvalue)
    })
});
function verifReponse(btnvalue){
    const reponse = document.getElementById("reponse");
    console.log(reponse.innerText)

    if (btnvalue === reponse.innerText) {
        alert('Bonne réponse')
    }
    else {
        alert('Mauvaise réponse')
    }
}