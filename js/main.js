
let hamburgerBtn = document.getElementById('hamburger-button');
let sideMenu = document.querySelector('.side-menu');
let sideMenuShade = document.querySelector('.side-menu-shade');

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