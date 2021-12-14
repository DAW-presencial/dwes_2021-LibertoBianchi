<html>

<head>
    <title>Agenda LBianchi</title>
    <meta charset="windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div>

        <form method="POST">

            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre"><br>
            <label for="numero">Numero de telefono:</label><br>
            <input type="number" id="numero" name="numero">
            <input type="submit" name="submit" /><br>
            <input type="button" onclick="window.open(showContacts.php)" value="Ver lista de contactos">

        </form>
    </div>



</body>

</html>

<?php

include("Contacto.php");


?>


<?php
/*
Esta es la logica de la aplicación usando los metodos de Contacto.php

*/
if (isset($_POST["submit"])) {

    $nuevoNombre = trim($_POST['nombre']);
    $nuevoNumero = trim($_POST['numero']);

    if ($nuevoNombre == "") {
        echo "Inserta un nombre";
    } else {
        if ($nuevoNumero == "") {
            $contacto = new Contacto();
            $contacto->delete();
            header("Refresh:0");
        } else {
            $nuevoContacto = new Contacto();
            $nuevoContacto->nombre = $nuevoNombre;
            $nuevoContacto->numero = $nuevoNumero;
            $nuevoContacto->update();
            header("Refresh:0");
        }
    }
};


?>