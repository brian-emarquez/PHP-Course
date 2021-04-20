<h1>Homepage</h1>
<section id="posts">
	
	<?php 
	if (isset($_GET['buscar'])){
		$item = $_GET['buscar'];
		$item = trim($item);
		if(strlen($item) < 4){
			echo "<p class=error> La cantidad minima de caracteres debe ser 4 </p> ";
		}else{
			echo "<p class=info> Resultados para $item </p> ";
		}
	}
	?>

	<h2>Últimos Posts</h2>

	<ul>
	<?php 
	/*
		<li>
			<h3>Titulo post</h3>
			<img src="https://placebear.com/401/131" alt="Titulo post"  />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae suscipit ex, nec consequat nisl. Aliquam eleifend eros sapien, nec venenatis tortor semper in. <a href="index.php?seccion=leer">Leer completo</a></p>
			<small>Publicado el <?php echo generar_fecha( 22, 1, 2018, false ); ?> en categoria - 5 comentarios</small>
		</li>
		<li>
			<h3>Titulo post</h3>
			<img src="https://placebear.com/402/132" alt="Titulo post"  />
			<p>Nulla pretium purus in nibh elementum tristique. Ut non neque in odio sagittis ullamcorper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed egestas condimentum neque quis ultricies. Fusce ac pulvinar orci. Nam sollicitudin malesuada blandit. <a href="index.php?seccion=leer">Leer completo</a></p>
			<small>Publicado el 22/01 en categoria - 5 comentarios</small>
		</li>
		<li>
			<h3>Titulo post</h3>
			<img src="https://placebear.com/403/133" alt="Titulo post"  />
			<p>Morbi a urna aliquet, rhoncus justo quis, cursus dui. Nam et leo suscipit, tempor arcu eu, convallis lectus. Quisque vehicula dictum enim, vitae fringilla tellus ullamcorper et. In sit amet erat tellus. <a href="index.php?seccion=leer">Leer completo</a></p>
			<small>Publicado el 22/01 en categoria - 5 comentarios</small>
		</li>
		<li>
			<h3>Titulo post</h3>
			<img src="https://placebear.com/404/134" alt="Titulo post"  />
			<p>Proin ultrices rhoncus justo quis consequat. Pellentesque in ultricies ex. Nunc sed sapien placerat, faucibus ante non, pulvinar est. Suspendisse potenti. Sed porttitor molestie diam, quis aliquet ligula aliquet in. <a href="index.php?seccion=leer">Leer completo</a></p>
			<small>Publicado el 22/01 en categoria - 5 comentarios</small>
		</li>
		<li>
			<h3>Titulo post</h3>
			<img src="https://placebear.com/405/135" alt="Titulo post"  />
			<p>Nullam justo turpis, iaculis ut gravida vitae, venenatis eget mauris. Nam tristique ligula ipsum, eget rhoncus orci tristique laoreet. Nulla eros neque, eleifend mollis augue vitae, rutrum condimentum nisl. <a href="index.php?seccion=leer">Leer completo</a></p>
			<small>Publicado el 22/01 en categoria - 5 comentarios</small>
		</li>
		<li>
			<h3>Titulo post</h3>
			<img src="https://placebear.com/406/136" alt="Titulo post"  />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae suscipit ex, nec consequat nisl. Aliquam eleifend eros sapien, nec venenatis tortor semper in. Sed sed ornare odio, sit amet ullamcorper lectus. <a href="index.php?seccion=leer">Leer completo</a></p>
			<small>Publicado el 22/01 en categoria - 5 comentarios</small>
		</li>
*/ 
$base = "extras/textos/blog";
$directorio = opendir( $base );
while( $carpeta = readdir($directorio) ):

if($carpeta == '.' || $carpeta == '..'){ continue; }

$titulo = file_get_contents( "$base/$carpeta/titulo.txt" );
$preview = file_get_contents( "$base/$carpeta/preview.txt" );
$fecha = date( "d/m" , (int) $carpeta );

if( file_exists( "$base/$carpeta/foto.jpg" ) ){
	$foto = "<img src='$base/$carpeta/foto.jpg' alt='$titulo'  />";
}else{
	$foto = '';
}
//
echo <<<HTML
<li style='background: lightyellow'>
			<h3>$titulo</h3>
			$foto
			<p>$preview <a href="index.php?seccion=leer&que=$carpeta">Leer completo</a></p>
			<small>Publicado el $fecha en categoria - 5 comentarios</small>
		</li>
HTML;
endwhile;
?>
	</ul>
	
</section>
<?php 
/*
<section id="comments">
	<h2>Últimos comentarios</h2>
	
	<ul>
		<li>
			<h3>Usuario</h3>
			<img src="uploads/avatar-thumbs/000_default.jpg" alt="Usuario" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae suscipit ex, nec consequat nisl. Aliquam eleifend eros sapien, nec venenatis tortor semper in. <a href="index.php?seccion=leer">Leer completo</a></p>
		</li>
		<li>
			<h3>Usuario</h3>
			<img src="uploads/avatar-thumbs/000_masculino.jpg" alt="Usuario" />
			<p>Nulla pretium purus in nibh elementum tristique. Ut non neque in odio sagittis ullamcorper. Interdum et malesuada fames ac ante ipsum primis in faucibus. <a href="index.php?seccion=leer">Leer completo</a></p>
		</li>
		<li>
			<h3>Usuario</h3>
			<img src="uploads/avatar-thumbs/000_femenino.jpg" alt="Usuario" />
			<p>Morbi a urna aliquet, rhoncus justo quis, cursus dui. Nam et leo suscipit, tempor arcu eu, convallis lectus. Quisque vehicula dictum enim, vitae fringilla tellus ullamcorper et.  <a href="index.php?seccion=leer">Leer completo</a></p>
		</li>
	</ul>
</section>
*/
?>