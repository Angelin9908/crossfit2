<?php

require "conexion.php";

$nombre=$_POST['nombre_plan'];
$descripcion=$_POST['descr_plan'];
$precio=$_POST['precio'];
$tiempo=$_POST['tiempo'];


$insertar="INSERT INTO planes (nombre,descripcion,precio,tiempo) VALUES ('$nombre','$descripcion','$precio','$tiempo')";

$query=mysqli_query($conectar,$insertar);
if($query){
  echo '
    <script>
      alert("Se guardaron los datos correctamente");
      location.href="../panelPlanes.php";
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