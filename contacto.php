<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
<body>

    <dialog id="miModal" class="shadow-lg colorModal rounded-4">      
            <p class="text-white text-center p-5">Correcto</p>
            <p class="text-white text-center p-5">¿Seguro que quiere enviar el formulario?</p>
           <div class="d-flex justify-content-evenly">
                <button type="button" class="btn btn-lg btn-danger px-4 fs-4 bi bi-x-square" onclick="document.getElementById('miModal').close()" id="clickBoton2">No</button>    
                <button type="button" class="btn btn-lg btn-success px-4 fs-4 bi bi-x-square" onclick="document.getElementById('miModal').close()" id="clickBoton">Si</button>
           </div>  
    </dialog>

    <dialog id="miModal2" class="shadow-lg colorModal rounded-4">
        <p class="text-white p-5">¡Faltan campos por llenar!</p>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-lg btn-success px-4 fs-4 bi bi-x-square" onclick="document.getElementById('miModal2').close()" id="clickBoton3">De acuerdo</button>
        </div>
    </dialog>

    <dialog id="miModal3" class="shadow-lg colorModal rounded-4">
        <p class="text-white p-5">Los datos se han enviado correctamente</p>
        <div class="d-flex justify-content-center pb-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="var(--bs-white)" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
            </svg>
        </div>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-lg btn-success px-4 fs-4 bi bi-x-square" onclick="document.getElementById('miModal3').close()" id="clickBoton4">De acuerdo</button>
        </div>
    </dialog>

        <main class="row justify-content-center">
            <h1 class="p-4">Contacto</h1>
            <picture class="col-11 col-md-8 col-lg-6">
                <source srcset="build/img/destacada3.webp" type="image/webp">
                <source srcset="build/img/destacada3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
            </picture>

            <h2 class="p-3">Llene el formulario de Contacto</h2>

            <form class="col-11 col-md-8 col-lg-6 was-validated" id="miFormulario">
                <fieldset class="border p-3 fs-3">
                    <legend class="fs-3">Informacion Personal</legend>

                    <div class="position-relative">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control rounded-pill fs-3" placeholder="Tu Nombre" id="nombre" value="Victor Hugo Vazquez" name="nombre" required>
                        <div class="invalid-tooltip fs-4 position-absolute top-0 end-0 px-5">
                            Ingresa tu nombre
                        </div>
                    </div>

                    <div class="position-relative">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control fs-3" placeholder="Tu Email" id="email" value="victorvamv17@gmail.com" name="email" required>
                        <div class="invalid-tooltip fs-4 position-absolute top-0 end-0 px-5">
                            ejemplo@correo.com
                        </div>
                    </div>

                    <div class="position-relative">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="tel" class="form-control fs-3" placeholder="Tu Telefono" id="telefono" pattern="^[55]\d{9}$" title="Número de 10 digitos que empiece en 55.." name="telefono" value="5553598797" required>
                        <div class="invalid-tooltip fs-4 position-absolute top-0 end-0 px-5">
                            Agrega tu número telefonico
                        </div>
                    </div>

                    <label for="mensaje" class="form-label">Mensaje (opcional):</label>
                    <textarea class="form-control fs-3" id="mensaje" rows="4" name="mensaje"></textarea>
                </fieldset>

                <fieldset class="border mt-4 p-3 fs-3">
                    <legend class="fs-3">Información sobre la propiedad</legend>
                    <div class="position-relative">
                        <select class="form-select fs-3" aria-label="Default select example" id="validationDefault01" name="validationDefault01" required>
                            <label for="validationDefault01">Vende o Compra:</label>
                            <option selected disabled value>-- Seleccione --</option>
                            <option>Compra</option>
                            <option>Vende</option>   
                        </select>
                        <div class="invalid-tooltip fs-4 position-absolute top-0 end-0 px-5">
                            Escoge Vende o Compra
                        </div>
                    </div>
                    <label>Precio o Presupuesto</label>
                    <input type="number" class="form-control fs-3" placeholder="Tu Precio o Presuspuesto" id="presupuesto" name="presupuesto">
                </fieldset>

                <fieldset class="border mt-4 p-3 fs-3 mb-3">
                    <legend class="fs-3">Información sobre la propiedad</legend>

                    <p class="fs-3">Como desea se contactado</p>
                    <div class="d-flex justify-content-around">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1" required>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Teléfono
                            </label>
                        </div>
                        <div class="form-check">    
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" required>
                            <label class="form-check-label" for="flexRadioDefault2">
                                E-mail
                            </label>
                        </div>
                    </div>

                    <p class="fs-3">Si eligió teléfono, elijo la fecha y la hora</p>
                        <div class="position-relative">
                            <label for="fecha">Fecha:</label>
                            <input type="date" id="fecha" class="form-control fs-3" name="fecha" required> 
                            <div class="invalid-tooltip fs-4 position-absolute top-0 end-0 px-5">
                                Este campo es obligatorio
                            </div>   
                        </div>
                        
                        <div class="position-relative">
                            <label for="hora">Hora:</label>
                            <input type="time" id="hora" min="09:00" max="18:00" class="form-control fs-3" name="hora" required>
                            <div class="invalid-tooltip fs-4 position-absolute top-0 end-0 px-5">
                                Este campo es obligatorio
                            </div>
                        </div>        

                </fieldset>

                <button type="submit" class="btn btn-primary2 btn-lg fs-3 px-5 py-3" id="contactoBoton">Enviar</button>
            </form>
        </main>

        <?php
            incluirTemplate('footer');
        ?>
 