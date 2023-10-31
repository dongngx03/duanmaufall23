const tang = document.querySelector('#tang');
const giam = document.querySelector('#giam');
const soluongmua = document.querySelector('#soluongmua');

// sử lý sự kiện tăng giảm 
tang.addEventListener('click', ()=> {
    soluongmua.value ++;
    if(soluongmua.value >= 100) {
        soluongmua.value = 99;
    }   
})

giam.addEventListener('click', ()=> {
    soluongmua.value --;
    if(soluongmua.value <= 0) {
        soluongmua.value = 1;
    }   
})
