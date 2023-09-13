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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id){
            $query = "SELECT imagen FROM propiedades WHERE id = $id";
            $resultado = mysqli_query($db, $query);
            $propiedad = mysqli_fetch_assoc($resultado);
            unlink('../imagenes/' . $propiedad['imagen']);
            // Eliminar la propiedad 
            $query = "DELETE FROM propiedades WHERE id = $id";
            $resultado = mysqli_query($db, $query);

            if($resultado) {
                header('location: /admin');
            }
        }
    }
    require '../includes/funciones.php';
    incluirTemplate('header');
?>
    <dialog id="modalAvisoEliminar" class="shadow-lg colorModal rounded-4">      
            <p class="text-white text-center p-5">Correcto</p>
            <p class="text-white text-center p-5">¿Seguro que quiere eliminar esta propiedad?</p>
           <div class="d-flex justify-content-evenly">
                <button type="button" class="btn btn-lg btn-danger px-4 fs-4 bi bi-x-square" onclick="document.getElementById('modalAvisoEliminar').close()" id="clickBoton9">No</button>    
                <button type="button" class="btn btn-lg btn-success px-4 fs-4 bi bi-x-square" onclick="document.getElementById('modalAvisoEliminar').close()" id="clickBoton10">Si</button>
           </div>  
    </dialog>

    <dialog id="modalEliminar" class="shadow-lg colorModal rounded-4">
        <p class="text-white p-5">La propiedad se elimino correctamente</p>
        <div class="d-flex justify-content-center pb-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="var(--bs-white)" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
            </svg>
        </div>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-lg btn-success px-4 fs-4 bi bi-x-square" onclick="document.getElementById('modalEliminar').close()" id="clickBoton8">De acuerdo</button>
        </div>
    </dialog>

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
                    <td class="ps-5 titulo" ><?php echo $propiedad['titulo']; ?></td>
                    <td class="ps-5" width="100px"><img src="../imagenes/<?php echo $propiedad['imagen']; ?>"></td>
                    <td>$<?php echo number_format($propiedad['precio']); ?></td>
                    <td class="ps-5">
                        <form method="POST" class="formularioEliminar w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">
                            <input type="submit" class="botonEliminar btn btn-danger col-12 fs-4 mt-3" value="Eliminar" >    
                        </form>
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