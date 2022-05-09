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
  <title>Panel Instructores</title>
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
  <h2>Administrar Instructores</h2>
  <div class="tablainstructor">
  
    <table>
      <tr>
        <th>Nombre</th>
        <th class="anchoedad">Edad</th>
        <th>Descripción</th>
        <th>Imagen</th>
        <th class="anchoeliminar">Eliminar</th>
      </tr>
      <?php
  include "acciones_php/conexion.php";
  $todos = "SELECT * FROM instructores";
  $resulta = mysqli_query($conectar, $todos);
  
  while($dato = mysqli_fetch_assoc($resulta))
  {
    
  ?>
      <tr>
        <td class="panelTD"><?php echo $dato['nombre']; ?></td>
        <td class="panelTD"><?php echo $dato['edad']; ?></td>
        <td class="panelTD td_descr"><?php echo $dato['descripcion']; ?></td>


        <td class="panelTD fotoperfil"><img src="<?php echo substr($dato['foto'],3,strlen($dato['foto']));?>" alt=""></td>


        <td class="panelTD"><a href="#" onClick="validar('acciones_php/eliminarInstructores.php?id=<?php echo $dato["ID"]; ?>')"> <img src="recursos/img/iconobasura.jpg" alt=""></a></td>
      </tr>
      <?php
        }
        mysqli_free_result($resulta);
  ?> 
    </table>
  </div>
  <div class="registrarinstructor">
    <form action="acciones_php/guardarinstructor.php" method="POST" enctype="multipart/form-data">
      <h3>Añadir instructores</h3>
      <input type="text" name="nombre_ins" id="" required placeholder="Nombre completo">
      <input type="number" name="edad_ins" id="" required placeholder="Edad" min="18" max="80">
      <textarea name="descripcion_ins" id="" required placeholder="Agregar descripción del instructor"></textarea>
      <input type="file" name="imagen_ins" id="" required>
      <input type="submit" value="Guardar">
    </form>
  </div>
</div>
<script>
    function validar(url)
    {
      var eliminar = confirm("¿Deseas ELIMINAR a este instructor?")
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