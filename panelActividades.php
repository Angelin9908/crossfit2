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
  <title>Login</title>
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
  <h2>Administrar Actividades</h2>
  <div class="tablaAct">
  
    <table>
      <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Foto</th>
        <th class="anchoeliminar">Eliminar</th>
      </tr>

      <?php
  include "acciones_php/conexion.php";
  $todos = "SELECT * FROM actividades";
  $resulta = mysqli_query($conectar, $todos);
  
  while($dato = mysqli_fetch_assoc($resulta))
  {
    
  ?>
      <tr>
        <td class="panelTD"><?php echo $dato['nombre']; ?></td>
        <td class="panelTD td_descr"><?php echo $dato['descripcion']; ?></td>
        <td class="panelTD fotoperfil"><img src="<?php echo substr($dato['foto'],3,strlen($dato['foto'])); ?>" alt=""></td>
        <td class="panelTD"><a href="#" onClick="validar('acciones_php/eliminarActividades.php?id=<?php echo $dato["ID"]; ?>')"> <img src="recursos/img/iconobasura.jpg" alt=""></a></td>
      </tr>
      <?php
        }
        mysqli_free_result($resulta);
  ?> 
    </table>
  </div>
  <div class="registrarAct">
    <form action="acciones_php/guardarActividades.php" method="POST" enctype="multipart/form-data">
      <h3>Añadir Actividad</h3>
      
      <input type="text" name="nombre_act" id="" required placeholder="Nombre de la Actividad">
      <input type="text" name="descr_act" id="" required placeholder="Descripción de la Actividad">
      <input type="file" name="imagen_act" id="">      
      <input type="submit" value="Guardar">

    </form>
  </div>
</div>
<script>
    function validar(url)
    {
      var eliminar = confirm("¿Deseas ELIMINAR esta actividad?")
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