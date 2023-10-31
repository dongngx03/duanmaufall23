// hiệu ứng load

document.addEventListener("DOMContentLoaded", function() {
    var loadingElement = document.getElementById("loading");

    // Hiển thị thông báo "loading" khi trang web đang tải
    loadingElement.style.display = "block";

    window.addEventListener("load", function() {
    // Ẩn thông báo "loading" khi trang web đã tải xong
    loadingElement.style.display = "none";
    });
});

// khai báo 
let thanhcong = document.getElementById('thanhcong');
// hiện thông báo thành công 
function hienthanhcong() {
   thanhcong.style.visibility = 'unset';
}

// ấn thông báo thành công 
function anthanhcong() {
    thanhcong.style.visibility = 'hidden';
}
//cài đặt time 
setInterval(anthanhcong,2000)