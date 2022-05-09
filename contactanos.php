<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="recursos/css/style.css">
  <title>Contáctanos</title>
</head>
<body>
<?php
include "includes_php/head.php";
?>
<div class="contenedor6 ancho">
  <div class="cont6">
    <h2>Visitanos en:</h2>
    <div class="mapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1862.4196129180061!2d-89.59812958252257!3d20.999080863419092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5676cd433bf1a5%3A0xbc398868e61a6a02!2sCrossfit!5e0!3m2!1ses-419!2smx!4v1639611871285!5m2!1ses-419!2smx"></iframe>
    </div>
  </div>
  <div class="cont7">
    <h2>Para más información mandanos un mensaje:</h2>
    <div class="formcontacto">
      <form action="acciones_php/enviar_mailer.php" method="POST">
        <input type="text" name="cliente" id="" placeholder="Nombre completo*" required>
        <input type="tel" name="numero" id="" placeholder="Numero de telefono*" maxlength="10" required>
        <input type="email" name="correo" id="" placeholder="E-mail*" required>
        <textarea name="comentario" id="" placeholder="Escribe tu duda o comentario*" required></textarea>
        <input type="submit" value="Enviar">
      </form>
    </div>
  </div>
</div>
<?php
include "includes_php/foot.php";
?>
</body>
</html>