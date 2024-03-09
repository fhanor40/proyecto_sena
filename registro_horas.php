<?php

ob_start();
session_start();
include "./db/db.php";

if ($conexion) {
    // Definir variables 
    $codigo_persona = $_SESSION['codigo_persona'];
    $fecha_ingreso = $_POST['txtFechaIngreso'];
    $hora_ingreso = $_POST['txtHoraIngreso'];
    $fecha_salida = $_POST['txtFechaSalida'];
    $hora_salida = $_POST['txtHoraSalida'];

    // Preparar la consulta con variables
    $query = "INSERT INTO horasusuario(idUsuario, fechaIngreso, horaIngreso,fechaSalida,horaSalida)
              VALUES ($codigo_persona, '$fecha_ingreso', '$hora_ingreso','$fecha_salida','$hora_salida')";
    
    // Ejecutar la consulta
    $result = $conexion->query($query);

    // Verificar el resultado
    if ($result) {
        echo "Registro insertado exitosamente";
        header('Location: http://localhost:8080/proyecto_sena/horas.php');
    } 
    else {
        echo "Error al insertar el registro: " . $conexion->error;
    }

    // Cerrar la conexión cuando hayas terminado
    mysqli_close($conexion);
}
ob_end_flush();
?>