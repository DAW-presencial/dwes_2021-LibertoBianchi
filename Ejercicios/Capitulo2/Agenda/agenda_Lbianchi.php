<!DOCTYPE html>

<html>
    <head>
        <title>Agenda LBianchi</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>


        <?php
        //Si ya existen elementos en 'agenda' los recoge en $contactos, si no, crea este array
        if (isset($_GET['agenda'])) {
            $contactos = $_GET['agenda'];
        } else {
            $contactos = array();
        }

        //Se ejecuta cuando submit es pulsado
        if (isset($_GET["submit"])) {
            $nuevoNombre = trim($_GET["nombre"]);
            $nuevoNumero = trim($_GET["numero"]);
            //Si esl string está vacio, nos advierte
            if ($nuevoNombre == "") {
                echo "Inserta un nombre";
            } else {
                //Si el nombre no está vacío y no hay numero, elimina el indice de ese usuario
                if ($nuevoNumero == "") {
                    unset($contactos[$nuevoNombre]);
                } else {
                    //Insertamos en contactos un nuevo indice e incluimos su numero en formato key=>value
                    $contactos[$nuevoNombre] = $nuevoNumero;
                }
            }
        }
        ?>
        <div>

            <form>
                <?php
                //Creamos un hidden input para cada user ya existente y el que acabamos de crear
                foreach ($contactos as $nombre => $telefono) {
                    echo '<input type="hidden" name="agenda[' . $nombre . ']" ';
                    echo 'value="' . $telefono . '"/>';
                }
                ?>
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre"><br>
                <label for="numero">Numero de telefono:</label><br>
                <input type="number" id="numero" name="numero">
                <input type = "submit" name="submit"/>

            </form>
        </div>
        <?php
        //Imprimimos la lista de contactos con un bucle foreach
        $numeroContacto = 1;
        foreach ($contactos as $nombre => $telefono) {
            echo "Contacto " . $numeroContacto . "<br>";
            echo "Nombre : " . $nombre . "<br>";
            echo "Numero : " . $telefono . "<br>" . "<br>";
            $numeroContacto++;
        }
        ?>


    </body>
</html>