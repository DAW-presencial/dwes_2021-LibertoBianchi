<?php 
 define('DB_HOST','localhost');
 define('DB_USER','lbianchi');
 define('DB_PASS','abc123.');
 define('DB_NAME','agenda_lbianchi');

class Conexion{
   public $conexion;
function conectar(){
    /*
    Dará error ya que no se crea la base de datos automaticamente, para que haga la conexión
    habrá que crear una base de datos en localhost llamada agenda_db, con una tabla contactos
    con los campos nombre y numero.

    Aparte, está hecho en local Xamp, entonces este proyecto irá a htdocs para su correcto 
    funcionamiento.
    */
    try{
        
    $this->conexion = new PDO("pgsql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);

    

  return $this->conexion;
    
} catch (PDOException $e){
    exit("Error: " . $e->getMessage());
}



}

}


?>