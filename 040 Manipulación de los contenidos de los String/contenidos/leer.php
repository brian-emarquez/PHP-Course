<?php 
$carpeta = $_GET['que'];
$ruta = "extras/textos/blog/$carpeta";

$titulo = file_get_contents( "$ruta/titulo.txt" );
$contenido = file_get_contents( "$ruta/contenido.txt" );
if( file_exists( "$ruta/foto.jpg" ) ){
	$foto = "<img src='$ruta/foto.jpg' width='900' alt='$titulo' />";
}else{
	$foto = '';
}


include_once( 'setup/funciones.php' ); //Si este archivo ya se incluyó antes, se va a omitir en esta carga
?>

		<article>
			<h1><?php echo $titulo; ?></h1>
		
			<?php echo $foto; ?>
		
			<p><?php echo $contenido; ?></p>
		</article>
		
		<section id="comments">
			<h2>Comentarios</h2>
			
			<ul class="row">
				<li>
					<div>
						<h3>Usuario 1</h3>
						<small>El <?php echo generar_fecha( 27, 9, 2018, true, true ); ?> a las 11:00hs</small>
					</div>
					<img src="uploads/avatar-thumbs/000_default.jpg" alt="Usuario" />
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae suscipit ex, nec consequat nisl. Aliquam eleifend eros sapien, nec venenatis tortor semper in.<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae suscipit ex, nec consequat nisl. Aliquam eleifend eros sapien, nec venenatis tortor semper in.</p>
				</li>
				<li>
					<div>
						<h3>Usuario 2</h3>
						<small>El 27/09/2018 a las 11:00hs</small>
					</div>
					<img src="uploads/avatar-thumbs/000_masculino.jpg" alt="Usuario" />
					<p>Nulla pretium purus in nibh elementum tristique. Ut non neque in odio sagittis ullamcorper. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br />
					Nulla pretium purus in nibh elementum tristique. Ut non neque in odio sagittis ullamcorper. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
				</li>
				<li>
					<div>
						<h3>Usuario 3</h3>
						<small>El 27/09/2018 a las 11:00hs</small>
						<a href="">delete</a>
					</div>
					<img src="uploads/avatar-thumbs/000_femenino.jpg" alt="Usuario" />
					<p>Morbi a urna aliquet, rhoncus justo quis, cursus dui. Nam et leo suscipit, tempor arcu eu, convallis lectus. Quisque vehicula dictum enim, vitae fringilla tellus ullamcorper et. <br />
					Morbi a urna aliquet, rhoncus justo quis, cursus dui. Nam et leo suscipit, tempor arcu eu, convallis lectus. Quisque vehicula dictum enim, vitae fringilla tellus ullamcorper et.<br />
					Morbi a urna aliquet, rhoncus justo quis, cursus dui. Nam et leo suscipit, tempor arcu eu, convallis lectus. Quisque vehicula dictum enim, vitae fringilla tellus ullamcorper et. </p>
				</li>
			</ul>
			
			<h2>Deja tu comentario</h3>
			<form>
				<textarea rows="6" cols="70"></textarea>
				<input type="submit" value="Comentar" />
			</form>
		</section>
