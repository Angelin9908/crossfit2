<?php
session_start();
session_destroy();
echo '
      <script>
        alert("Cerrando sessión");
        location.href="../admin.php"
      </script>
      ';
?>
