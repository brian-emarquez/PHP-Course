<!DOCTYPE HTML>
<html lang="es-AR">
<head>
	<meta charset="UTF-8">
	<title>Calendario</title>
	<style type="text/css">

	table{ width: 350px; border-collapse: collapse; }
	td, th{ border: 1px solid black; }
	.feriado{ background: pink; color: darkred; }
	
	</style>
</head>
<body>
	<table>
		<tr>
			<th>DOM</th>
			<th>LUN</th>
			<th>MAR</th>
			<th>MIE</th>
			<th>JUE</th>
			<th>VIE</th>
			<th>SAB</th>
		</tr>
		<tr>
			<?php 
			for( $i = 1; $i <= 31; $i++ ):
				echo "<td";
				
				switch( $i ):
					case 6:
					case 25:
					case 29:
						echo " class='feriado'";
				endswitch;
				
				echo ">$i</td>";
				if( $i % 7 == 0 ): # eb cada multiplo de 7 se termina y inicia
					echo "</tr><tr>";
				endif;
				
			endfor;
			?>
		</tr>
	</table>
</body>
</html>