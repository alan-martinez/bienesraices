document.addEventListener('DOMContentLoaded', function() {

    eventListeners();

    darkMode();
});

function darkMode() {
    //Leer preferencias del usuario
    const prefiereDarkMode = window.matchMedia('{prefers-color-scheme: dark}');
    
    if (prefiereDarkMode.matches) {
        document.body.classList.add('dark-mode');
    }else {
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function() {
        if (prefiereDarkMode.matches) {
            document.body.classList.add('dark-mode');
        }else {
            document.body.classList.remove('dark-mode');
        }
    });

    const botonDarkMod = document.querySelector('.dark-mode-boton');
    
    botonDarkMod.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');

    });
}

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar');
}