// ---------------login page----------------------
let uemail = document.getElementById('uemail');
let upass = document.getElementById('upass');
let loginerr = document.querySelector('#login .login-fields .login-error');

function showError(errElement, errMessage){
    document.querySelector(errElement).innerHTML = errMessage;
}

function clearError(errElement){
    document.querySelector(errElement).innerHTML = "";
}

function loginVal(){
    if(uemail.value == "" || upass.value == ""){
        loginmailcheck();
        loginpasscheck();
        loginerrorcheck();
        return false;
    }
    // else if(upass.value.length < 8 ){
    //         return false;
    // }
    else{
            return true;
    }
}

function loginerrorcheck(){
        clearError("#login .login-fields .login-error");
}


function loginmailcheck(){
    if(uemail.value == ""){
        showError("#login .ue-error", "Email is required*");
    }else{
        clearError("#login .ue-error");
    }
}


function loginpasscheck(){
    if(upass.value == ""){
        showError("#login .up-error", "Password is required*");
    }else{
        clearError("#login .up-error");
    }
}

// function ajaxToPhp(){
//     let mail = uemail.value;
//     let pass = upass.value;
//     let data = {"email": mail, "password": pass};
//     let userdata = JSON.stringify(data);

    
//     let request = new XMLHttpRequest();
//     request.open('POST', '../../controller/logincheck.php');
//     request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     request.send('data='+userdata);
    
//     request.onload = function(){
//         let phpdata = JSON.parse(request.responseText);
//         loginerr.innerHTML = phpdata;
//         return false;
//     }
// }
// ---------------login page ends------------------