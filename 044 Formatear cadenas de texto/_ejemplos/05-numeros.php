<?php 
$orden = 10;
$productos = array( 
	array( 'nombre' => 'Mouse optico', 'precio' => 100.45 ),
	array( 'nombre' => 'Teclado inalambrico', 'precio' => 250.45 ),
	array( 'nombre' => 'Mouse pad', 'precio' => 1050.10 ),
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Numeros</title>
</head>
<body>
	<h1>Orden de compra #<?php echo sprintf( "%010d", $orden); ?></h1>
	<h1>Orden de compra #<?php echo str_pad( $orden, 10, '0', STR_PAD_LEFT ); ?></h1>
	<table border="1">
		<tr>
			<th>NOMBRE</th>
			<th>PRECIO</th>
		</tr>
		<?php 
		$total = 0;
		foreach( $productos as $p ){
			echo '<tr>';
			/*
			echo '<td>'.$p['nombre'].'</td>';
			echo '<td>'.$p['precio'].'</td>';
			*/
			$fila = sprintf( "<td>%s</td><td>%07.2f</td>", $p['nombre'], $p['precio'] );
			echo $fila;
			echo '</tr>';
			$total += $p['precio'];
		}
		?>
		<tr>
			<td>TOTAL A PAGAR</td>
			<td><?php echo number_format( $total, 2, ',' , '.' ); ?></td>
		</tr>
	</table>
</body>
</html>