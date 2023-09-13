<?php

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header('Location: /');
    }
    // Importar la conexión
    require 'includes/config/database.php';
    $db = conectarDB();

    // Consultar 
    $query = "SELECT * FROM propiedades WHERE id = {$id}";

    // Obtener resultado 
    $resultado = mysqli_query($db, $query);

    // echo "<pre>";
    // var_dump($resultado);
    // echo "<pre>";
      
    $propiedad = mysqli_fetch_assoc($resultado);

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="container" style="text-align: justify;">
        <div class="row justify-content-center">
            <div class="col-11 col-md-8 col-lg-7 col-xl-6">
                <div class="p-5 h1 text-center"><?php echo $propiedad['titulo']; ?></div>

                <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen de la Propiedad">
            
                <div>
                    <p class="text-center text-success fw-bold fs-1 py-5">
                        $<?php echo number_format($propiedad['precio']); ?>
                    </p>
                   
                    <ul class="iconos-caracteristicas d-flex">
                        <li class="d-flex justify-content-center">
                            <img class="icono2" loading="lazy" src="assets/icons/badge-wc.svg" alt="Icono Baño">
                            <p><?php echo $propiedad['wc']; ?></p>
                        </li>
                        <li class="d-flex justify-content-center">
                            <img class="icono2" loading="lazy" src="assets/icons/car-front.svg" alt="Icono Estacionamiento">
                            <p><?php echo $propiedad['estacionamiento']; ?></p>
                        </li>
                        <li class="d-flex justify-content-center">
                            <img class="icono2" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Habitaciones">
                            <p><?php echo $propiedad['habitaciones']; ?></p>
                        </li>
                    </ul>
                    
                    <p class="py-5"><?php echo $propiedad['descripcion']; ?></p>
                    
                </div> 
            </div>       
        </div>
    </main> 
    <?php
        mysqli_close($db);

        incluirTemplate('footer');
    ?>
