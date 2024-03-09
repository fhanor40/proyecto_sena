<?php
include "./db/db.php";

if ($conexion) {
    // Definir variables 
    $cedula = $_POST['txtCedula'];
    $nombre = $_POST['txtNombre'];
    $apellidos = $_POST['txtApellido'];
    $correo = $_POST['txtCorreo'];
    $password = $_POST["password"];

    // Preparar la consulta con variables
    $query = "INSERT INTO user(cedula, nombre, apellidos,correo,password)
              VALUES ('$cedula', '$nombre', '$apellidos','$correo','$password')";
    
    // Ejecutar la consulta
    $result = $conexion->query($query);

    // Verificar el resultado
    if ($result) {
        echo "Registro insertado exitosamente";
        header('Location: http://localhost:8080/proyecto_sena/');
    } 
    else {
        echo "Error al insertar el registro: " . $conexion->error;
    }

    // Cerrar la conexión cuando hayas terminado
    mysqli_close($conexion);
}

?>