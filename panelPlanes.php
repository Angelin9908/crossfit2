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
  <title>Panel Planes</title>
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
  <h2>Administrar Planes</h2>
  <div class="tablaplanes">
  
    <table>
      <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Tiempo</th>
        <th class="anchoeliminar">Eliminar</th>
      </tr>
      <?php
  include "acciones_php/conexion.php";
  $todos = "SELECT * FROM planes";
  $resulta = mysqli_query($conectar, $todos);
  
  while($dato = mysqli_fetch_assoc($resulta))
  {
    
  ?>
      <tr>
        <td class="panelTD"><?php echo $dato['nombre']; ?></td>
        <td class="panelTD td_descr"><?php echo $dato['descripcion']; ?></td>
        <td class="panelTD"><?php echo "$ ".$dato['precio'].".00"; ?></td>
        <td class="panelTD"><?php echo $dato['tiempo']; ?></td>
        <td class="panelTD"><a href="#" onClick="validar('acciones_php/eliminarPlanes.php?id=<?php echo $dato["ID"]; ?>')"> <img src="recursos/img/iconobasura.jpg" alt=""></a></td>
      </tr>
      <?php
        }
        mysqli_free_result($resulta);
  ?> 
    </table>
  </div>
  <div class="registrarplanes">
    <form action="acciones_php/guardarplanes.php" method="POST">
      <h3>Añadir Plan</h3>
      
      <input type="text" name="nombre_plan" id="" required placeholder="Nombre del Plan">
      <input type="text" name="descr_plan" id="" required placeholder="Descripción del Plan">
      <select name="tiempo" id="">
        <option value="">Tiempo</option>
        <option value="1 mes">1 mes</option>
        <option value="2 meses">2 meses</option>
        <option value="6 meses">6 meses</option>
        <option value="1 año">1 año</option>
      </select>     
      <label for=""> MXM $ </label><input type="number" name="precio" id="" required placeholder="precio" min="600">
      
      <input type="submit" value="Guardar">

    </form>
  </div>
</div>
<script>
    function validar(url)
    {
      var eliminar = confirm("¿Deseas ELIMINAR este plan?")
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