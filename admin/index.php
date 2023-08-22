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

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>
        <a href="/admin/propiedades/crear.php" class="btn btn-success fs-3 px-5 py-3">Nueva Propiedad</a>

        <table class="table mt-4 w-100">
            <thead class="table-success">
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php while( $propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr>
                    <td><?php echo $propiedad['id']; ?></td>
                    <td><?php echo $propiedad['titulo']; ?></td>
                    <td width="100px"><img src="/imagenes/<?php echo $propiedad['imagen']; ?>"></td>
                    <td><?php echo $propiedad['precio']; ?></td>
                    <td>
                        <a href="#" class="btn btn-danger col-8 fs-4 mt-3">Eliminar</a>
                        <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="btn btn-naranja col-8 fs-4 mt-3">Actualizar</a>
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