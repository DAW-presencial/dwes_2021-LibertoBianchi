<!doctype html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

//         Autoload con fichero de la clase siguiendo un convenio de 
//         denominación y guardado en el un único directorio accesible.
//         Fue pregunta de examen.

        function spl__autoload($nomclase) {
            
            require __DIR__ . "/clases/$nomclase.php";
        }

        $o = new Persona;
        var_dump($o);
        ?>
    </body>
</html>


