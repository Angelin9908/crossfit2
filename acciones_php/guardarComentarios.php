<?php

require "conexion.php";

$nombre=$_POST['cliente'];
$telefono=$_POST['numero'];
$correo=$_POST['correo'];
$comentario=$_POST['comentario'];


$insertar="INSERT INTO comentarios (nombre,telefono,correo,comentario) VALUES ('$nombre','$telefono','$correo','$comentario')";

$query=mysqli_query($conectar,$insertar);
if($query){
  echo '
    <script>
      alert("Se guardaron los datos correctamente");
      location.href="../contactanos.php";
    </script>
    ';
} else{
  echo '
  <script>
    alert("No se guardaron los datos");
    window.history.go(-1);
  </script>
  ';
} 
?>