<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">  
    
<body>
    <header class="header <?php echo $inicio ? 'inicio' : '' ?>">
        <div class="container contenido-header">
            <div class="d-flex flex-column align-items-center flex-md-row-reverse justify-content-md-between pt-5">
                <a href="index.php">
                    <img src="/build/img/logo.svg" alt="Logotipo Bienes Raices">
                </a>
            
                <div class="d-md-none pt-4" style="width: 5rem;">
                    <img src="/build/img/barras.svg" alt="Barras responsive">
                </div>

                <div class="d-flex flex-column align-items-center align-items-md-end">
                    <img type="button" class="dark-mode col-1 my-3 mt-md-0 " src="/build/img/dark-mode.svg">  
                    <nav class="navegacion1 d-md-flex gap-4 tp-3 visible">
                        <a class="d-block text-white fs-3 text-center" href="nosotros.php">Nosotros</a>
                        <a class="d-block text-white fs-3 text-center" href="anuncios.php">Anuncios</a>
                        <a class="d-block text-white fs-3 text-center" href="blog.php">Blog</a>
                        <a class="d-block text-white fs-3 text-center" href="contacto.php">Contacto</a>
                    </nav> <!--Anteriormente estaba la clase navegacion-->
                </div>     
            </div> <!--.flex (anteirormente estaba la clase barra)--> 

            <?php if($inicio) {?>
            <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
            <?php }?>
        </div>
    </header>