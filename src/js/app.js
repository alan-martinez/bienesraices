document.addEventListener('DOMContentLoaded', function() {

    eventListeners();

    darkMode();
});

function darkMode() {
    const botonDarkMod = document.querySelector('.dark-mode-boton');
    
}

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar');
}