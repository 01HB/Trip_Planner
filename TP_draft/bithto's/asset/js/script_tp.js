const hamburger = document.querySelector('.nav-panel .nav-bar .nav-list .hamburger');
const menu = document.querySelector('.nav-panel .nav-bar .nav-list ul');
const navpanel = document.querySelector('#nav-panel .nav-panel');

hamburger.addEventListener('click', ()=>{
    hamburger.classList.toggle('active');
    menu.classList.toggle('active');
})

document.addEventListener('scroll', ()=>{
    let scroll_pos = window.scrollY;
    if(scroll_pos > 16){
        navpanel.style.backgroundColor = "#203039";
    }else{
        navpanel.style.backgroundColor = "rgba(31, 30, 30, 0.24)";
    }
})
