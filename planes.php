<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="recursos/css/style.css">
  <title>Planes y horarios</title>
</head>
<body>
<?php
include "includes_php/head.php";
?>
<div class="contenedor4">
  <div class="cont4 ancho">
    <h2>Planes</h2>
    <?php
  include "acciones_php/conexion.php";
  $todos = "SELECT * FROM planes ORDER BY precio ASC";
  $resulta = mysqli_query($conectar, $todos);
  
  while($dato = mysqli_fetch_assoc($resulta))
  {
    
  ?>
    <div class="contenedor_plan">
      <h3><?php echo $dato['nombre']; ?></h3>
      <p class="plan_desc"><?php echo $dato['descripcion']; ?></p>
      <p class="plan_tiempo"><?php echo $dato['tiempo']; ?></p>
      <p class="plan_precio"><?php echo "$".$dato['precio'].".00"; ?></p>
      <a href="contactanos.php">Suscribirse</a>
    </div>
  
    
  
    <?php
        }
        mysqli_free_result($resulta);
  ?> 
  
  </div>
  
</div>
<div class="contenedor5">
  <div class="cont5 ancho">
    <h2>Horarios</h2>
    
  <div class="contenedor_horario ancho">
    <div class="hora">
    <table>
    <tr>
      <th colspan="3" class="dia-horario">Lunes</th>
    </tr>
  <?php
  include "acciones_php/conexion.php";
  $todos = "SELECT * FROM horario";
  $resulta = mysqli_query($conectar, $todos);
  
  while($dato = mysqli_fetch_assoc($resulta))
  {
    if($dato['dia']=='Lunes'){
      
  ?>
      <tr>
        <td><?php echo $dato['actividad']; ?></td>
        <td class="hr">
      <?php 
          if(($dato['hr_inicial']== 9) && ($dato['min_inicial'] >= 0 && $dato['min_inicial'] <= 9))
        {
          echo "0".$dato['hr_inicial']; ?>:<?php echo "0".$dato['min_inicial']."hrs";
        }
        else{
          if(($dato['hr_inicial']> 9) && ($dato['min_inicial'] >= 0 && $dato['min_inicial'] <= 9)){
            echo $dato['hr_inicial']; ?>:<?php echo "0".$dato['min_inicial']."hrs";
          }else{
            if(($dato['hr_inicial']== 9) && ($dato['min_inicial'] >9)){
              echo "0".$dato['hr_inicial']; ?>:<?php echo $dato['min_inicial']."hrs";
            }else{
              echo $dato['hr_inicial']; ?>:<?php echo $dato['min_inicial']."hrs";
            }
            
          }
            }?></td>
          
        <td class="hr">
        <?php 
          if(($dato['hr_final']== 9) && ($dato['min_final'] >= 0  && $dato['min_final'] <= 9))
        {
          echo "0".$dato['hr_final']; ?>:<?php echo "0".$dato['min_final']."hrs";
        }
        else{
          if(($dato['hr_final']> 9) && ($dato['min_final'] >= 0 && $dato['min_final'] <= 9)){
            echo $dato['hr_final']; ?>:<?php echo "0".$dato['min_final']."hrs";
          }else{
            echo $dato['hr_final']; ?>:<?php echo $dato['min_final']."hrs";
          }
            }?></td>
      </tr>
      <?php
        }
      }
        mysqli_free_result($resulta);
  ?> 
    </table>
    </div>
  
    <!-------------------------martes--------------- -->
    <div class="hora">
    <table>
    <tr>
      <th colspan="3" class="dia-horario">Martes</th>
    </tr>
  <?php
  include "acciones_php/conexion.php";
  $todos = "SELECT * FROM horario";
  $resulta = mysqli_query($conectar, $todos);
  
  while($dato = mysqli_fetch_assoc($resulta))
  {
    if($dato['dia']=='Martes'){
      
  ?>
      <tr>
        <td><?php echo $dato['actividad']; ?></td>
        <td class="hr">
      <?php 
          if(($dato['hr_inicial']== 9) && ($dato['min_inicial'] >= 0  && $dato['min_inicial'] <= 9))
        {
          echo "0".$dato['hr_inicial']; ?>:<?php echo "0".$dato['min_inicial']."hrs";
        }
        else{
          if(($dato['hr_inicial']> 9) && ($dato['min_inicial'] >= 0 && $dato['min_inicial'] <= 9)){
            echo $dato['hr_inicial']; ?>:<?php echo "0".$dato['min_inicial']."hrs";
          }else{
            if(($dato['hr_inicial']== 9) && ($dato['min_inicial'] >9)){
              echo "0".$dato['hr_inicial']; ?>:<?php echo $dato['min_inicial']."hrs";
            }else{
              echo $dato['hr_inicial']; ?>:<?php echo $dato['min_inicial']."hrs";
            }
          }
            }?></td>
          
        <td class="hr">
        <?php 
          if(($dato['hr_final']== 9) && ($dato['min_final'] >= 0  && $dato['min_final'] <= 9))
        {
          echo "0".$dato['hr_final']; ?>:<?php echo "0".$dato['min_final']."hrs";
        }
        else{
          if(($dato['hr_final']> 9) && ($dato['min_final'] >= 0 && $dato['min_final'] <= 9)){
            echo $dato['hr_final']; ?>:<?php echo "0".$dato['min_final']."hrs";
          }else{
            echo $dato['hr_final']; ?>:<?php echo $dato['min_final']."hrs";
          }
            }?></td>
      </tr>
      <?php
        }
      }
        mysqli_free_result($resulta);
  ?> 
    </table>
    </div>
    <!-------------------------miercoles--------------- -->
    <div class="hora">
    <table>
    <tr>
      <th colspan="3" class="dia-horario">Miercoles</th>
    </tr>
  <?php
  include "acciones_php/conexion.php";
  $todos = "SELECT * FROM horario";
  $resulta = mysqli_query($conectar, $todos);
  
  while($dato = mysqli_fetch_assoc($resulta))
  {
    if($dato['dia']=='Miercoles'){
      
  ?>
      <tr>
        <td><?php echo $dato['actividad']; ?></td>
        <td class="hr">
      <?php 
          if(($dato['hr_inicial']== 9) && ($dato['min_inicial'] >= 0  && $dato['min_inicial'] <= 9))
        {
          echo "0".$dato['hr_inicial']; ?>:<?php echo "0".$dato['min_inicial']."hrs";
        }
        else{
          if(($dato['hr_inicial']> 9) && ($dato['min_inicial'] >= 0 && $dato['min_inicial'] <= 9)){
            echo $dato['hr_inicial']; ?>:<?php echo "0".$dato['min_inicial']."hrs";
          }else{
            if(($dato['hr_inicial']== 9) && ($dato['min_inicial'] >9)){
              echo "0".$dato['hr_inicial']; ?>:<?php echo $dato['min_inicial']."hrs";
            }else{
              echo $dato['hr_inicial']; ?>:<?php echo $dato['min_inicial']."hrs";
            }
          }
            }?></td>
          
        <td class="hr">
        <?php 
          if(($dato['hr_final']== 9) && ($dato['min_final'] >= 0  && $dato['min_final'] <= 9))
        {
          echo "0".$dato['hr_final']; ?>:<?php echo "0".$dato['min_final']."hrs";
        }
        else{
          if(($dato['hr_final']> 9) && ($dato['min_final'] >= 0 && $dato['min_final'] <= 9)){
            echo $dato['hr_final']; ?>:<?php echo "0".$dato['min_final']."hrs";
          }else{
            echo $dato['hr_final']; ?>:<?php echo $dato['min_final']."hrs";
          }
            }?></td>
      </tr>
      <?php
        }
      }
        mysqli_free_result($resulta);
  ?> 
    </table>
    </div>
    <!-------------------------Jueves--------------- -->
    <div class="hora">
    <table>
    <tr>
      <th colspan="3" class="dia-horario">Jueves</th>
    </tr>
  <?php
  include "acciones_php/conexion.php";
  $todos = "SELECT * FROM horario";
  $resulta = mysqli_query($conectar, $todos);
  
  while($dato = mysqli_fetch_assoc($resulta))
  {
    if($dato['dia']=='Jueves'){
      
  ?>
      <tr>
        <td><?php echo $dato['actividad']; ?></td>
        <td class="hr">
      <?php 
          if(($dato['hr_inicial']== 9) && ($dato['min_inicial'] >= 0 && $dato['min_inicial'] <= 9))
        {
          echo "0".$dato['hr_inicial']; ?>:<?php echo $dato['min_inicial']."hrs";
        }
        else{
          if(($dato['hr_inicial']> 9) && ($dato['min_inicial'] >= 0 && $dato['min_inicial'] <= 9)){
            echo $dato['hr_inicial']; ?>:<?php echo "0".$dato['min_inicial']."hrs";
          }else{
            if(($dato['hr_inicial']== 9) && ($dato['min_inicial'] >9)){
              echo "0".$dato['hr_inicial']; ?>:<?php echo $dato['min_inicial']."hrs";
            }else{
              echo $dato['hr_inicial']; ?>:<?php echo $dato['min_inicial']."hrs";
            }
          }
            }?></td>
          
        <td class="hr">
        <?php 
          if(($dato['hr_final']== 9) && ($dato['min_final'] >= 0 && $dato['min_final'] <= 9))
        {
          echo "0".$dato['hr_final']; ?>:<?php echo "0".$dato['min_final']."hrs";
        }
        else{
          if(($dato['hr_final']> 9) && ($dato['min_final'] >= 0 && $dato['min_final'] <= 9)){
            echo $dato['hr_final']; ?>:<?php echo "0".$dato['min_final']."hrs";
          }else{
            echo $dato['hr_final']; ?>:<?php echo $dato['min_final']."hrs";
          }
            }?></td>
      </tr>
      <?php
        }
      }
        mysqli_free_result($resulta);
  ?> 
    </table>
    </div>
<!-------------------------Viernes--------------- -->
<div class="hora">
    <table>
    <tr>
      <th colspan="3" class="dia-horario">Viernes</th>
    </tr>
  <?php
  include "acciones_php/conexion.php";
  $todos = "SELECT * FROM horario";
  $resulta = mysqli_query($conectar, $todos);
  
  while($dato = mysqli_fetch_assoc($resulta))
  {
    if($dato['dia']=='Viernes'){
      
  ?>
      <tr>
        <td><?php echo $dato['actividad']; ?></td>
        <td class="hr">
      <?php 
          if(($dato['hr_inicial']== 9) && ($dato['min_inicial'] >= 0 && $dato['min_inicial'] <= 9))
        {
          echo "0".$dato['hr_inicial']; ?>:<?php echo "0".$dato['min_inicial']."hrs";
        }
        else{
          if(($dato['hr_inicial']> 9) && ($dato['min_inicial'] >= 0 && $dato['min_inicial'] <= 9)){
            echo $dato['hr_inicial']; ?>:<?php echo "0".$dato['min_inicial']."hrs";
          }else{
            if(($dato['hr_inicial']== 9) && ($dato['min_inicial'] >9)){
              echo "0".$dato['hr_inicial']; ?>:<?php echo $dato['min_inicial']."hrs";
            }else{
              echo $dato['hr_inicial']; ?>:<?php echo $dato['min_inicial']."hrs";
            }
          }
            }?></td>
          
        <td class="hr">
        <?php 
          if(($dato['hr_final']== 9) && ($dato['min_final'] >= 0 && $dato['min_final'] <= 9))
        {
          echo "0".$dato['hr_final']; ?>:<?php echo "0".$dato['min_final']."hrs";
        }
        else{
          if(($dato['hr_final']> 9) && ($dato['min_final'] >= 0 && $dato['min_final'] <= 9)){
            echo $dato['hr_final']; ?>:<?php echo "0".$dato['min_final']."hrs";
          }else{
            echo $dato['hr_final']; ?>:<?php echo $dato['min_final']."hrs";
          }
            }?></td>
      </tr>
      <?php
        }
      }
        mysqli_free_result($resulta);
  ?> 
    </table>
    </div>
    <!-------------------------Sábado--------------- -->
<div class="hora">
    <table>
    <tr>
      <th colspan="3" class="dia-horario">Sábado</th>
    </tr>
  <?php
  include "acciones_php/conexion.php";
  $todos = "SELECT * FROM horario";
  $resulta = mysqli_query($conectar, $todos);
  
  while($dato = mysqli_fetch_assoc($resulta))
  {
    if($dato['dia']=='Sábado'){
      
  ?>
      <tr>
        <td><?php echo $dato['actividad']; ?></td>
        <td class="hr">
      <?php 
          if(($dato['hr_inicial']== 9) && ($dato['min_inicial'] >= 0 || $dato['min_inicial'] <= 9))
        {
          echo "0".$dato['hr_inicial']; ?>:<?php echo "0".$dato['min_inicial']."hrs";
        }
        else{
          if(($dato['hr_inicial']> 9) && ($dato['min_inicial'] >= 0 && $dato['min_inicial'] <= 9)){
            echo $dato['hr_inicial']; ?>:<?php echo "0".$dato['min_inicial']."hrs";
          }else{
            if(($dato['hr_inicial']== 9) && ($dato['min_inicial'] >9)){
              echo "0".$dato['hr_inicial']; ?>:<?php echo $dato['min_inicial']."hrs";
            }else{
              echo $dato['hr_inicial']; ?>:<?php echo $dato['min_inicial']."hrs";
            }
          }
            }?></td>
          
        <td class="hr">
        <?php 
          if(($dato['hr_final']== 9) && ($dato['min_final'] >= 0 || $dato['min_final'] <= 9))
        {
          echo "0".$dato['hr_final']; ?>:<?php echo "0".$dato['min_final']."hrs";
        }
        else{
          if(($dato['hr_final']> 9) && ($dato['min_final'] >= 0 && $dato['min_final'] <= 9)){
            echo $dato['hr_final']; ?>:<?php echo "0".$dato['min_final']."hrs";
          }else{
            echo $dato['hr_final']; ?>:<?php echo $dato['min_final']."hrs";
          }
            }?></td>
      </tr>
      <?php
        }
      }
        mysqli_free_result($resulta);
  ?> 
    </table>
    </div>
<!-------------------------Domingo--------------- -->
<div class="hora">
    <table>
    <tr>
      <th colspan="3" class="dia-horario">Domingo</th>
    </tr>
  <?php
  include "acciones_php/conexion.php";
  $todos = "SELECT * FROM horario";
  $resulta = mysqli_query($conectar, $todos);
  
  while($dato = mysqli_fetch_assoc($resulta))
  {
    if($dato['dia']=='Domingo'){
      
  ?>
      <tr>
        <td><?php echo $dato['actividad']; ?></td>
        <td class="hr">
      <?php 
          if(($dato['hr_inicial']== 9) && ($dato['min_inicial'] >= 0 || $dato['min_inicial'] <= 9))
        {
          echo "0".$dato['hr_inicial']; ?>:<?php echo "0".$dato['min_inicial']."hrs";
        }
        else{
          if(($dato['hr_inicial']> 9) && ($dato['min_inicial'] >= 0 && $dato['min_inicial'] <= 9)){
            echo $dato['hr_inicial']; ?>:<?php echo "0".$dato['min_inicial']."hrs";
          }else{
            if(($dato['hr_inicial']== 9) && ($dato['min_inicial'] >9)){
              echo "0".$dato['hr_inicial']; ?>:<?php echo $dato['min_inicial']."hrs";
            }else{
              echo $dato['hr_inicial']; ?>:<?php echo $dato['min_inicial']."hrs";
            }
          }
            }?></td>
          
        <td class="hr">
        <?php 
          if(($dato['hr_final']== 9) && ($dato['min_final'] >= 0 || $dato['min_final'] <= 9))
        {
          echo "0".$dato['hr_final']; ?>:<?php echo "0".$dato['min_final']."hrs";
        }
        else{
          if(($dato['hr_final']> 9) && ($dato['min_final'] >= 0 && $dato['min_final'] <= 9)){
            echo $dato['hr_final']; ?>:<?php echo "0".$dato['min_final']."hrs";
          }else{
            echo $dato['hr_final']; ?>:<?php echo $dato['min_final']."hrs";
          }
            }?></td>
      </tr>
      <?php
        }
      }
        mysqli_free_result($resulta);
  ?> 
    </table>
    </div>
  </div>
  
  </div>
  
</div>
<?php
include "includes_php/foot.php";
?>
</body>
</html>