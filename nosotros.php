<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main>
        <h1 class="p-4">Conoce Sobre Nosotros</h1>
        <div class="container">
            <div class="row row-cols-lg-2">
                <div class="col-lg-6">
                    <picture>
                        <source srcset="build/img/nosotros.webp" type="image/webp">
                        <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                    </picture>
                </div>

                <div class="col-lg-6 lh-lg">
                    <blockquote class="fs-2 fw-bold pt-4">
                        25 años de experiencia
                    </blockquote>

                    <p class="texto-nosotros">
                        Sed porttitor vulputate tortor, in tristique metus aliquet a. Proin luctus lacinia porttitor. 
                        Fusce facilisis iaculis dolor nec efficitur. Praesent in sapien sed sem pellentesque elementum. 
                        Suspendisse nulla sem, imperdiet scelerisque tempus eget, hendrerit non arcu. Mauris eu nisl 
                        efficitur, aliquam purus a, rutrum velit. Phasellus id hendrerit massa. Duis luctus congue 
                        diam, et porta dui.
                    </p>

                    <p class="texto-nosotros">
                        Duis dignissim ultricies lectus, nec porta erat congue vitae. Praesent lacinia, enim vitae 
                        accumsan bibendum, felis velit laoreet leo, volutpat convallis orci sapien ac velit. Donec 
                        ultrices magna sit amet dolor posuere rutrum.
                    </p>
                </div> <!--.col-lg-6 lh-lg-->
            </div> <!--row-->
        </div> <!--.container-->
    </main>

    <section class="container">
        <h1>Más Sobre Nosotros</h1>
        <div class="row justify-content-center row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3">
            <div class="icono">
                <i class="bi bi-house-lock-fill custom-element" role="img" style="font-size: 10rem" aria-label="House"></i>
                <h3>Seguridad</h3>
                <p>Nullam vel massa vel purus tempor dapibus ac non justo. 
                Donec tristique magna vel vulputate ultricies. 
                Etiam at ullamcorper mi.</p>
            </div>
            <div class="icono">
                <i class="bi bi-cash-stack custom-element" role="img" style="font-size: 10rem" aria-label="Cash"></i>
                <h3>Precio</h3>
                <p>Nullam vel massa vel purus tempor dapibus ac non justo. 
                Donec tristique magna vel vulputate ultricies. 
                Etiam at ullamcorper mi.</p>
            </div>
            <div class="icono">
                <i class="bi-clock-fill custom-element" role="img" style="font-size: 10rem;" aria-label="Clock"></i>      
                <h3>Tiempo</h3>
                <p>Nullam vel massa vel purus tempor dapibus ac non justo. 
                Donec tristique magna vel vulputate ultricies. 
                Etiam at ullamcorper mi.</p>
            </div> <!--.icono-->
        </div> <!--.row-->
    </section> <!--.container-->

    <?php
        incluirTemplate('footer');
    ?>
