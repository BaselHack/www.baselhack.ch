const hamburger = document.getElementById("hamburger");
const mobileMenu = document.getElementById("mobile-menu");

hamburger.onclick = function(){
    const display = mobileMenu.style.display;
    mobileMenu.style.display = display === 'none' ? 'block' : 'none';
}
