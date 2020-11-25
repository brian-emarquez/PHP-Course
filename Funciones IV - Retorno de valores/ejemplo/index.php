<?php 
$nombre = 'German';
$apellido = 'Rodriguez';
$email = 'german@email.com';

$logueado = true;

//El ini_set modifica (setea) parámetros del php.ini.
//El display_errors en 0 apaga la muestra de errores, en 1 lo habilita
//En la línea 21, tenemos un error que se muestra o no, según este valor
ini_set('display_errors', 0 );

function generar_fecha( $dia, $mes, $anio, $formato = true ){
	if( $formato == false ){
		return "$dia/$mes";
	}else{
		return "$dia del $mes de $anio";
	}
}


?>
<!DOCTYPE HTML>
<html lang="es-AR">
<head>
	<meta charset="UTF-8" />
	<title>BIT Blog</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="recursos/css/estilos.css" />
</head>
<body>
	<header>
		<h1><?php echo BIT; //Esto mostrará el error de undefined constant, si el display_errors está en 1, pero no mostrará nada si está en 0 ?></h1>
		
		<!-- acceso a redes sociales -->
		<ul>
			<li><a href="https://www.facebook.com/user">Facebook</a></li>
			<li><a href="https://www.twitter.com/user">Twitter</a></li>
			<li><a href="https://www.instagram.com/user">Instagram</a></li>
			<li><a href="https://www.youtube.com/user">YouTube</a></li>
			<li><a href="https://plus.google.com/user">Google+</a></li>
			<li><a href="https://www.pinterest.com/user">Pinterest</a></li>
			<li><a href="https://www.tumblr.com/user">Tumblr</a></li>
			<li><a href="https://www.linkedin.com/user">Linkedin</a></li>
			<li><a href="https://www.snapchat.com/user">Snapchat</a></li>
		</ul>
	</header>
	<nav>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="categorias.html">Categorias</a>
				<ul>
					<li><a href="categoria.html">Categoria 1</a></li>
					<li><a href="categoria.html">Categoria 2</a></li>
					<li><a href="categoria.html">Categoria 3</a></li>
					<li><a href="categoria.html">Categoria X</a></li>
				</ul>
			</li>
			<li><a href="contacto.html">Contacto</a></li>
		</ul>
	</nav>
	
	<main>
		<h1>Homepage</h1>
		<section id="posts">
			<h2>Últimos Posts</h2>
			<ul>
				<li>
					<h3>Titulo post</h3>
					<img src="https://placebear.com/401/131" alt="Titulo post"  />
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae suscipit ex, nec consequat nisl. Aliquam eleifend eros sapien, nec venenatis tortor semper in. <a href="leer.php">Leer completo</a></p>
					<small>Publicado el <?php echo generar_fecha( 10, 10, 2018, false ); ?> en categoria - 5 comentarios</small>
				</li>
				<li>
					<h3>Titulo post</h3>
					<img src="https://placebear.com/402/132" alt="Titulo post"  />
					<p>Nulla pretium purus in nibh elementum tristique. Ut non neque in odio sagittis ullamcorper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed egestas condimentum neque quis ultricies. Fusce ac pulvinar orci. Nam sollicitudin malesuada blandit. <a href="leer.php">Leer completo</a></p>
					<small>Publicado el 22/01 en categoria - 5 comentarios</small>
				</li>
				<li>
					<h3>Titulo post</h3>
					<img src="https://placebear.com/403/133" alt="Titulo post"  />
					<p>Morbi a urna aliquet, rhoncus justo quis, cursus dui. Nam et leo suscipit, tempor arcu eu, convallis lectus. Quisque vehicula dictum enim, vitae fringilla tellus ullamcorper et. In sit amet erat tellus. <a href="leer.php">Leer completo</a></p>
					<small>Publicado el 22/01 en categoria - 5 comentarios</small>
				</li>
				<li>
					<h3>Titulo post</h3>
					<img src="https://placebear.com/404/134" alt="Titulo post"  />
					<p>Proin ultrices rhoncus justo quis consequat. Pellentesque in ultricies ex. Nunc sed sapien placerat, faucibus ante non, pulvinar est. Suspendisse potenti. Sed porttitor molestie diam, quis aliquet ligula aliquet in. <a href="leer.php">Leer completo</a></p>
					<small>Publicado el 22/01 en categoria - 5 comentarios</small>
				</li>
				<li>
					<h3>Titulo post</h3>
					<img src="https://placebear.com/405/135" alt="Titulo post"  />
					<p>Nullam justo turpis, iaculis ut gravida vitae, venenatis eget mauris. Nam tristique ligula ipsum, eget rhoncus orci tristique laoreet. Nulla eros neque, eleifend mollis augue vitae, rutrum condimentum nisl. <a href="leer.php">Leer completo</a></p>
					<small>Publicado el 22/01 en categoria - 5 comentarios</small>
				</li>
				<li>
					<h3>Titulo post</h3>
					<img src="https://placebear.com/406/136" alt="Titulo post"  />
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae suscipit ex, nec consequat nisl. Aliquam eleifend eros sapien, nec venenatis tortor semper in. Sed sed ornare odio, sit amet ullamcorper lectus. <a href="leer.php">Leer completo</a></p>
					<small>Publicado el 22/01 en categoria - 5 comentarios</small>
				</li>
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
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae suscipit ex, nec consequat nisl. Aliquam eleifend eros sapien, nec venenatis tortor semper in. <a href="leer.php">Leer completo</a></p>
				</li>
				<li>
					<h3>Usuario</h3>
					<img src="uploads/avatar-thumbs/000_masculino.jpg" alt="Usuario" />
					<p>Nulla pretium purus in nibh elementum tristique. Ut non neque in odio sagittis ullamcorper. Interdum et malesuada fames ac ante ipsum primis in faucibus. <a href="leer.php">Leer completo</a></p>
				</li>
				<li>
					<h3>Usuario</h3>
					<img src="uploads/avatar-thumbs/000_femenino.jpg" alt="Usuario" />
					<p>Morbi a urna aliquet, rhoncus justo quis, cursus dui. Nam et leo suscipit, tempor arcu eu, convallis lectus. Quisque vehicula dictum enim, vitae fringilla tellus ullamcorper et.  <a href="leer.php">Leer completo</a></p>
				</li>
			</ul>
		</section>
		*/
		?>
	</main>
	<aside>

		<form action="" method="get">
			<h2>Buscador</h2>
			<div><input type="search" id="buscar" name="buscar" /></div>
			<div><input type="submit" value="buscar" /></div>
		</form>


		<?php 
		if( $logueado == false ){ //Si no está logueado, mostramos el formulario de login.
		?>
		<!-- esto se muestra si el usuario no está logueado -->
		<form action="" method="post">
			<h2>Login</h2>
			<div><input type="text" placeholder="usuario" name="usuario" id="usuario" /></div>
			<div><input type="password" placeholder="clave" name="clave" id="clave" /></div>
			<div class="center"><a href="registro.html">Registro</a><a href="recuperar.html">Olvidé mi contraseña</a></div>
			<div><input type="submit" value="Ingresar" /></div>
		</form>
		<?php 
		} else {
		?>
		<!-- esto se muestra si el usuario está logueado -->
		<div>
			<?php echo '<h2>'.$nombre.' '.$apellido.'</h2>'; ?>
			<img src="recursos/img/fill-murray.jpg" alt="Avatar de Nombre usuario" />
			<p><?php echo $email; ?></p>
			<div class="center">
				<a href="perfil.html">Editar perfil</a>
				<a href="#">Cerrar sesión</a>
			</div>
		</div>
		<?php 
		} //Cierra el IF del usuario logueado.
		?>
	</aside>
	
</body>
</html>