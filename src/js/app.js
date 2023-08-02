document.addEventListener('DOMContentLoaded', function () {
    eventListeners();
});

function eventListeners() {
    const mobileMenu = document.querySelector('.d-md-none');
    mobileMenu.addEventListener('click', navegacionResponsive);
    window.addEventListener('resize', eliminarPropiedad);
}

function navegacionResponsive() {
    navegacion = document.querySelector('.visible');

    navegacion.classList.toggle('invisible');
    
    
    
}

function eliminarPropiedad() {
    navegacion = document.querySelector('.visible');
    const width = window.innerWidth;
    if(width >= 768) {
        navegacion.classList.remove('invisible');
        navegacion.classList.add('visible')
    }   
}