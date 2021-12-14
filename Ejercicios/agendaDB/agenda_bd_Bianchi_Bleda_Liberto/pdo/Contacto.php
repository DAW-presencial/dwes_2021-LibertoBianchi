
<?php 
/*
En esta clase se crean los metodos correspondientes al CRUD
con las funciones create() read() update() delete()

*/
include "Conexion.php";
class Contacto extends Conexion{
    public $nombre;
    public $numero;
    
public function create(){
    $this->conectar();
    $nuevoNombre = trim($_POST['nombre']);
    $nuevoNumero = trim($_POST['numero']);

 $sql = $this->conexion->prepare("insert into contactos(nombre,numero) values(:nombre,:numero)");
 $sql->bindParam(':nombre',$nuevoNombre);
 $sql->bindParam(':numero',$nuevoNumero,PDO::PARAM_STR, 9);
 $sql->execute();
}

public function read(){
    
    $this->conectar();

    $query = $this->conexion->prepare("SELECT * FROM contactos");
    $query->execute();
    $contactos = $query -> fetchAll(PDO::FETCH_OBJ); 
$i = 1;
    if($query->rowCount()>0){
        foreach($contactos as $contacto){
            echo "Contacto ".$i."<br>";
            echo "Nombre = " .$contacto->nombre."<br>";
            echo "Numero = " .$contacto->numero."<br><br>";
            $i++;
        }
    }
}

public function update(){
    $nuevoNombre = trim($_POST['nombre']);
    $nuevoNumero = trim($_POST['numero']);
    $this->conectar();
    $query = $this->conexion->prepare("UPDATE contactos SET `numero`= :numero WHERE `nombre` = :nombre");
    $query->bindParam(':nombre',$nuevoNombre);
    $query->bindParam(':numero',$nuevoNumero,PDO::PARAM_STR, 9);
    $query->execute();

if($query->rowCount()>0){
echo $nuevoNombre." Ha sido actualizado";
}
else{
    $this->create();
}
  
    }



public function delete(){
    $nuevoNombre = trim($_POST['nombre']);
    $this->conectar();
    $consulta = "DELETE FROM 'contactos' WHERE 'nombre'= :nombre ";
$sql =$this->conexion->prepare($consulta);
$sql->bindParam(':nombre',$nuevoNombre);


$sql->execute();
echo "<script>console.log('Debug Objects: " . $nuevoNombre . "' );</script>";
}

}


?>