document.addEventListener('DOMContentLoaded', function () {
    navegacion();
    modalesFormulario();
    darkmode();
    modalCrear();
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
    const modalCrear = document.querySelector("#modalCrear");
    const crearBoton = document.querySelector("#crearBoton");
    const miFormulario2 = document.querySelector("#miFormulario2");
    const modalAviso = document.querySelector("#modalAviso");

    crearBoton.addEventListener('click', function() {
        if (miFormulario2.checkValidity()) {
            modalCrear.showModal();    
        }else{
            modalAviso.showModal(); 
            modalAviso.addEventListener('close', function() {
                miFormulario2.submit();   
            })   
        }        
    })

    miFormulario2.addEventListener('submit', function(event) {
        event.preventDefault();
    });
    modalCrear.addEventListener('close', function() {
        miFormulario2.submit();
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



