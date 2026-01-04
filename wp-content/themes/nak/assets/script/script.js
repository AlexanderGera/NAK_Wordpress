// -------------- hamburger menu

let headerMenu = document.getElementsByClassName('header__menu-mobile')[0];
let burgerMenu = document.getElementsByClassName('burger-menu')[0];

burgerMenu.addEventListener('click', mobileMenuToggle);

function mobileMenuToggle() {
    headerMenu.classList.toggle('active');
    burgerMenu.classList.toggle('active');
}

let mobileMenuLinks = document.getElementsByClassName('header__menu-mobile_link');
Array.from(mobileMenuLinks).forEach((element) => {
    element.addEventListener('click', closeMenuOnClick);
})

function closeMenuOnClick() {
    headerMenu.classList.remove('active');
    burgerMenu.classList.remove('active');
}