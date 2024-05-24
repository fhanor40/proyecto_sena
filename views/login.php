<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <?php
        include('librarys/head.php');
    ?>
</head>
<body>
    <div class="container-fluid">
        <div id="template-bg-1">
            <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
                <div class="card p-4 text-light bg-dark mb-5">
                    <div class="card-header">
                        <h3>Iniciar sesión </h3>
                    </div>
                    <div class="card-body w-100">
                        <form name="login">
                            <div class="input-group form-group mt-3">
                                <div class="bg-secondary rounded-start">
                                    <span class="m-3"><i class="fas fa-user mt-2"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Usuario" name="username" id="username" required>                               
                            </div>
                            <div class="alert alert-danger alerta-forformulario" id="error_usuario" role="alert"></div>
                            <div class="input-group form-group mt-3">
                                <div class="bg-secondary rounded-start">
                                    <span class="m-3"><i class="fas fa-key mt-2"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password" required>
                            </div>
                            <div class="alert alert-danger alerta-forformulario" id="error_password" role="alert"></div>

                            <div class="form-group mt-3">
                                <button type="button" class="btn bg-secondary float-end text-white w-100" onclick="validar_login()">ACCEDER</button>
                            </div>

                            <br>
                            <div class="form-group mt-3">
                                <a href="formulario_registro.php" class="btn bg-secondary float-end text-white w-100">Registrate</a>
                            </div>
                        </form>
                        <script src="validate/login.js"></script>
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