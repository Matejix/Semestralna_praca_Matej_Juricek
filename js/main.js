
let hamburgerBtn = document.getElementById('hamburger-button');
let sideMenu = document.querySelector('.side-menu');
let sideMenuShade = document.querySelector('.side-menu-shade');
let loginBox = document.querySelector('.login-box');
let registerBox = document.querySelector('.login-box.register')
let registerLink = document.querySelector('.login-register-link');
let registerButton = document.querySelector('.login-box.register .submit');
const info = document.querySelector('.far.fa-question-circle');
const infoInfo= document.querySelector('.register-side-info');
const closeButtRegister = document.querySelector('.register-close');

hamburgerBtn.addEventListener('click',()=>{
    hamburgerBtn.classList.toggle('active');
    sideMenu.classList.toggle('open');
    sideMenuShade.classList.toggle('open');
})

sideMenuShade.addEventListener('click',()=>{
    hamburgerBtn.classList.remove('active');
    sideMenu.classList.remove('open');
    sideMenuShade.classList.remove('open');
});


info.addEventListener('mouseenter', ()=>{
    infoInfo.classList.remove('visually-hidden');
});

info.addEventListener('mouseleave', ()=>{
    infoInfo.classList.add('visually-hidden');
});


closeButtRegister.addEventListener('click', function (){
        if (loginBox.classList.contains('hidden')) {
            loginBox.classList.remove('hidden');
            registerBox.classList.add('hidden');
            setTimeout(function () {
                loginBox.classList.remove('not-registered');
                registerBox.classList.add('not-registered');
            }, 20);
          } else {
            loginBox.classList.add('not-registered'); 
            registerBox.classList.remove('hidden');   
            loginBox.addEventListener('transitionend', function(e) {
                loginBox.classList.add('hidden');
                registerBox.classList.remove('hidden');
            });
          }
});

registerLink.addEventListener('click' , function () {
    if (registerBox.classList.contains('hidden')) {
        registerBox.classList.remove('hidden');
        loginBox.classList.add('hidden');
        setTimeout(function () {
            registerBox.classList.remove('not-registered');
            loginBox.classList.add('not-registered');
        }, 20);
      } else {
        registerBox.classList.add('not-registered'); 
        loginBox.classList.remove('not-registered');   
        registerBox.addEventListener('transitionend', function(e) {
            registerBox.classList.add('hidden');
            loginBox.classList.remove('hidden');  
        });
      }
      
    }, false);

function empty(){
    let questionInput = document.forms["register"]["question"].value;
    if(questionInput == "" || questionInput == null){
        alert("Je treba vyplniť formulár");
    }
}

/*______________________________________________________________________________*/



