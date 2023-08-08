document.addEventListener('DOMContentLoaded', function () {
    eventListeners();
    eventListeners2();
});

function eventListeners2(){
    const miFormulario = document.querySelector("#miFormulario");

    miFormulario.addEventListener('submit', function(event){
        event.preventDefault();
    });
    const clickBoton = document.querySelector('#clickBoton')
    clickBoton.addEventListener('click', function(event){
        if (event && miFormulario.checkValidity()) {
            const miModal = document.querySelector('#miModal');
            miModal.addEventListener('close', function() {
                miFormulario.submit();
            });    
        }
    })   
}
function eventListeners() {
    const mobileMenu = document.querySelector('.d-md-none');

    if (mobileMenu) {
        mobileMenu.addEventListener('click', navegacionResponsive);
        window.addEventListener('resize', eliminarPropiedad);    
    }    
}
var width2 = window.innerWidth;
console.log(width2);
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



