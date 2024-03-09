<?php
    $server = "127.0.0.1:3307";
    $user = "root";
    $pass = "";
    $db = "proyecto_sena";

    // Crear la conexión
    $conexion = new mysqli($server, $user, $pass, $db);

    // Verificar la conexión
    if ($conexion->connect_errno) {
        die("Conexión fallida: " . $conexion->connect_errno);
    }
?>