<?php
require "acciones_php/seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="recursos/css/style.css">
  <title>Comentarios</title>
</head>
<body>
<?php
include "includes_php/head2.php";
?>

<div class="contenedorpanel">
<div class="menupanel">
  <?php
    include "includes_php/panelmenu.php";
  ?>
</div>

<div class="contenedorinicio ancho">
  <h2>Administrar Comentarios</h2>
  <div class="tablaplanes">
  
    <table>
      <tr>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Comentarios o dudas</th>
        <th class="anchoeliminar">Eliminar</th>
      </tr>
      <?php
  include "acciones_php/conexion.php";
  $todos = "SELECT * FROM comentarios";
  $resulta = mysqli_query($conectar, $todos);
  
  while($dato = mysqli_fetch_assoc($resulta))
  {
    
  ?>
      <tr>
        <td class="panelTD td_text"> <?php echo $dato['nombre']; ?> </td>
        <td class="panelTD td_text"> <?php echo $dato['telefono']; ?> </td>
        <td class="panelTD"> <?php echo $dato['correo']; ?></td>
        <td class="panelTD td_descr"> <?php echo $dato['comentario']; ?> </td>
        <td class="panelTD"><a href="#" onClick="validar('acciones_php/eliminarComentarios.php?id=<?php echo $dato["ID"]; ?>')"> <img src="recursos/img/iconobasura.jpg" alt=""></a></td>
      </tr>
      <?php
        }
        mysqli_free_result($resulta);
  ?> 
    </table>
  </div>
  
<script>
    function validar(url)
    {
      var eliminar = confirm("¿Deseas ELIMINAR este comentario?")
        if(eliminar == true){
          window.location=url;
        }
    }
    </script>
</div>
<?php
include "includes_php/foot.php";
?>
</body>
</html>