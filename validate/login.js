function validar_login() {
    let username = $('#username').val();
    let password = $('#password').val();

    if(username.trim() == ''){
        $("#error_usuario").fadeIn('300');
        $("#error_usuario").html('Debe Ingresar el Usuario');
        $('#username').focus();
        return false;
    }
    else{
        $("#error_usuario").html('');
        $("#error_usuario").fadeOut('300');
    }
    
    if(password.trim() == ''){
        $("#error_password").fadeIn('300');
        $("#error_password").html('Debe Ingresar la contraseña');
        $('#password').focus();
        return false;
    }
    else{
        $("#error_password").html('');
        $("#error_password").fadeOut('300');
    }

    let data_enviar = {
        username: username,
        password: password
    }
    
    $.ajax({
        type: "POST",
        url: 'controllers/login.php',
        data: data_enviar,
        success: function(response){
            response = response;
            if(response == 1){
                window.location.replace('/proyecto_sena');
            }
            else{
                $("#error_credenciales").fadeIn('300');
                $("#error_credenciales").html("<strong>Usuario y/ó Contraseña incorrectas</strong>");
            }
        }
    });

}