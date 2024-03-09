<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   
</head>
<body>
    <div class="container-fluid">
        <div id="template-bg-1">
            <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
                <div class="card p-4 text-light bg-dark mb-5">
                    <div class="card-header">
                        <h3>REGISTRO </h3>
                    </div>
                    <div class="card-body w-100">
                        <form name="login" action="registro_usuario.php" method="POST">
                            <div class="input-group form-group mt-3">
                                <div class="bg-secondary rounded-start">
                                    <span class="m-3"><i class="fas fa-user mt-2"></i></span>
                                </div>
                                <input type="number" class="form-control" placeholder="Cedula" name="txtCedula" required>
                            </div>

                            <div class="input-group form-group mt-3">
                                <div class="bg-secondary rounded-start">
                                    <span class="m-3"><i class="fas fa-user mt-2"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Nombre" name="txtNombre" required>
                            </div>

                            <div class="input-group form-group mt-3">
                                <div class="bg-secondary rounded-start">
                                    <span class="m-3"><i class="fas fa-user mt-2"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Apellido" name="txtApellido" required>
                            </div>

                            <div class="input-group form-group mt-3">
                                <div class="bg-secondary rounded-start">
                                    <span class="m-3"><i class="fas fa-user mt-2"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Correo" name="txtCorreo" required>
                            </div>

                            <div class="input-group form-group mt-3">
                                <div class="bg-secondary rounded-start">
                                    <span class="m-3"><i class="fas fa-key mt-2"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" value="GUARDAR" class="btn bg-secondary float-end text-white w-100" name="login-btn">
                            </div>

                            <br>

                            <div class="form-group mt-3">
                                <a href="index.php" class="btn bg-secondary float-end text-white w-100">Volver al login</a>
                            </div>
                        </form>
        
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center">
                            <div class="text-primary">Si es un usuario registrado, inicie sesión aquí.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</body>
</html>