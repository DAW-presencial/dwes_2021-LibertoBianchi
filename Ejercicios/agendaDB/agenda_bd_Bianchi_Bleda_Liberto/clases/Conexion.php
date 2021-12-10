<?php 


class Conexion{
public $conexion;
function conectar(){
    try{
    $this->conexion = mysqli_connect("localhost","root","","agenda_db");

  
    
} catch (Exception $error){
    die("El error de conexión es : ".$error->getMessage());
}
}

}


?>