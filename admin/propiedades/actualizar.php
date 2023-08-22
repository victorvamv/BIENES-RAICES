<?php

    // Validar la URL por ID válido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /admin');
    }

    require '../../includes/config/database.php';
    $db = conectarDB();

    $consulta = "SELECT * FROM propiedades WHERE id = ${id}";
    $resultado = mysqli_query($db, $consulta);
    $propiedad = mysqli_fetch_assoc($resultado); 


    // Consultar para obtener los vendedores
    $consultaVendedores = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consultaVendedores);

    // Arreglo con mensajes de errores
    $errores = [];

    $titulo = $propiedad['titulo'];
    $precio = $propiedad['precio'];
    $descripcion = $propiedad['descripcion'];
    $habitaciones = $propiedad['habitaciones'];
    $wc = $propiedad['wc'];
    $estacionamiento = $propiedad['estacionamiento'];
    $vendedores_id = $propiedad['vendedores_id'];
    $imagenPropiedad = $propiedad['imagen'];


    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        $titulo = mysqli_real_escape_string( $db, $_POST['titulo'] );
        $precio = mysqli_real_escape_string( $db, $_POST['precio'] );
        $descripcion = mysqli_real_escape_string( $db, $_POST['descripcion'] );
        $habitaciones = mysqli_real_escape_string( $db, $_POST['habitaciones'] );
        $wc = mysqli_real_escape_string( $db, $_POST['wc'] );
        $estacionamiento = mysqli_real_escape_string( $db, $_POST['estacionamiento'] );
        $vendedores_id = mysqli_real_escape_string( $db, $_POST['vendedor'] );
        $creado = date('Y/m/d');

        // Asignar files hacia una variable
        $imagen = $_FILES['imagen'];

        if (!$titulo) {
            $errores[] = "Debes añadir un titulo";
        }

        if (!$precio) {
            $errores[] = "Añade un precio";
        }

        if (strlen($descripcion) < 50) {
            $errores[] = "Añade una descripcion de minimo 50 caracteres";
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

        if (!$vendedores_id) {
            $errores[] = "Falta el vendedor";
        }

        if (!$imagen['name']) {
            $errores[] = 'La Imagen es obligatoria';
        } 

        $tamañoImagen = 100000;

        if ($imagen['size'] > $tamañoImagen) {
            $errores[] = 'La imagen es muy pesada';
        }

        if (empty($errores)) {
            // SUBIDA DE ARCHIVOS

            // Crear carpeta
            $carpetaImagenes = '../../imagenes/';

            if(!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }
            // Generar un nombre único
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";


            //Subir la imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
            
            $consulta = " INSERT INTO propiedades ( titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id ) VALUES ( '$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedores_id' ) ";
            // echo $consulta;
            $resultado = mysqli_query($db, $consulta);

            if ($resultado) {
                header('Location: /admin');
            }    
        }    
    }


    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
    <dialog id="modalAviso" class="shadow-lg colorModal rounded-4">      
            <p class="text-white text-center p-5">Correcto</p>
            <p class="text-white text-center p-5">¿Seguro que quiere enviar el formulario?</p>
           <div class="d-flex justify-content-evenly">
                <button type="button" class="btn btn-lg btn-danger px-4 fs-4 bi bi-x-square" onclick="document.getElementById('modalAviso').close()" id="clickBoton6">No</button>    
                <button type="button" class="btn btn-lg btn-success px-4 fs-4 bi bi-x-square" onclick="document.getElementById('modalAviso').close()" id="clickBoton7">Si</button>
           </div>  
    </dialog>

    <dialog id="modalCrear" class="shadow-lg colorModal rounded-4">
        <p class="text-white p-5">Los datos se han enviado correctamente</p>
        <div class="d-flex justify-content-center pb-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="var(--bs-white)" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
            </svg>
        </div>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-lg btn-success px-4 fs-4 bi bi-x-square" onclick="document.getElementById('modalCrear').close()" id="clickBoton5">De acuerdo</button>
        </div>
    </dialog>
    
    <main class="contenedor seccion">
        <h1>Actualizar Propiedad</h1>
        <a href="/admin" class="btn btn-success fs-3 px-5 py-3">Volver</a>

        
        <?php foreach($errores as $error): ?>  
            <div class="alert alert-danger bi bi-exclamation-triangle-fill" role="alert">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="p-4" method="POST" action="/admin/propiedades/crear.php" id="miFormulario2" enctype="multipart/form-data">
            <fieldset class="border">
                <legend class="h3">Informacion General</legend>

                <label class="form-label fs-3" for="titulo">Titulo:</label>
                <input class="form-control fs-4" type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo;?>" required>

                <label class="form-label fs-3" for="precio">Precio:</label>
                <input class="form-control fs-4" type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio;?>" required>

                <label class="fs-3" for="imagen">Imagen:</label>
                <input class="form-control fs-4" type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <img src="/imagenes/<?php echo $imagenPropiedad; ?>" class="col-2">
                

                <label class="form-label fs-3" for="descripcion">Descripción:</label>
                <textarea class="form-control fs-4" id="descripcion" name="descripcion" rows="6" required><?php echo $descripcion; ?></textarea>
            </fieldset>

            <fieldset class="border mt-4">
                <legend>Información Propiedad</legend>

                <label for="habitaciones" class="form-label fs-3">Habitaciones</label>
                <input type="number" class="form-control fs-4" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones;?>" required>

                <label for="wc" class="form-label fs-3">WC</label>
                <input type="number" class="form-control fs-4" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc;?>" required>

                <label for="estacionamiento" class="form-label fs-3">Estacionamiento</label>
                <input type="number" class="form-control fs-4" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento;?>" required>
            </fieldset>

            <fieldset class="border mt-4">
                <legend>Vendedores</legend>

                <select class="form-control fs-3" aria-label="Default select example" name="vendedor">
                    <option selected disabled value="">-- Seleccione --</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                        <option <?php echo $vendedores_id === $vendedor['id'] ? 'selected' : '';?> value="<?php echo $vendedor['id']; ?>"> <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?> </option>
                    <?php endwhile; ?>
                </select>
            </fieldset>

            <button type="submit" class="btn btn-success fs-3 px-5 py-3 mt-4" id="crearBoton">Actualizar propiedad</button>
        </form>
    </main>
<?php
    incluirTemplate('footer');
?>