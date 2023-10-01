const navButtonBars = document.querySelector('.nav-button-bars');
const navButtonCross = document.querySelector('.nav-button-cross');
const navMenu = document.querySelector('.nav-ul');
const pageHeader = document.querySelector('.page-header');

navButtonBars.addEventListener('click', () => {
    navButtonBars.classList.add('displayoff');
    navButtonCross.classList.remove('displayoff');
    navMenu.classList.remove('displayoff');
    navMenu.classList.add('toggleon');
    pageHeader.classList.add('displayon');
    navMenu.classList.remove('noanim');
    navMenu.classList.add('anim');
});

navButtonCross.addEventListener('click', () => {
    navButtonBars.classList.remove('displayoff');
    navButtonCross.classList.add('displayoff');
    navMenu.classList.remove('toggleon');
    navMenu.classList.add('displayoff');
    pageHeader.classList.remove('displayon');
    navMenu.classList.remove('anim');
    navMenu.classList.add('noanim');
});