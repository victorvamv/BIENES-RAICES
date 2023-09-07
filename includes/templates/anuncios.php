<?php
    // Importar la conexion
    require 'includes/config/database.php';
    $db = conectarDB();

    // Consultar
    $query = "SELECT * FROM propiedades LIMIT {$limite}";

    // Obtener resultado
    $resultado = mysqli_query($db, $query);
?>


<div class="row justify-content-center row-cols-1 row-cols-md-2 row-cols-xl-3">
    <?php while($propiedad = mysqli_fetch_assoc($resultado)): ?>
    <div class="col mt-5">
        <div class="card text-bg-light border border-3">
            <img src="build/img/anuncio1.jpg" class="card-img-top" alt="Imagen 1">
            <div class="card-body anuncio">
                <div class="p-5">
                    <div class="h3 text-center">Casa de Lujo en el Lago</div>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un buen precio</p>
                    <p class="text-success fw-bold fs-1">$3,000,000</p>

                    <ul class="iconos-caracteristicas d-flex">
                        <li class="d-flex justify-content-center">
                            <img class="icono" loading="lazy" src="assets/icons/badge-wc.svg" alt="Icono Baño">
                            <p>3</p>
                        </li>
                        <li class="d-flex justify-content-center">
                            <img class="icono" loading="lazy" src="assets/icons/car-front.svg" alt="Icono Estacionamiento">
                            <p>3</p>
                        </li>
                        <li class="d-flex justify-content-center">
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones">
                            <p>4</p>
                        </li>
                    </ul>
                    <div class="pt-5">
                        <a class="d-grid btn btn-primary3 btn-lg py-3 fw-semibold fs-3" href="anuncio.html" role="button">Ver Propiedad</a>  
                    </div>
                </div> <!--.p-5-->
            </div> <!--.card-body-->
        </div> <!--.card-->
    </div> <!--.col-->
    <?php endwhile; ?>
</div>