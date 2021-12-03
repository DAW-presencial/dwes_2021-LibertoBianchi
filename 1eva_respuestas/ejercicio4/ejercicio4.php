<?php 

class Padre{
    protected $propiedad = "propiedad";
    protected $value = "valor";
    public function __get($property){
 return $property;
 
     }
 
     public function __set($property,$value){
         $this->{$property}=$value;
               return $this->{$property};
         
             }
 }



class Hijo extends Padre{
}
$obj = new Hijo;
$obj-> prop = "<br>".$property."<br>";
$obj-> val = $value;
var_dump($obj)
?>