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
            <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>">
            <div class="card-body anuncio">
                <div class="p-5">
                    <div class="h3 text-center"><?php echo $propiedad['titulo']; ?></div>
                    <p class="texto-anuncios"><?php echo $propiedad['descripcion']; ?></p>
                    <p class="text-success fw-bold fs-1">$<?php echo number_format($propiedad['precio']); ?></p>

                    <ul class="iconos-caracteristicas d-flex">
                        <li class="d-flex justify-content-center">
                            <img class="icono" loading="lazy" src="assets/icons/badge-wc.svg" alt="Icono Baño">
                            <p><?php echo $propiedad['wc']; ?></p>
                        </li>
                        <li class="d-flex justify-content-center">
                            <img class="icono" loading="lazy" src="assets/icons/car-front.svg" alt="Icono Estacionamiento">
                            <p><?php echo $propiedad['estacionamiento']; ?></p>
                        </li>
                        <li class="d-flex justify-content-center">
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones">
                            <p><?php echo $propiedad['habitaciones']; ?></p>
                        </li>
                    </ul>
                    <div class="pt-5">
                        <a class="d-grid btn btn-primary btn-lg py-3 fw-semibold fs-3" href="anuncio.php?id=<?php echo $propiedad['id']; ?>" role="button">Ver Propiedad</a>  
                    </div>
                </div> <!--.p-5-->
            </div> <!--.card-body-->
        </div> <!--.card-->
    </div> <!--.col-->
    <?php endwhile; ?>
</div>