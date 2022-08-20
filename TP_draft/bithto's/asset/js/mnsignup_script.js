let sname = document.getElementById('sname');
let semail = document.getElementById('semail');
let spass = document.getElementById('spass');
let sconfpass = document.getElementById('sconfpass');
let sdob = document.getElementById('sdob');
let scontact = document.getElementById('scontact');
let sgender = document.forms['Signupform']['gender'];

function showError(errElement, errMessage){
    document.querySelector(errElement).innerHTML = errMessage;
}

function clearError(errElement){
    document.querySelector(errElement).innerHTML = "";
}

// ------------------------------------------------------------

function signupVal(){
    if(sname.value == "" || semail.value == "" || spass.value == "" || sconfpass.value == "" || sdob.value == "" || scontact.value == "" || (sgender[0].checked == false && sgender[1].checked == false && sgender[2].checked == false)){
        sunamecheck();
        sumailcheck();
        supasscheck();
        suCpasscheck();
        sudobcheck();
        sucontactcheck();
        sugendercheck();
        return false;
    }else{
        return true;
    }

}

function sunamecheck(){
    if(sname.value == ""){
        showError("#signup .sname-error", "Username is required*");
    }else{
        clearError("#signup .sname-error");
    }
}


function sumailcheck(){
    if(semail.value == ""){
        showError("#signup .smail-error", "Email is required*");
    }else{
        clearError("#signup .smail-error");
    }
}


function supasscheck(){
    if(spass.value == ""){
        showError("#signup .spass-error", "Password is required*");
    }else{
        clearError("#signup .spass-error");
    }
}


function suCpasscheck(){
    if(sconfpass.value == ""){
        showError("#signup .scpass-error", "Re-enter your password*");
    }else{
        clearError("#signup .scpass-error");
    }
}


function sudobcheck(){
    if(sdob.value == ""){
        showError("#signup .sdob-error", "Date of birth is required*");
    }else{
        clearError("#signup .sdob-error");
    }
}


function sucontactcheck(){
    if(scontact.value == ""){
        showError("#signup .scont-error", "Contact is required*");
    }else{
        clearError("#signup .scont-error");
    }
}


function sugendercheck(){
    if(sgender[0].checked == false && sgender[1].checked == false && sgender[2].checked == false){
        showError("#signup .sgen-error", "Gender is required*");
    }else{
        clearError("#signup .sgen-error");
    }
}