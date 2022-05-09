<?php

require "conexion.php";

$rutatemporal=$_FILES['imagen_ins']['tmp_name'];
$rutaservidor='../recursos/img/subidas';
$pesoimagen=$_FILES['imagen_ins']['size'];
$nombreimagen=$_FILES['imagen_ins']['name'];
$error=$_FILES['imagen_ins']['error'];

date_default_timezone_set('UTC');
$nombreunico=date('Y-m-d-h-i-s')."-".$nombreimagen;

$rutadestino=$rutaservidor."/".$nombreunico;


if($pesoimagen > 900000){
  echo '
  <script>
    alert("Sube una foto menor a 1 MB");
    window.history.go(-1);
  </script>
  ';
  exit;
}
move_uploaded_file($rutatemporal,$rutadestino);

$nombre=$_POST['nombre_ins'];
$edad=$_POST['edad_ins'];
$descripcion=$_POST['descripcion_ins'];

$insertar="INSERT INTO instructores (nombre,edad,foto,descripcion) VALUES ('$nombre','$edad','$rutadestino','$descripcion')";

$query=mysqli_query($conectar,$insertar);
if($query){
  echo '
    <script>
      alert("Se guardaron los datos correctamente");
      location.href="../panelInstructor.php";
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