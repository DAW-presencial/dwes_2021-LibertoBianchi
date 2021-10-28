<html>
    <head>
        <title>Agenda LBianchi</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"></head>
    <body>

    </body>




    <?php
    
    function miCargador($nombre){
    include $nombre.'.php';
}
spl_autoload_register('miCargador');

class Padre {
 function unMetodo() {
  echo "Funcion padre";
}

}

    

$h= new Hija();
$h->hola();
$h->unMetodo();
// Muestra “Función unMetodo de Padre”.
    ?>
</html>