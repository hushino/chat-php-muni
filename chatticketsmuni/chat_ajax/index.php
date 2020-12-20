<?php
include "db.php";
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html>

<head>
	<title>CHAT CON PHP, MYSQL Y AJAX</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">

	<script type="text/javascript">
		function ajax() {
			var req = new XMLHttpRequest();

			req.onreadystatechange = function() {
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}

			req.open('GET', 'chat.php?id=<?php echo $id; ?>', true);
			req.send();
		}

		//linea que hace que se refreseque la pagina cada segundo
		setInterval(function() {
			ajax();
		}, 1000);
	</script>
</head>

<body onload="ajax();">

	<div id="contenedor">
		<div id="caja-chat">
			<div id="chat"></div>
		</div>

		<form method="POST" action="index.php?id=<?php echo $id; ?>">
			<input type="number" name="idticket" placeholder="idticket" value="<?php echo $id; ?>" style="visibility: hidden;">
			<input type="text" name="nombre" placeholder="Ingresa tu nombre">
			<textarea name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
			<input type="submit" name="enviar" value="Enviar">
		</form>

		<?php
		if (isset($_POST['enviar'])) {

			$nombre = $_POST['nombre'];
			$mensaje = $_POST['mensaje'];
			$idticket = $_POST['idticket'];


			$consulta = "INSERT INTO `chat` (nombre, mensaje, idticket) VALUES ('$nombre', '$mensaje','$idticket')";

			$ejecutar = $conexion->query($consulta);

			if ($ejecutar) {
				echo "<embed loop='false' src='beep.mp3' hidden='true' autoplay='true'>";
			}
		}

		?>
	</div>

</body>

</html>