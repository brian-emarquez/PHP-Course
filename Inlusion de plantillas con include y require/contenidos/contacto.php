<h1>Contáctanos</h1>
<p class="info">Para hacernos llegar tus mensajes, completa el siguiente formulario</p>
<form action="forms/contacto.php" method="post">
	<div><span>Tu nombre </span><input type="text" name="nombre" /></div>
	<div><span>Tu Email </span><input type="email" name="correo" ></div>
	<div><span>Motivo </span><select name="motivo">
		<option>Mensaje</option>
		<option>Reclamo</option>
		<option value="info">Información</option>
	</select></div>
	<div><span>Recibir novedades </span>
		 <div class="option_group inline">
			<?php 
			for($x = 0; $x < count($categorias); $x++ ):
				echo "<label><input type='checkbox' value='$categorias[$x]' name='categoria[]' /> $categorias[$x]</label>";
			endfor;
			?>
		 </div>
	</div>
	<div><span>Mensaje </span><textarea rows="6" cols="70" name="mensaje"></textarea></div>
	<div><input class="aligned" type="submit" value="Enviar mensaje" /></div>
</form>