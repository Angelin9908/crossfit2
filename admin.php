<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="recursos/css/style.css">
  <title>Login</title>
</head>
<body>
<?php
include "includes_php/head2.php";
?>
<div class="contenedorlogin">
  <div class="contlogin ancho">
    <h2>Bienvenido</h2>
    <form action="acciones_php/iniciar.php" method="POST">
      <input type="text" name="user" id="" placeholder="USUARIO" required>
      <input type="password" name="password" id="" placeholder="CONTRASEÑA" required>
      <br>
      <input type="submit" value="Iniciar sesión">
    </form>
  </div>
</div>
<?php
include "includes_php/foot.php";
?>
</body>
</html>