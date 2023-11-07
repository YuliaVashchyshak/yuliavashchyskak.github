AOS.init();

//== Start add burger-menu ==//
const burgerBtn = document.querySelector('.header__burger-btn')
const burgerMenu = document.querySelector('.header__burger-wrapper')
burgerBtn.addEventListener('click', () => {
    burgerMenu.classList.toggle('open')
    burgerBtn.classList.toggle('open')
})
//== End add burger-menu ==//
