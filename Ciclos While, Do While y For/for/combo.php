<!DOCTYPE HTML>
<html lang="es-AR">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<select>
		<?php 
		for( $i = 1; $i <= 31; $i++ ){
			echo "<option>$i</option>";
		}
		?>
	</select>	
	<select>
		<?php 
		for( $i = 1; $i <= 12; $i++ ){
			echo "<option>$i</option>";
		}
		?>
	</select>	
	<select>
		<?php 
		for( $i = 2018; $i >= 1950; $i-- ){
			echo "<option>$i</option>";
		}
		?>
	</select>
</body>
</html>