<?php
    require 'includes/config/database.php';
    $db = conectarDB();

    // Autenticar el usuario
    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(!$email) {
            $errores[] = "El email es obligatorio o no es válido";
        }

        if(!$password) {
            $errores[] = "El Password es obligatorio";
        }

        if(empty($errores)) {
            // Revisar si el usuario existe 
            $query = "SELECT * FROM usuarios WHERE email = '{$email}' ";
            $resultado = mysqli_query($db, $query);
            

            if( $resultado->num_rows ) {
                //Revisar si el password es correcto
                $usuario = mysqli_fetch_assoc($resultado);
                //var_dump($usuario['password']);

                // Verificar si el password es correcto o no
                $auth = password_verify($password, $usuario['password']);

                if($auth) {
                    // El usuario esta autenticado
                } else {
                    $errores[] = 'El password es incorrecto';
                }
            }else {
                $errores[] = "El usuario no existe";
            }
        }
    }
    //Header
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

<main class="container">
    <h1>Iniciar Sesión</h1>

    <?php foreach($errores as $error):?>
        <div class="alert alert-danger bi bi-exclamation-triangle-fill" role="alert"">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" class="border" novalidate>
        <fieldset>
            <legend class="fs-2">Email y Password</legend>

            <label for="email" class="form-label fs-3">Email</label>
            <input class="form-control fs-3" type="email" name="email" id="email" placeholder="Ingresa tu correo">

            <label for="password" class="form-label fs-3">Password</label>
            <input class="form-control fs-3" type="password" name="password" id="password" placeholder="Ingresa tu contraseña">
        </fieldset>
        <div class="d-flex flex-row-reverse p-5">
            <input type="submit" class="btn btn-success fs-3 px-5 py-3" value="Iniciar Sesión">    
        </div>
        
    </form>
</main>

<?php
    incluirTemplate('footer');
?>