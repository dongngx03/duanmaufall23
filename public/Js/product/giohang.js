// sư lý phần tăng giảm số lượng mua 
let tang = document.getElementById('tang');
let giam = document.getElementById('giam');
let soluongmua = document.getElementById('soluongmua');
let sotien = document.getElementById('sotien');
let giatien = document.getElementById('giatien');

tang.addEventListener('click', () => {
    soluongmua.value ++;
    if(soluongmua.value >= 31) {
        soluongmua.value = 30;
    }
})
giam.addEventListener('click', () => {
    soluongmua.value --;
    if(soluongmua.value <= 0) {
        soluongmua.value = 1;
    }
})

function sotienphaitra() {
    const giatien1 = parseInt(giatien.innerHTML);
    let price = giatien1 * soluongmua.value;
    console.log( typeof giatien1);
    console.log( price);
    sotien.innerHTML = price
}

