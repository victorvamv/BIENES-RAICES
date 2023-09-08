<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="container">
        
        <?php 
        $limite = 20;
        include 'includes/templates/anuncios.php' 
        ?>
    </main> <!--.container-->
    <?php
        incluirTemplate('footer');
    ?>
