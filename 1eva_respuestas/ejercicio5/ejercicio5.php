<?php 
if (isset($_GET["submit"])) {
    
    $name = $_GET["name"];
    $surname = $_GET["surname"];
    $birthDate = $_GET["birthDate"];
    echo "Name = ".  $name . "<br>";
    echo "Surname = ". $surname."<br>";
    echo "Birth Date = ". $birthDate."<br> <br>";
    echo "Archivo1 = " . $_GET["archivo1"]."<br>"."Tamaño = ". filesize($_GET["archivo1"])."<br>";
    echo "Archivo2 = " . $_GET["archivo2"]."<br>"."Tamaño = ". filesize($_GET["archivo2"])."<br>";


    }
    foreach ($_FILES as $file) {
        
        if ($file['error'] == 0) {
            if (!move_uploaded_file($file['tmp_name'], 'archivos/' . $file['name'])) {
                echo "Falló";
            }
        } else {
            switch ($file['error']) {
                case 1: break;
                case 2: break;
                case 4: echo "No se ha subido archivo en el selector " . $file;
                    break;
                case 6: break;
                case 7: break;
                case 8: break;
                default :break;
            }
            echo "Hubo un error de código " . $file['error'] . " al subir el fichero";
        }
    }




//Solo funciona la subida si esta en method post pero si está en post no coge los valores del resto de
//atributos y no supe como arreglarlo
?>
<html>
    
    <form  enctype = "multipart/form-data">
    <label for="name">Nombre</label>
    <input type="text" name="name" value=""><br>
    <label for="surname">Apellido</label>
    <input type="text" name="surname" value=""><br>
    <label for="birthDate">Nombre</label>
    <input type="date" name="birthDate" value=""><br>
    <label for="archivo1">Archivo1</label>
    <input type="file" name="archivo1"><br>
    <label for="archivo2">Archivo2</label>
    <input type="file" name="archivo2"><br>
    


    <input type="submit" value="Send" name="submit">
    </form>
</html>