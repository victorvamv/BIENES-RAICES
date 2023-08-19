<?php
    require '../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>
        <a href="/admin/propiedades/crear.php" class="btn btn-success fs-3 px-5 py-3">Nueva Propiedad</a>

        <table class="table table-success">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Casa en la playa</td>
                    <td><img src="/imagenes/5947f623f3eb8367e9cfa3f5ce892f0a.jpg"></td>
                    <td>$1200000</td>
                    <td>
                        <a href="">Eliminar</a>
                        <a href="">Actualizar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

<?php
    incluirTemplate('footer');
?>