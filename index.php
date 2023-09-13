<?php
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio=true);
?>

    <main class="container">
        <h1 class="mt-5">Más Sobre Nosotros</h1>
        <div class="row justify-content-center row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="icono">
                <i class="bi bi-house-lock-fill custom-element"></i>
                <h3>Seguridad</h3>
                <p>Nullam vel massa vel purus tempor dapibus ac non justo. 
                Donec tristique magna vel vulputate ultricies. 
                Etiam at ullamcorper mi.</p>
            </div>
            <div class="icono">
                <i class="bi bi-cash-stack custom-element"></i>
                <h3>Precio</h3>
                <p>Nullam vel massa vel purus tempor dapibus ac non justo. 
                Donec tristique magna vel vulputate ultricies. 
                Etiam at ullamcorper mi.</p>
            </div>
            <div class="icono">
                <i class="bi bi-clock-fill custom-element"></i>
                <h3>Tiempo</h3>
                <p>Nullam vel massa vel purus tempor dapibus ac non justo. 
                Donec tristique magna vel vulputate ultricies. 
                Etiam at ullamcorper mi.</p>
            </div> <!--.icono-->
        </div> <!--.row-->
    </main> <!--.container-->

    

    <section class="container mt-5">
        <h2>Casas y Departamentos en Venta</h2>
            
        <?php 
            $limite = 3;
            include 'includes/templates/anuncios.php';
        ?>

        <div class="d-grid d-md-flex justify-content-md-end py-5">
            <a class="btn btn-primary2 btn-lg py-3 px-5 fw-semibold fs-3" href="anuncios.php" role="button">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <div class="container">
                <div class="h2 text-center p-3">Encuentra la casa de tus sueños</div>
                <p class="text-center p-3">Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
                <div class="container d-grid d-md-flex justify-content-md-center">
                    <a class="btn btn-primary3 btn-lg py-3 px-5 fw-semibold fs-3" href="contacto.php" role="button">Contactanos</a>
                </div>
        </div>    
    </section>

    <div class="container-lg">
        <div class="row row-cols-1 row-cols-md-2">
            <section class="col-md-8">
                <h3 class="py-5 fs-1">Nuestro Blog</h3>
                <article class="mb-4 row">
                    <div class="col-md-4">
                        <picture class="">
                            <source srcset="build/img/blog1.webp" type="image/webp">
                            <source srcset="build/img/blog1.jpg" type="image/jpg">
                            <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                        </picture>
                    </div>

                    <div class="col-md-8 mt-4">
                        <a href="entrada.php" class="text-decoration-none">
                            <div class="h2 fw-bold">Terraza en el techo de tu casa</div>
                                    <div class="progress col-4 col-sm-2 col-md-4 col-xl-3 mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success2" style="width: 100%"></div>
                                    </div>   
                            <p>Escrito el:<span>14/07/2023</span> por: <span>Admin</span></p>
                            <p>
                                Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                            </p>
                        </a>
                    </div>
                </article>

                <article class="mb-4 row">
                    <div class="col-md-4">
                        <picture class="">
                            <source srcset="build/img/blog2.webp" type="image/webp">
                            <source srcset="build/img/blog2.jpg" type="image/jpg">
                            <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                        </picture>
                    </div>

                    <div class="col-md-8 mt-4">
                        <a href="entrada.php" class="text-decoration-none mt-5">
                            <div class="h2 fw-bold">Guia para la decoración de tu hogar</div>
                                <div class="progress col-4 col-sm-2 col-md-4 col-xl-3 mt-2" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success2" style="width: 100%"></div>
                                </div>
                            <p>Escrito el:<span>14/07/2023</span> por: <span>Admin</span></p>
                            <p>
                                Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio
                            </p>
                        </a>
                    </div>
                </article>
            </section>

            <section class="col-md-4 testimoniales"> 
                
                    <h3 class="fs-1 py-5">Testimoniales</h3>

                    <div class="testimonial p-5 fs-2 lh-lg text-light rounded-4">
                        <blockquote style="padding-left: 50px;">
                                El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
                        </blockquote>
                        <p>-Juan De la Torre</p>
                    </div>
                
                
            </section>
        </div>
    </div>   

    <?php
        incluirTemplate('footer');
    ?>
    