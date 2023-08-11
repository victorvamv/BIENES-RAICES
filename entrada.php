<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="container" style="text-align: justify;">
        <div class="row justify-content-center">
            <div class="col-11 col-md-8 col-lg-7 col-xl-6">
                <div class="h1 p-5">Casa en Venta frente al bosque</div>

                <picture>
                    <source srcset="build/img/destacada2.webp" type="image/webp">
                    <source srcset="build/img/destacada2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la Propiedad">
                </picture>

                <div>
                    <p>
                        Vestibulum vestibulum ipsum eget vulputate placerat. Nullam faucibus, ante ut sollicitudin eleifend,
                        massa est congue ante, in commodo neque libero id dui. Nullam hendrerit tempor ornare. Nullam eu 
                        consectetur nisi. Maecenas ac varius diam. Nulla nec fermentum eros. Mauris quis massa et lacus mollis 
                        auctor in eget lectus. Donec tincidunt tincidunt auctor. Vivamus quis dictum massa. Vestibulum euismod, 
                        sapien eget consectetur tempor, nisi leo facilisis mi, et efficitur mauris ex tincidunt libero. 
                        Pellentesque semper nisi non nunc pulvinar, nec venenatis turpis scelerisque. Maecenas et dolor in nulla 
                        posuere aliquet. Nulla vel justo finibus, maximus justo non, euismod tellus.
                    </p>
                </div> 
            </div>       
        </div>
    </main>

    <?php
        incluirTemplate('footer');
    ?>
