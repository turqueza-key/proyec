<?php

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$query ="INSERT INTO hojaelectronica(nombre, codigo, precio, cantidad)
         VALUES('$nombre', '$codigo', '$precio', '$cantidad')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){        
    echo'
      <script>
          alert("Usuario almacenado exitosamente");
          window.location="index.php";
      </script>
    ';
}else{
    echo'
      <script>
         alert("Intentalo de nuevo, usuario no almacenado");
         window.location="index.php";
      </script>
    ';
}

 mysqli_close($conexion);

?>