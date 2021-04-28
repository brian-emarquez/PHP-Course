<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>New document</title>
</head>
<body>
	<form method="get" action="er2.php">
		<p>Registre su automovil ingresando su patente (AAA000 / AA000AA)</p>
		<input type="text" placeholder="Numero de patente" name="patente" autocomplete="off" />
		<input type="submit" value="Enviar" />
	</form>
	<?php 
	if( isset( $_GET['patente'] ) ){
		$p = $_GET['patente'];
		$er = "/^([a-z]{3}[0-9]{3}|[a-z]{2}([0-9]{3})[a-z]{2})$/i";
		
		echo "Patente recibida: $p<br />";
		$rta = preg_match( $er, $p, $xq );
		if( $rta ){
			echo "La patente $p coincide con la expresión regular $er<br />";
			echo "motivos:";
			var_dump($xq);
		}else{
			echo "La patente $p <br />NO coincide con el formato esperado $er<br />";
			
		}
		
	}
	?>
</body>
</html>