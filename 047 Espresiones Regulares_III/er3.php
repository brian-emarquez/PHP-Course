<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>New document</title>
</head>
<body>
	<form method="get" action="er3.php">
		<p>Prueba Profesor Alumno, docente </p>
		<input type="text" placeholder="Ingrese su rol" name="rol" autocomplete="off" />
		<input type="submit" value="Enviar" />
	</form>
	<?php 
	if( isset( $_GET['rol'] ) ){
		$r = $_GET['rol'];
		$er = "/(profesora|profesor|alumn[oa]+s|docente)/i";
		
		$rta = preg_match($er, $r, $c);
        var_dump($c);
	}
	?>
</body>
</html>