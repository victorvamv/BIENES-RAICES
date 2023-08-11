<?php
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin" class="btn btn-success fs-3 px-5 py-3">Volver</a>

        <form class="p-4">
            <fieldset class="border">
                <legend class="h3">Informacion General</legend>

                <label class="form-label fs-3" for="titulo">Titulo:</label>
                <input class="form-control fs-4" type="text" id="titulo" placeholder="Titulo Propiedad">

                <label class="form-label fs-3" for="precio">Precio:</label>
                <input class="form-control fs-4" type="number" id="precio" placeholder="Precio Propiedad">

                <label class="fs-3" for="imagen">Imagen:</label>
                <input class="form-control fs-4" type="file" id="imagen">

                <label class="form-label fs-3" for="descripcion">Descripción:</label>
                <textarea class="form-control fs-4" id="descripcion" rows="6"></textarea>
            </fieldset>
        </form>
    </main>
<?php
    incluirTemplate('footer');
?>