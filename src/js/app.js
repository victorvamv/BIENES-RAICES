document.addEventListener('DOMContentLoaded', function () {
    navegacion();
    modalesFormulario();
    darkmode();
    modalCrear();
    modalEliminarX();
});



function darkmode() {
    const darkMode = document.querySelector('img[type="button"]');

    darkMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode-boton');
    });
}

function modalesFormulario(){
    const miFormulario = document.querySelector("#miFormulario");
    // onclick="document.getElementById('miModal2').showModal()"
    const contactoBoton = document.querySelector('#contactoBoton');
    const miModalX = document.getElementById("miModal");
    const miModalY = document.getElementById("miModal2");
    if (contactoBoton) {
        contactoBoton.addEventListener('click', function() {
            if (miFormulario.checkValidity()) {
                miModalX.showModal();
            }else{
                miModalY.showModal();
            }
        }) 
    }
    if (miFormulario) {
        miFormulario.addEventListener('submit', function(event){
            event.preventDefault();
        });
    }
    // const contactoBoton = document.getElementById('#contactoBoton');
    // contactoBoton.removeAttribute
    const clickBoton = document.querySelector('#clickBoton')
    const miModalC = document.querySelector('#miModal3');
    if (clickBoton) {
        clickBoton.addEventListener('click', function(event){
            if (event && miFormulario.checkValidity()) {
                const miModal = document.querySelector('#miModal');
                miModal.addEventListener('close', function() {
                    miModalC.showModal();
                    miModalC.addEventListener('close', function() {
                        miFormulario.submit();
                        window.location.href = "index.html";
                    }) //#miModal3   
                });//#miModal    
            }
        })   
    }   
}

function modalCrear() {
    const crearBoton = document.querySelector("#crearBoton");
    const miFormulario2 = document.querySelector("#miFormulario2");
    const modalAviso = document.querySelector("#modalAviso");
    const modalCrear = document.querySelector("#modalCrear");
    const descripcion = document.querySelector("#descripcion");
    const clickBoton7 = document.querySelector("#clickBoton7");

    if(miFormulario2){
        miFormulario2.addEventListener('submit', function(event) {
            event.preventDefault();
        })   
    }
    
    
    if(crearBoton){
        crearBoton.addEventListener('click', function() {
        modalAviso.showModal();
            clickBoton7.addEventListener('click', function() {
                if (descripcion.value.trim().length > 50 && miFormulario2.checkValidity()) {    
                    modalCrear.showModal();
                    modalCrear.addEventListener('close', function() {
                        miFormulario2.submit();
                    })
                } else {
                    miFormulario2.submit();
                }
            })                            
        })        
    }     
}



function modalEliminarX() {
    const modalAvisoEliminar = document.querySelector('#modalAvisoEliminar');
    const modalEliminar = document.querySelector('#modalEliminar');
    const clickBoton10 = document.querySelector('#clickBoton10');
    const formularioEliminar = document.querySelectorAll('.formularioEliminar');
    const botonEliminar = document.querySelectorAll('.botonEliminar');
    
    formularioEliminar.forEach(function(formulario){
        formulario.addEventListener('submit', function(event){
            event.preventDefault();

            
        })
        clickBoton10.addEventListener('click', function(){
            formulario.submit();
            setTimeout(function() {
                modalEliminar.showModal();
            }, 1000); // Mostrar después de 1 segundo  
        })    
    })    
    botonEliminar.forEach(function(boton) {
        boton.addEventListener('click', function() { 
            modalAvisoEliminar.showModal();    
        })  
    })            
}

function navegacion() {
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



