<?php
    // Importar la conexion
    require '../includes/config/database.php';
    $db = conectarDB();
    
    // Escribir el Query
    $query = "SELECT * FROM propiedades";

    // Consultar la BD
    $resultadoConsulta = mysqli_query($db, $query);

    // Muestra mensaje condicional
    // $resultado = $_GET['resultado'] ?? null;

    require '../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="container">
        <h1>Administrador de Bienes Raices</h1>
        <a href="/admin/propiedades/crear.php" class="btn btn-success fs-3 px-5 py-3">Nueva Propiedad</a>

        <table class="table table-success table-striped table-hover mt-4 w-100">
            <thead>
                <tr>
                    <th class="col-1 ps-5">ID</th>
                    <th class="col-2 ps-5">Titulo</th>
                    <th class="col-4 ps-5">Imagen</th>
                    <th class="col-2 ps-5">Precio</th>
                    <th class="col-3 ps-5">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php while( $propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr>
                    <td class="ps-5"><?php echo $propiedad['id']; ?></td>
                    <td class="ps-5"><?php echo $propiedad['titulo']; ?></td>
                    <td class="ps-5" width="100px"><img src="/imagenes/<?php echo $propiedad['imagen']; ?>"></td>
                    <td>$<?php echo $propiedad['precio']; ?></td>
                    <td class="ps-5">
                        <a href="#" class="btn btn-danger col-12 fs-4 mt-3">Eliminar</a>
                        <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="btn btn-naranja col-12 fs-4 mt-3">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php

    // Cerrar la base de datos
    mysqli_close($db);

    incluirTemplate('footer');
?>