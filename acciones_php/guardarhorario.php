<?php

require "conexion.php";

$dia=$_POST['dia'];
$actividad=$_POST['nombre_act'];
$hr_ini=$_POST['hr_ini'];
$min_ini=$_POST['min_ini'];
$hr_final=$_POST['hr_fin'];
$min_final=$_POST['min_fin'];

$insertar="INSERT INTO horario (dia,actividad,hr_inicial,min_inicial,hr_final,min_final) VALUES ('$dia','$actividad','$hr_ini','$min_ini','$hr_final','$min_final')";

$query=mysqli_query($conectar,$insertar);
if($query){
  echo '
    <script>
      alert("Se guardaron los datos correctamente");
      location.href="../panelHorario.php";
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