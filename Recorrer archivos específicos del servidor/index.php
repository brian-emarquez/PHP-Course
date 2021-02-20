<?php 
/*
if( isset( $_GET['seccion'] ) ){
	$seccion = $_GET['seccion'];
}else{
	$seccion = 'home';
	
} */

$seccion = isset($_GET['seccion']) ? $_GET['seccion']:'home';

include( 'setup/configuracion.php' );
include( 'setup/funciones.php' );
include( 'setup/arrays.php' );

?>
<!DOCTYPE HTML>
<html lang="es-AR">
<head>
	<meta charset="UTF-8" />
	<title>Brian Enrique</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="recursos/css/estilos.css" />
</head>
<body>
	<header>
		<h1><?php echo "Brian"; //Esto mostrará el error de undefined constant, si el display_errors está en 1, pero no mostrará nada si está en 0 ?></h1>
		
		<!-- acceso a redes sociales -->
		<ul>
		<?php foreach( $redes as $red => $url ){
			echo "<li><a href='$url'>$red</a></li>";
		} ?>
		</ul>
	</header>
	<nav>
		<ul>
			<li><a href="index.php?seccion=home" 
			
			<?php if( $seccion == 'home' ){ echo ' class="actual" '; } ?>
			
			>Home</a></li>
			<li><a href="index.php?seccion=categorias"
			<?php if( $seccion == 'categorias' || $seccion == 'categoria' ){ echo ' class="actual" '; } ?>
			>Categorias</a>
				<ul>
					<?php 
					for( $i = 0; $i < count($categorias); $i++ ):
						echo '<li><a href="index.php?seccion=categoria">'.$categorias[$i].'</a></li>';
					endfor;
					?>
				</ul>
			</li>
			<li><a href="index.php?seccion=contacto" 
			<?php if( $seccion == 'contacto' ){ echo ' class="actual" '; } ?>
			>Contacto</a></li>
		</ul>
	</nav>
	
	<main>
	<!-- aqui estaba el contenido -->
	<?php 
		//verificar cuál de todas las secciones debemos cargar
		switch( $seccion ):
			case 'home': include( 'contenidos/home.php' ); break;
			case 'categorias': include( 'contenidos/categorias.php'); break;
			case 'categoria': include( 'contenidos/categoria.php' ); break;
			case 'registro': include( 'contenidos/registro.php' ); break;
			case 'contrasenia' : include( 'contenidos/recuperar.php' ); break;
			case 'perfil': include( 'contenidos/perfil.php'); break;
			case 'contacto': include( 'contenidos/contacto.php'); break;
			case 'gracias': include( 'contenidos/gracias.php'); break;
			case 'static': include( 'contenidos/static.php'); break;
			case 'leer': include( 'contenidos/leer.php'); break;
			default: 
				echo "<p class='error'>La sección solicitada ($seccion), no existe</p>";
				include( 'contenidos/home.php' ); 
			break;
		endswitch;
	?>
	</main>
	<aside>

		<form action="index.php" method="get">
			<h2>Buscador</h2>
			<div><input type="search" id="buscar" name="buscar" /></div>
			<div><input type="submit" value="buscar" /></div>
		</form>


		<?php 
		if( $logueado == false ){ //Si no está logueado, mostramos el formulario de login.
		?>
		<!-- esto se muestra si el usuario no está logueado -->
		<form action="forms/login.php" method="post">
			<h2>Login</h2>

			<?php
			if( isset( $_GET ['login'])){
				echo '<p style= "padding: 4px; font-size: 10px; background: pink; color: 
				darkred" > Error Usario  o clave </p>';
			}
			?>

			<div><input type="text" placeholder="usuario" name="usuario" id="usuario" /></div>
			<div><input type="password" placeholder="clave" name="clave" id="clave" /></div>
			<div class="center"><a href="index.php?seccion=registro">Registro</a><a href="index.php?seccion=contrasenia">Olvidé mi contraseña</a></div>
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
				<a href="index.php?seccion=perfil">Editar perfil</a>
				<a href="#">Cerrar sesión</a>
			</div>
		</div>
		<?php 
		} //Cierra el IF del usuario logueado.
		?>
	</aside>
	<footer>
	<div>
			<h2>About</h2>
			<ul>
				<li> test </li> 
				<?php
				// creo el acceso entre php y directorio 
				$directorio = opendir('extras/textos/institucional');

				// Recorrer los contenidos 
				
				while ($archivo = readdir ($directorio)){
					if($archivo =='.' || $archivo =='..'){
						continue;
					}
					echo "<li> <a href ='index.php?seccion=static&cual=$archivo'> $archivo </a></li>" ;
				}

				// cerramos el recurso
				closedir($directorio);

				?>
				<li><a href="index.php?seccion=static&cual=Terminos y condiciones">Términos y Condiciones</a></li>
				<li><a href="index.php?seccion=static&cual=Quienes somos">Conocenos más</a></li>
			</ul>
		</div>
		<div>
			<h2>Links Utiles</h2>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="categorias.html">Categorias</a></li>
				<li><a href="Contacto.html">Contacto</a></li>
				<li><span>Social</span>
					<ul>
						<li><a href="https://www.facebook.com/user">Facebook</a></li>
						<li><a href="https://www.twitter.com/user">Twitter</a></li>
						<li><a href="https://www.instagram.com/user">Instagram</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</footer>
</body>
</html>