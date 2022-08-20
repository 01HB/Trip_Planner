let pname = document.getElementById('pname');
let pdob = document.getElementById('pdob');
let pcontact = document.getElementById('pcontact');
const profupBttn = document.getElementById('mnpro-up');
// let pgender = document.forms['Profileform']['pgender'];
// let pwebsite = document.getElementById('pweb');
// let paddress = document.getElementById('paddress');
// let pexp = document.getElementById('pexp');


function showError(errElement, errMessage){
    document.querySelector(errElement).innerHTML = errMessage;
}

function clearError(errElement){
    document.querySelector(errElement).innerHTML = "";
}

// ------------------------------------------------------------

profupBttn.addEventListener('click', (e)=>{
    if(pname.value == "" || pdob.value == "" || pcontact.value == ""){
        e.preventDefault();
        pnamecheck();
        pdobcheck();
        pcontactcheck();
    }else{
        return true;
    }
})

function pnamecheck(){
    if(pname.value == ""){
        showError("#profile .pname-error", "username cannot be empty*");
    }else{
        clearError("#profile .pname-error");
    }
}


function pdobcheck(){
    if(pdob.value == ""){
        showError("#profile .pdob-error", "date of birth is required*");
    }else{
        clearError("#profile .pdob-error");
    }
}


function pcontactcheck(){
    if(pcontact.value == ""){
        showError("#profile .pcont-error", "contact cannot be empty*");
    }else{
        clearError("#profile .pcont-error");
    }
}

