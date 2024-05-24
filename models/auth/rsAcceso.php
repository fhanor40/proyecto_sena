<?php  
    
    include('classLogin.php');

    class RsAcceso extends Login {
        private $conx;

        public function __construct($conexion){
            $this->conx = $conexion;
        }

        public function acceder(){

            $sql_session ="SELECT * FROM user 
                            WHERE correo ='$username'
                             AND password = '$password';";


            $results = $this->conx->query($sql_session);
        }
    }
    

?>