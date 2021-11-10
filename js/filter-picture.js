'use strict';

let sortBtn = document.querySelector('.filter-menu').children;
let sortItem = document.querySelector('.gallery-photos').children;

console.log(sortBtn);
console.log(sortItem);

for(let i = 0; i < sortBtn.length; i++){
    sortBtn[i].addEventListener('click', function(){
        let targetData = this.getAttribute('data-target');

        for(let k = 0; k < sortItem.length; k++){

            if(sortItem[k].getAttribute('data-item') === targetData || targetData === "all"){
                sortItem[k].classList.remove('hidden');
            } else {
                sortItem[k].classList.add('hidden');
            }
        }
    });
}