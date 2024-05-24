<?php

    error_reporting(E_ALL);
    ini_set("display_errors", 0);

    ob_start();
    session_start();

    if(!$_SESSION['codigo_persona']){
        include('views/login.php');
    }
    else{
        include('views/horas.php');
    }

    ob_end_flush();
?>