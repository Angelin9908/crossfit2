<?php
require "conexion.php";

$usuario = $_POST['user'];
$password = $_POST['password'];
$comparar = "SELECT * FROM usuario WHERE user='$usuario' AND pass ='$password'";


$resultado = mysqli_query($conectar, $comparar);

if(mysqli_num_rows($resultado) > 0){
  session_start();
  $_SESSION['username']=$usuario;
  $_SESSION["autenticado"]="YES";
  header("Location: ../panel.php");
}

else{
  echo '
    <script>
      alert("Usuario o Contraseña incorrectos");
      location.href="index.php?errorusuario=YES";
      window.history.go(-1);
    </script>
    ';
}
mysqli_free_result($resultado);
mysqli_close($conectar);


?>