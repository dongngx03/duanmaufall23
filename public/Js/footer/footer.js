var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
if (prevScrollpos > currentScrollPos) {
    document.querySelector(".header").style.top = "0";
    document.querySelector(".menutops").style.top="66px";
} else {
    document.querySelector(".header").style.top = "-100px";
    document.querySelector(".menutops").style.top = "-100px";
}
prevScrollpos = currentScrollPos;
}


