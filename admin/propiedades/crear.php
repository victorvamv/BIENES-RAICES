<?php

    require '../../includes/config/database.php';

    $db = conectarDB();

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedor = $_POST['vendedor'];

        $consulta = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_id ) VALUES ( '$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedor' ) ";
    
        // echo $consulta;

        $resultado = mysqli_query($db, $consulta);

        if ($resultado) {
            echo "Insertado Correctamente";
        }
    }


    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin" class="btn btn-success fs-3 px-5 py-3">Volver</a>

        <form class="p-4" method="POST" action="/admin/propiedades/crear.php">
            <fieldset class="border">
                <legend class="h3">Informacion General</legend>

                <label class="form-label fs-3" for="titulo">Titulo:</label>
                <input class="form-control fs-4" type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">

                <label class="form-label fs-3" for="precio">Precio:</label>
                <input class="form-control fs-4" type="number" id="precio" name="precio" placeholder="Precio Propiedad">

                <label class="fs-3" for="imagen">Imagen:</label>
                <input class="form-control fs-4" type="file" id="imagen" accept="image/jpeg, image/png">

                <label class="form-label fs-3" for="descripcion">Descripción:</label>
                <textarea class="form-control fs-4" id="descripcion" name="descripcion" rows="6"></textarea>
            </fieldset>

            <fieldset class="border mt-4">
                <legend>Información Propiedad</legend>

                <label for="habitaciones" class="form-label fs-3">Habitaciones</label>
                <input type="number" class="form-control fs-4" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9">

                <label for="wc" class="form-label fs-3">WC</label>
                <input type="number" class="form-control fs-4" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9">

                <label for="estacionamiento" class="form-label fs-3">Estacionamiento</label>
                <input type="number" class="form-control fs-4" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9">
            </fieldset>

            <fieldset class="border mt-4">
                <legend>Vendedores</legend>

                <select class="form-control fs-3" aria-label="Default select example" name="vendedor">
                    <option selected disabled value>-- Seleccione --</option>
                    <option value="1">Juan</option>
                    <option value="2">Maria</option>
                </select>
            </fieldset>

            <button type="submit" class="btn btn-success fs-3 px-5 py-3 mt-4">Crear propiedad</button>
        </form>
    </main>
<?php
    incluirTemplate('footer');
?>