<?php 
    session_start();

    unset($_SESSION['nombre']);
    unset($_SESSION['codigo_persona']);
    session_destroy();

    header('Location: http://localhost:8080/proyecto_sena/');
?>