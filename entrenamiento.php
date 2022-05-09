<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="recursos/css/style.css">
  <title>Entrenamientos</title>
</head>
<body>
<?php
include "includes_php/head.php";
?>
<div class="contenedor4 ">
  <div class="cont4 ancho">
    <h2>Actividades</h2>
    <?php
  include "acciones_php/conexion.php";
  $todos = "SELECT * FROM actividades";
  $resulta = mysqli_query($conectar, $todos);
  
  while($dato = mysqli_fetch_assoc($resulta))
  {
    
  ?>
  <div class="contenedor_ins2 color">
    <table>
    <tr>
        <td class="act act2"><?php echo $dato['nombre']; ?></td>
      </tr>
      <tr>
        <td><img src="<?php echo substr($dato['foto'],3,strlen($dato['foto'])); ?>" alt=""></td>
      </tr>
      
      <tr>
        <td class="act act3"><?php echo $dato['descripcion']; ?></td>
      </tr>
    </table>
  </div>
  <?php
        }
        mysqli_free_result($resulta);
  ?> 
  </div>
  
</div>
<div class="contenedor5">
  <div class="cont5 ancho">
    <h2>Instructores</h2>
    <?php
  include "acciones_php/conexion.php";
  $todos = "SELECT * FROM instructores";
  $resulta = mysqli_query($conectar, $todos);
  
  while($dato = mysqli_fetch_assoc($resulta))
  {
    
  ?>
  <div class="contenedor_ins">
    <table>
      <tr>
        <td><img src="<?php echo substr($dato['foto'],3,strlen($dato['foto'])); ?>" alt=""></td>
      </tr>
      <tr>
        <td class="entrenador entrenador2"><?php echo $dato['nombre']; ?></td>
      </tr>
      <tr>
        <td class="entrenador"><?php echo $dato['edad']." años"; ?></td>
      </tr>
      <tr>
        <td class="entrenador"><?php echo $dato['descripcion']; ?></td>
      </tr>
    </table>
  </div>
  <?php
        }
        mysqli_free_result($resulta);
  ?> 
  </div>
</div>
<div class="contenedorejercicios">
    <div class="cont5 ancho">
    <h2>Tipos de ejercicios</h2>
    <table class="tabla_ejercicios">
      <tr>
        <th class="titulo-ejer">Tipo</th>
        <th class="titulo-ejer">Motivo de práctica</th>
        <th class="titulo-ejer">Ejemplos</th>
      </tr>
      <tr>
        <td class="gris">Metabólicos</td>
        <td>Aumenta la competencia de los tres sistemas de obtención de energía: aeróbico, anaeróbico láctico y aláctico.</td>
        <td>Correr, remar, en cortas y largas distancias, de forma interválica o contínua.</td>
      </tr>
      <tr>
        <td class="gris">Gimnásticos</td>
        <td>Son movimientos únicos para la mejora de la fuerza en relación al propio peso corporal. También desarrollan la coordinación, la agilidad, el equilibrio, la precisión y la flexibilidad, convirtiendo estos movimientos en imprescindibles para aumentar la competencia física de la persona.</td>
        <td>Dominadas, sentadillas, flexiones, fondos en las anillas, muscle-ups, trepar la cuerda, extensiones lumbares…</td>
        
      </tr>
      <tr>
        <td class="gris">Levantamiento de pesas</td>
        <td>Estos levantamientos requieren la activación de muchas fibras musculares en muy poco tiempo generando una elevada potencia. Tienen una capacidad extraordinaria para desarrollar fuerza, masa muscular, potencia, velocidad y coordinación</td>
        <td>Clean&jerk, snatch, deadlift, press banca, push press, back squat… </td>
        
      </tr>
    </table>
    </div>
  </div>
<?php
include "includes_php/foot.php";
?>
</body>
</html>