<?php
require "conexion.php";

$id = $_GET['id'];

  $borrar ="DELETE FROM comentarios WHERE ID='$id'";

  $result = mysqli_query($conectar, $borrar);
  
  if($result){
    echo '
    <script>
      alert("Se borraron los datos correctamente");
      location.href="../panelComentarios.php";
    </script>
    ';
  }else{
    echo '
    <script>
      alert("No se borraron los datos ");
      location.href="ver.php";
    </script>
    ';
  }

?>