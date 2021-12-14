<?php 
//Imprime lista de contactos
include("Contacto.php");
$contactos = new Contacto;
$contactos->read();


?>