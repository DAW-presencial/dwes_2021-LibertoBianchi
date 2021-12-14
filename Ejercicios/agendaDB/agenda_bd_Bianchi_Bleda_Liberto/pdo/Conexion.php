<?php 
//Constantes para acceder a la base de datos
 define('DB_HOST','localhost');
 define('DB_USER','lbianchi');
 define('DB_PASS','abc123.');
 define('DB_NAME','agenda_lbianchi');

class Conexion{
   public $conexion;
   //Metodo conectar para cuando se precise conectar a la base de datos
function conectar(){
  
    try{
        
    $this->conexion = new PDO("pgsql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);

    

  return $this->conexion;
    
} catch (PDOException $e){
    exit("Error: " . $e->getMessage());
}



}

}


?>