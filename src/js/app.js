document.addEventListener('DOMContentLoaded', function () {
    eventListeners();
    eventListeners2();
});

function eventListeners2(){
    const clickBoton = document.querySelector('button#contactoBoton');
    clickBoton.addEventListener('click', agregarAlerta);
}

function agregarAlerta(){
    alert("haz dado click")
}


function eventListeners() {
    const mobileMenu = document.querySelector('.d-md-none');
    
    
    mobileMenu.addEventListener('click', navegacionResponsive);
    window.addEventListener('resize', eliminarPropiedad);
}

function navegacionResponsive() {
    navegacion = document.querySelector('.visible');
    
    navegacion.classList.toggle('invisible'); 
    navegacion.classList.toggle('navegacion2');

}

function eliminarPropiedad() {
    navegacion = document.querySelector('.visible');
    const width = window.innerWidth;
    
    if(width >= 768) {
        navegacion.classList.remove('invisible');
        navegacion.classList.remove('navegacion2');
    } 
}


