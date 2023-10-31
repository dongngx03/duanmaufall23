//đây là phần slide banner
const slideImg = document.querySelector('.slideImg');
const slide = document.querySelectorAll('.slide');

slideImg.style.width = `${slide.length*700}px`
let index = 0;
function next() {
    if(index < slide.length-1) {
        index++;
    }else{
        index = 0
    }
    slideImg.style.transform = `transLateX(-${700*index}px)`
   
}

function prew() {
    if(index < 0) {
       index = slide.length-1;
    }else{
        index --;
    }
    slideImg.style.transform = `transLateX(-${700*index}px)`
   
}

setInterval(next, 9000);
// kết thúc phần slide banner