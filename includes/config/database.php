<?php

function conectarDB() : mysqli{
    $db = mysqli_connect('localhost', 'turin', '5220', 'bienes_raices');

    if (!$db) {
        echo "No se pudo conectar";
        exit;
    }
    
    return $db;
}