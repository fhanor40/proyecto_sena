<?php
    include "./db/db.php";

    if ($conexion) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql_session ="SELECT * FROM user 
                        WHERE correo ='$username'
                        AND password = '$password';";


        $results = $conexion->query($sql_session);

        if(!$results){
            $mensaje  = 'Consulta no válida: ' . mysql_error() . "\n";
            $mensaje .= 'Consulta completa: ' . $consulta;
            die($mensaje);
        }

        if(mysqli_num_rows($results) == 0){
            header('Location: http://localhost:8080/proyecto_sena/');
        }
        else{
            session_start();
            $row = mysqli_fetch_assoc($results);

            $_SESSION['nombre'] = $row['nombre']." ".$row['apellidos'];
            $_SESSION['codigo_persona'] = $row['id'];

            header('Location: http://localhost:8080/proyecto_sena/');
        }

        mysqli_close($conexion);
    }
?>