<?php
    include "../db/db.php";
    include('models/auth/rsAcceso.php');
    
    $user = $_REQUEST['username'];
    $pass = $_REQUEST['password'];


    $objAcceso = new RsAcceso($conexion);

    $objAcceso->setUser($user);
    $objAcceso->setPass($pass);

    $resultado = $objAcceso->acceder();

?>