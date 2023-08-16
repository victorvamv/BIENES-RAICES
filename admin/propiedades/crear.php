<?php

    require '../../includes/config/database.php';

    $db = conectarDB();

    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";



        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedor = $_POST['vendedor'];

        if (!$titulo) {
            $errores[] = "Debes añadir un titulo";
        }

        if (!$precio) {
            $errores[] = "Añade un precio";
        }

        if (!$descripcion) {
            $errores[] = "Añade una descripcion";
        }

        if (!$habitaciones) {
            $errores[] = "Añade el número de habitaciones";
        }

        if (!$wc) {
            $errores[] = "Añade el numero de baños";
        }

        if (!$estacionamiento) {
            $errores[] = "Añade cuantos espacios de estacionamiento hay";
        }

        if (!$vendedor) {
            $errores[] = "Falta el vendedor";
        }

        if (empty($errores)) {
            $consulta = " INSERT INTO propiedades ( titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_id ) VALUES ( '$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedor' ) ";
            // echo $consulta;
            $resultado = mysqli_query($db, $consulta);

            if ($resultado) {
                echo "Insertado Correctamente";
            }    
        }   
    }


    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin" class="btn btn-success fs-3 px-5 py-3">Volver</a>

        
        <?php foreach($errores as $error): ?>
            <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                <symbol id="exclamation-triangle-fill" viewBox="0 0 8 8">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
            </svg>
            
            <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

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