'use strict';
const homePctr1 = document.querySelector('.part-one');
const homePctr2 = document.querySelector('.part-two');
const arrow = document.querySelectorAll('.arrow-right');

console.log(arrow);

    arrow.forEach((arrows)=>{
        arrows.addEventListener('click', ()=>{
            if (homePctr2.classList.contains('hidden')) {
                homePctr2.classList.remove('hidden');
                homePctr1.classList.add('visually-hidden-left');
                setTimeout(function () {
                   homePctr2.classList.remove('visually-hidden-left');
                   homePctr1.classList.add('hidden');
                }, 20);
              }else {
                  homePctr1.classList.remove('hidden');
                  homePctr2.classList.add('hidden');
                  setTimeout(function () {
                      homePctr1.classList.remove('visually-hidden-left'); 
                      homePctr2.classList.add('visually-hidden-left'); 
                }, 20);
              }
        },false);
    });
    