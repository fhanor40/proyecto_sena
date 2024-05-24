<?php   
    error_reporting(E_ALL);
    ini_set("display_errors", 0);

    ob_start();
    session_start();

    if(!$_SESSION['codigo_persona']){
        header('Location: http://localhost:8080/proyecto_sena/');
    }
    else{
        include "./db/db.php";
        $codigo_persona = $_SESSION['codigo_persona'];

        if ($conexion) {
            $sql_post = "SELECT * FROM horasusuario WHERE idUsuario = $codigo_persona ORDER BY fechaIngreso DESC";

            $resultado = $conexion->query($sql_post);
            
            if (!$resultado) {
                $mensaje  = 'Consulta no válida: ' . mysql_error() . "\n";
                $mensaje .= 'Consulta completa: ' . $consulta;
                die($mensaje);
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas </title>
    <?php
        include('librarys/head.php');
    ?>

   
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>MIS HORAS <?php echo $_SESSION['nombre']; ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">&nbsp;</div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <a href="form_horas.php" class="btn btn-primary"><strong><i class="fa-solid fa-plus"></i> REGISTRAR HORAS</strong></a>
                <a href="cerrar_session.php" class="btn btn-danger"><strong><i class="fa-solid fa-circle-xmark"></i> CERRAR SESIÓN</strong></a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">&nbsp;</div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <table class="table table-success table-striped">
                    <tr>
                        <th>No.</th>
                        <th>FECHA DE INGRESO</th>
                        <th>HORA DE INGRESO</th>
                        <th>FECHA SALIDA</th>
                        <th>HORA DE SALIDA</th>
                        <th>TOTAL HORAS LABORADAS</th>
                    </tr>
                    <?php
                        if(mysqli_num_rows($resultado) > 0){
                            $numero = 1;
                            while ($fila = mysqli_fetch_assoc($resultado)) {
                                $fechaIngreso = $fila['fechaIngreso'];
                                $horaIngreso = $fila['horaIngreso'];
                                $fechaSalida = $fila['fechaSalida'];
                                $horaSalida = $fila['horaSalida'];

                                $fecha_hora_inicio = new DateTime($fechaIngreso." ".$horaIngreso);
                                $fecha_hora_fin = new DateTime($fechaSalida." ".$horaSalida);

                                $intervalo_datos = $fecha_hora_inicio->diff($fecha_hora_fin);

                                $dif_horas = $intervalo_datos->format('%H'); 

                                $dif_minutos = $intervalo_datos->format('%i');

                                if($dif_minutos == 0){
                                    $horas_laboradas = $dif_horas;
                                }
                                else{
                                    $horas_laboradas = $dif_horas.".".$dif_minutos;
                                }

                    ?>
                    <tr>
                        <td><?php echo $numero; ?></td>
                        <td><?php echo $fechaIngreso; ?></td>
                        <td><?php echo date("h:i a", strtotime($horaIngreso)); ?></td>
                        <td><?php echo $fechaSalida; ?></td>
                        <td><?php echo date("h:i a", strtotime($horaSalida)); ?></td>
                        <td><?php echo $horas_laboradas; ?></td>
                    </tr>
                    <?php
                                $numero++;
                            }
                        }
                        else{
                    ?>
                    <tr>
                        <td colspan="6">No hay datos</td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    }

    ob_end_flush();
    
?>
