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
  <title>Panel Horarios</title>
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
  <h2>Administrar Horarios</h2>
  <div class="tablahorario">
  
    <table>
      <tr>
        <th>Dia</th>
        <th>Actividad</th>
        <th>Hora inicial</th>
        <th>Hora final</th>
        <th class="anchoeliminar">Eliminar</th>
      </tr>
      <?php
  include "acciones_php/conexion.php";
  $todos = "SELECT * FROM horario";
  $resulta = mysqli_query($conectar, $todos);
  
  while($dato = mysqli_fetch_assoc($resulta))
  {
    
  ?>
      <tr>
        <td class="panelTD"><?php echo $dato['dia']; ?></td>
        <td class="panelTD"><?php echo $dato['actividad']; ?></td>
        <td class="panelTD">
          <?php 
          if(($dato['hr_inicial']== 9) && ($dato['min_inicial'] >= 0 && $dato['min_inicial'] <= 9))
        {
          echo "0".$dato['hr_inicial'];?>:<?php echo "0".$dato['min_inicial'];
        }
        else{
          if(($dato['hr_inicial']> 9) && ($dato['min_inicial'] >= 0 && $dato['min_inicial'] <= 9)){
            echo $dato['hr_inicial']; ?>:<?php echo "0".$dato['min_inicial'];
          }else{
            if(($dato['hr_inicial']== 9) && ($dato['min_inicial'] >9)){
              echo "0".$dato['hr_inicial']; ?>:<?php echo $dato['min_inicial'];
            }else{
              echo $dato['hr_inicial']; ?>:<?php echo $dato['min_inicial'];
            }
          }
            }?></td>
        <td class="panelTD">
        <?php 
          if(($dato['hr_final']== 9) && ($dato['min_final'] >= 0 && $dato['min_final'] <= 9))
        {
          echo "0".$dato['hr_final']; ?>:<?php echo "0".$dato['min_final'];
        }
        else{
          if(($dato['hr_final']> 9) && ($dato['min_final'] >= 0 && $dato['min_final'] <= 9)){
            echo $dato['hr_final']; ?>:<?php echo "0".$dato['min_final'];
          }else{
            echo $dato['hr_final']; ?>:<?php echo $dato['min_final'];
          }
            }?></td>
        <td class="panelTD"><a href="#" onClick="validar('acciones_php/eliminarHorario.php?id=<?php echo $dato["ID"]; ?>')"> <img src="recursos/img/iconobasura.jpg" alt=""></a></td>
      </tr>
      <?php
        }
        mysqli_free_result($resulta);
  ?> 
    </table>
  </div>
  <div class="registrarhorario">
    <form action="acciones_php/guardarhorario.php" method="POST">
      <h3>Añadir Horario</h3>
      <select name="dia" id="">
        <option value="Lunes">Lunes</option>
        <option value="Martes">Martes</option>
        <option value="Miercoles">Miercoles</option>
        <option value="Jueves">Jueves</option>
        <option value="Viernes">Viernes</option>
        <option value="Sábado">Sábado</option>
        <option value="Domingo">Domingo</option>
      </select>
      <input type="text" name="nombre_act" id="" required placeholder="Actividad">
      <input type="number" name="hr_ini" id="" required placeholder="Hora Inicial" min="09" max="21">
      <input type="number" name="min_ini" id="" required placeholder="Minutos" min="00" max="59">
      <input type="number" name="hr_fin" id="" required placeholder="Hora Final" min="09" max="21">
      <input type="number" name="min_fin" id="" required placeholder="Minutos" min="00" max="59">
      <input type="submit" value="Guardar">
    </form>
  </div>
</div>
<script>
    function validar(url)
    {
      var eliminar = confirm("¿Deseas ELIMINAR este horario?")
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