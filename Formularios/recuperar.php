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
		<h1>Registrate</h1>
		<p class="info">Ingresa tu correo y te haremos recuperar la clave de acceso al blog</p>
		<form>
			<div><span>Tu Email </span><input type="email" ></div>
			<div><input class="aligned" type="submit" value="Recuperar" /></div>
		</form>
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