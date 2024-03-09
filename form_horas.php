<?php 
    error_reporting(E_ALL);
    ini_set("display_errors", 0);

    ob_start();
    session_start();
    if(!$_SESSION['codigo_persona']){
        header('Location: http://localhost:8080/proyecto_sena/');
    }
    else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>REGISTRO HORAS <?php echo $_SESSION['nombre']; ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">&nbsp;</div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <a href="horas.php" class="btn btn-primary"><strong><i class="fa-solid fa-backward-step"></i> IR AL INICIO</strong></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form action="registro_horas.php" method="post">
                    <div class="row">
                        <div class="col-sm-12 text-center"> <h6>INGRESO</h6></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">&nbsp;</div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="txtFechaIngreso" class="font-weight-bold">Fecha *</label>
                                <input type="date" class="form-control" id="txtFechaIngreso" name="txtFechaIngreso" value="" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txtHoraIngreso" class="font-weight-bold">Hora *</label>
                                <input type="time" class="form-control" id="txtHoraIngreso" name="txtHoraIngreso" value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">&nbsp;</div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 text-center"> <h6>SALIDA</h6></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">&nbsp;</div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="txtFechaSalida" class="font-weight-bold">Fecha *</label>
                                <input type="date" class="form-control" id="txtFechaSalida" name="txtFechaSalida" value="" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="txtHoraSalida" class="font-weight-bold">Hora *</label>
                                <input type="time" class="form-control" id="txtHoraSalida" name="txtHoraSalida" value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">&nbsp;</div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" type="button"><strong> <i class="fa-solid fa-floppy-disk"></i> GUARDAR </strong></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    }
?>