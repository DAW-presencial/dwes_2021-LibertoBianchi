<?php 
 define('DB_HOST','localhost');
 define('DB_USER','root');
 define('DB_PASS','');
 define('DB_NAME','agenda_db');

class Conexion{
   public $conexion;
function conectar(){
    try{
    $conexion = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
echo "va bn";
  
    
} catch (PDOException $e){
    exit("Error: " . $e->getMessage());
}
}

}


?>