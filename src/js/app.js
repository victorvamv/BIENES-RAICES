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
    navegacion2 = document.querySelector('.navegacion2');
    
    navegacion.classList.toggle('invisible'); 
      
    

    navegacion3.style.opacity = 1;
}

function eliminarPropiedad() {
    navegacion = document.querySelector('.visible');
    const width = window.innerWidth;
    navegacion.style.opacity = 1;
    if(width >= 768) {
        navegacion.classList.remove('invisible');
        
    }else{
        navegacion.classList.add('invisible')
    }   
}

