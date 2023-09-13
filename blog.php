<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main>
        <h1 class="p-5">Blog</h1>
    </main>

    <div class="row justify-content-center"> 
        <div class="col-11 col-md-9 col-lg-8 col-xl-7 col-xxl-6"> 
            <article class="row">
                <div class="col-md-4 col-lg-4">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="col-md-8 col-lg-8">
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

            <article class="row mt-4">
                <div class="col-md-4 col-lg-4">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="col-md-8 col-lg-8">
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

            <article class="row mt-4">
                <div class="col-md-4 col-lg-4">
                    <picture>
                        <source srcset="build/img/blog3.webp" type="image/webp">
                        <source srcset="build/img/blog3.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/blog3.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="col-md-8 col-lg-8">
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

            <article class="row mt-4">
                <div class="col-md-4 col-lg-4">
                    <picture>
                        <source srcset="build/img/blog4.webp" type="image/webp">
                        <source srcset="build/img/blog4.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/blog4.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="col-md-8 col-lg-8">
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
        </div>
    </div>
    <?php
        incluirTemplate('footer');
    ?>
