
  
// laptop-new-product
const sanpham = document.querySelectorAll('.laptop-new-product')
// laptop-price
const giatien = document.querySelectorAll('.laptop-price')
// dưới 500 nghìn 
const lv1 = document.getElementsByName('lv1');
// từ 500 đến 1 triệu 
const lv2 = document.getElementsByName('lv2');
// từ 1 triệu đến 5 triệu 
const lv3 = document.getElementsByName('lv3');
// từ 5 triệu ddeeens 10 triệu 
const lv4 = document.getElementsByName('lv4');
// trên 10 triệu 
const lv5 = document.getElementsByName('lv5');
// tất cả sản phẩm 
const lv6 = document.getElementsByName('lv6');

// các input check
lv1[0].checked = false;
lv2[0].checked = false;
lv3[0].checked = false;
lv4[0].checked = false;
lv5[0].checked = false;
lv6[0].checked = true;

// chả về lv1
function checkLv1() {
   
    if(lv1[0].checked === true ) {
        lv2[0].checked = false;
        lv3[0].checked = false;
        lv4[0].checked = false;
        lv5[0].checked = false;
        lv6[0].checked = false;
    
        for (let i = 0; i < giatien.length; i++) {
            const price = parseInt(giatien[i].innerHTML);
            if(price <= 500000) {
                sanpham[i].style.display='block'
            }else{
                sanpham[i].style.display='none' 
            }
            
        }
    }else{
        for (let i = 0; i < sanpham.length; i++) {
            sanpham[i].style.display='block';
            
        }
    }
}

// trả vè lv2
function checkLv2() {
   
    if(lv2[0].checked === true ) {
        lv1[0].checked = false;
        lv3[0].checked = false;
        lv4[0].checked = false;
        lv5[0].checked = false;
        lv6[0].checked = false;
    
        for (let i = 0; i < giatien.length; i++) {
            const price2 = parseInt(giatien[i].innerHTML);
            if(price2 >= 500000 && price2 < 1000000) {
                sanpham[i].style.display='block'
            }else{
                sanpham[i].style.display='none' 
            }
            
        }
    }else{
        for (let i = 0; i < sanpham.length; i++) {
            sanpham[i].style.display='block';
        }
    }
}
// trả về lv3
function checkLv3() {
   
    if(lv3[0].checked === true ) {
        lv1[0].checked = false;
        lv2[0].checked = false;
        lv4[0].checked = false;
        lv5[0].checked = false;
        lv6[0].checked = false;
    
        for (let i = 0; i < giatien.length; i++) {
            const price3 = parseInt(giatien[i].innerHTML);
            if(price3 >= 1000000 && price3 < 5000000) {
                sanpham[i].style.display='block'
            }else{
                sanpham[i].style.display='none' 
            }
            
        }
    }else{
        for (let i = 0; i < sanpham.length; i++) {
            sanpham[i].style.display='block';
        }
    }
}
// trả về lv4
function checkLv4() {
   
    if(lv4[0].checked === true ) {
        lv1[0].checked = false;
        lv2[0].checked = false;
        lv3[0].checked = false;
        lv5[0].checked = false;
        lv6[0].checked = false;
    
        for (let i = 0; i < giatien.length; i++) {
            const price4 = parseInt(giatien[i].innerHTML);
            if(price4 >= 5000000 && price4 < 10000000) {
                sanpham[i].style.display='block'
            }else{
                sanpham[i].style.display='none' 
            }
            
        }
    }else{
        for (let i = 0; i < sanpham.length; i++) {
            sanpham[i].style.display='block';
        }
    }
}

// trả về lv5
function checkLv5() {
   
    if(lv5[0].checked === true ) {
        lv1[0].checked = false;
        lv2[0].checked = false;
        lv3[0].checked = false;
        lv4[0].checked = false;
        lv6[0].checked = false;
    
        for (let i = 0; i < giatien.length; i++) {
            const price5 = parseInt(giatien[i].innerHTML);
            if(price5 >=10000000) {
                sanpham[i].style.display='block'
            }else{
                sanpham[i].style.display='none' 
            }
            
        }
    }else{
        for (let i = 0; i < sanpham.length; i++) {
            sanpham[i].style.display='block';
        }
    }
}
// trả về lv6
function checkLv6() {
   
    if(lv6[0].checked === true ) {
        lv1[0].checked = false;
        lv2[0].checked = false;
        lv3[0].checked = false;
        lv4[0].checked = false;
        lv5[0].checked = false;
        for (let i = 0; i < sanpham.length; i++) {
            sanpham[i].style.display='block';
        }
       
    }
}

