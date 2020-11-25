<?php 
function obtener_mes( $numero ){
	if( $numero == 1 ) return 'Enero';
	if( $numero == 2 ) return 'Febrero';
	if( $numero == 3 ) return 'Marzo';
	if( $numero == 4 ) return 'Abril';
	if( $numero == 5 ) return 'Mayo';
	if( $numero == 6 ) return 'Junio';
	if( $numero == 7 ) return 'Julio';
	if( $numero == 8 ) return 'Agosto';
	if( $numero == 9 ) return 'Septiembre';
	if( $numero == 10 ) return 'Octubre';
	if( $numero == 11 ) return 'Noviembre';
	if( $numero == 12 ) return 'Diciembre';
}

function generar_fecha( $dia, $mes, $anio, $formato = true, $espaniol = false ){
	if( $formato == false ){
		return "$dia/$mes";
	}else{
		if( $espaniol == true ){
			$nombre_mes = obtener_mes( $mes );
			return "$dia de $nombre_mes de $anio";
		}else{
			return "$dia del $mes de $anio";
		}
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
		<h1>BIT Blog</h1>
		
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
		<article>
			<h1>Título del Post</h1>
		
			<img src="https://placebear.com/1000/400" alt="Titulo del Post" />
		
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae suscipit ex, nec consequat nisl. Aliquam eleifend eros sapien, nec venenatis tortor semper in. Sed sed ornare odio, sit amet ullamcorper lectus. Proin bibendum laoreet lorem id lobortis. Maecenas auctor erat sed magna aliquam, in fringilla magna faucibus. Suspendisse convallis est augue, nec pretium arcu vulputate sed. Nulla convallis sapien laoreet posuere aliquam.</p>
			<p>Nulla pretium purus in nibh elementum tristique. Ut non neque in odio sagittis ullamcorper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed egestas condimentum neque quis ultricies. Fusce ac pulvinar orci. Nam sollicitudin malesuada blandit. Phasellus dui justo, porta eget mi sed, vulputate pulvinar lacus. Aliquam id tellus at lorem feugiat pellentesque ac sit amet sem. Sed ac eros tincidunt, malesuada tellus id, faucibus est.</p>
			<p>Morbi a urna aliquet, rhoncus justo quis, cursus dui. Nam et leo suscipit, tempor arcu eu, convallis lectus. Quisque vehicula dictum enim, vitae fringilla tellus ullamcorper et. In sit amet erat tellus. Cras hendrerit, risus sit amet porttitor dapibus, lectus lorem tristique urna, a viverra quam lorem non arcu. In id ex nec elit dignissim luctus vitae vel elit. Vivamus consequat purus vel sollicitudin sollicitudin. Pellentesque nisi mi, aliquam sed posuere et, faucibus in tellus. Nulla feugiat, augue sit amet tristique tristique, ligula dui mollis sapien, ac egestas leo felis a ante. Maecenas eu nisi accumsan, finibus dolor nec, hendrerit justo. Duis quis euismod tellus. Aliquam et dictum leo, quis sagittis mauris. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
			<p>Proin ultrices rhoncus justo quis consequat. Pellentesque in ultricies ex. Nunc sed sapien placerat, faucibus ante non, pulvinar est. Suspendisse potenti. Sed porttitor molestie diam, quis aliquet ligula aliquet in. Phasellus vestibulum elit sit amet auctor pellentesque. Sed consequat est sit amet quam vestibulum, at consectetur leo tincidunt. Aliquam nulla orci, molestie eu elit nec, porta auctor lectus. Nunc sed urna nec ligula tempor dictum porta id quam. Phasellus vehicula blandit nisl sed efficitur. Nulla feugiat, justo efficitur lacinia pretium, mauris nisi blandit dui, sed finibus turpis erat molestie enim. Vivamus interdum vel nibh sollicitudin semper.</p>
			<p>Nullam justo turpis, iaculis ut gravida vitae, venenatis eget mauris. Nam tristique ligula ipsum, eget rhoncus orci tristique laoreet. Nulla eros neque, eleifend mollis augue vitae, rutrum condimentum nisl. Vestibulum eu metus eu mi pellentesque semper a vitae erat. Curabitur congue ac dui ac tincidunt. Ut consequat viverra porttitor. Praesent malesuada lectus aliquet accumsan condimentum. Aliquam viverra magna eget turpis feugiat semper tempor in nisl. Phasellus tellus diam, suscipit sit amet est vel, ornare dapibus velit.</p>
		</article>
		
		<section id="comments">
			<h2>Comentarios</h2>
			
			<ul class="row">
				<li>
					<div>
						<h3>Usuario 1</h3>
						<small>El <?php echo generar_fecha( 10, 10, 2020, true, true ); ?> a las 11:00hs</small>
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
	</main>
	<aside>
		<form action="" method="get">
			<h2>Buscador</h2>
			<div><input type="search" id="buscar" name="buscar" /></div>
			<div><input type="submit" value="buscar" /></div>
		</form>

		<!-- esto se muestra si el usuario no está logueado -->
		<form action="" method="post">
			<h2>Login</h2>
			<div><input type="text" placeholder="usuario" name="usuario" id="usuario" /></div>
			<div><input type="password" placeholder="clave" name="clave" id="clave" /></div>
			<div class="center"><a href="registro.html">Registro</a><a href="recuperar.html">Olvidé mi contraseña</a></div>
			<div><input type="submit" value="Ingresar" /></div>
		</form>
		<!-- esto se muestra si el usuario está logueado -->
		<div>
			<h2>Nombre usuario</h2>
			<img src="recursos/img/fill-murray.jpg" alt="Avatar de Nombre usuario" />
			<div class="center">
				<a href="perfil.html">Editar perfil</a>
				<a href="#">Cerrar sesión</a>
			</div>
		</div>
		
	</aside>
	
</body>
</html>