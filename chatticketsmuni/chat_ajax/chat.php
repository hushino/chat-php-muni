<?php
include "db.php";
$idticket = $_GET["id"];
///consultamos a la base
$consulta = "SELECT * FROM chat WHERE idticket=$idticket ORDER BY id DESC";
$ejecutar = $conexion->prepare($consulta);
$ejecutar->execute();
while ($fila = $ejecutar->fetch(PDO::FETCH_ASSOC)) :
?>
	<div id="datos-chat">
		<span style="color: #1C62C4;"><?php echo $fila['nombre']; ?></span>
		<span style="color: #848484;"><?php echo $fila['mensaje']; ?></span>
		<span style="float: right;"><?php echo formatearFecha($fila['fecha']); ?></span>
	</div>

<?php endwhile; ?>