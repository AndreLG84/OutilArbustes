initData()

function initData(){
    const listphrase = document.getElementById('listphrase')
    const btnCloseModal = document.getElementById('closeBtn')
    const myModal = document.getElementById('myModal')
    const deleteB = document.getElementById('deletePhrase')
        // On crée le canal de communication avec le serveur
        // On veut aller sur la database
    let xhr = new XMLHttpRequest();
        // To send a request to a server, you can use the open() and send() methods of the XMLHttpRequest object:
    xhr.open('POST','./models/Sconj_AjaxSelect.php', true)
        //Defines a function to be called when the readyState property changes
    xhr.onreadystatechange = function () {
            // readyState:Holds the status of the XMLHttpRequest    200:"OK"
        if (xhr.readyState == 4 && xhr.status == 200) {
            let datas = JSON.parse(xhr.responseText)
            // listphrase.innerHTML = xhr.response;
            // console.log(JSON.parse(xhr.response));
            let listDom =''
            for(let data of datas){
                listDom += '<li class="list-group"><h2 class="titre">' + data.conju_phrase + '</h2><div class="icones"><div><a href="#" id="' + data.conju_id + '" title="Delete" class="btn-delete-phrase"><img src="./views/templates/images/icones/delete.svg" alt="" height="30px"></a></div></div></li>'
            }
            listphrase.innerHTML = listDom

            hideModal(myModal)

            const btnDelete = document.getElementsByClassName('btn-delete-phrase')
            const closeBtn = document.getElementById('closeBtn')

            for (const element of btnDelete) {
                element.addEventListener('click', function (e) {
                    e.preventDefault()
                    let id = this.dataset.conju_id
                    myModal.style.display = 'block'
            
                    closeAction(closeBtn,  function(){
                        hideModal(myModal)
                    })   

                    deleteB.addEventListener('click', function () {
                        deletePhrase(id,listphrase)
                        myModal.style.display = 'none'
                    })
                })
            } 
        }
    }
    xhr.send()
}

function showModal(){
    const btnDelete = document.getElementsByClassName('btn-delete-post')
    const myModal = document.getElementById('myModal') 
    for (const element of btnDelete){ 
        element.addEventListener('click', function(e){
        e.preventDefault()
        myModal.style.display = 'block'
        })
    }     
}

function hideModal(myModal){ 
    myModal.style.display = 'none'
}

function closeAction(btn, callback){
    btn.addEventListener('click', function(){
        callback()
    })
}

function alertBox(type, message){
    const box = document.createElement('div')
    box.setAttribute('id', 'alert-box')
    box.innerHTML = `<div class="alert alert-${type} mt-3" role="alert">${message}</div>`
    return box
}

function deletePhrase(id, afterElement){
    // const myModal = document.getElementById('myModal') 
    const xhr = new XMLHttpRequest();
    xhr.open('POST', './models/Sconj_AjaxDelete.php', true)
    xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            initData()
            
            if(!document.getElementById('alert-box')){
                afterElement.before(alertBox('success', 'L\'article a bien été supprimé :)'))
                    
            } else {
                document.getElementById('alert-box').style.display = 'block'
            }
    
            setTimeout(() => {
                document.getElementById('alert-box').style.display = 'none'
            }, 3000);
        }
    }
    xhr.send("id=" + id)
}