'use strict';

let sortBtn = document.querySelectorAll('.filter-menu');
let sortItem = document.querySelectorAll('.gallery-photos');
if(sortBtn && sortItem){
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
}
