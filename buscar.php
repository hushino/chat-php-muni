<!DOCTYPE html>
<html lang="es">

<?php
require "header.php";
?>

<body>
  <?php
  require "conexion.php";
  $titular = $_POST['buscar'];
  ?>
  <div class="container">
    <?php
    echo $titular;
    ?>
  </div>

</body>

</html>