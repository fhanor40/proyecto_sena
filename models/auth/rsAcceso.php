<?php  
    
    include('classLogin.php');

    class RsAcceso extends Login {
        private $conx;

        public function __construct($conexion){
            $this->conx = $conexion;
        }

        public function acceder(){

            $sql_session ="SELECT * FROM user 
                            WHERE correo ='".$this->getUser()."'
                             AND password = '".$this->getPass()."';";

            $results = $this->conx->query($sql_session);

            if(!$results){
                $mensaje  = 'Consulta no válida: ' . mysql_error() . "\n";
                $mensaje .= 'Consulta completa: ' . $consulta;
                die($mensaje);

                $respuesta = 0;
            }
    
            if(mysqli_num_rows($results) == 0){
                $respuesta = 0;
            }
            else{
                session_start();
                $row = mysqli_fetch_assoc($results);
    
                $_SESSION['nombre'] = $row['nombre']." ".$row['apellidos'];
                $_SESSION['codigo_persona'] = $row['id'];

                $respuesta = 1;
            }

            return $respuesta;
        }
    }
    

?>