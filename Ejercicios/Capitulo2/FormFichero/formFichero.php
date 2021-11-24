<html>

<body>

  <form enctype="multipart/form-data" action="formFichero.php" method="POST">
    Enviar este fichero: <input name="fichero_usuario" type="file" value=" "/>
    <input type="submit" value="Enviar fichero" />
  </form>

  <?php
  $dir_subida = 'C:\Users\Alumnat.INFORMAT\Desktop\upload';
  $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);


  if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
  } else {
    echo "¡Posible ataque de subida de ficheros!\n";
  }

  echo 'Más información de depuración:';
  print_r($_FILES);

  

  ?>
</body>

</html>