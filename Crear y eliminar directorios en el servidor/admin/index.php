<?php 
if( isset($_GET['cat']) ){
	$categoria = $_GET['cat'];
}else{
	$categoria = 'blog';
}
?>
<!DOCTYPE HTML>
<html lang="es-AR">
<head>
	<meta charset="UTF-8">
	<title>Panel de control</title>
	<style type="text/css">
	form div{ margin-bottom: 4px; }
	form div input{ border: 1px solid #AAAAAA; }
	form div textarea{ border: 1px solid #AAAAAA; }
	</style>
</head>
<body>
	<h1>Panel de control</h2>
	<nav>
		<ul>
			<li><a href="index.php?cat=estaticos">Textos estaticos</a></li>
			<li><a href="index.php?cat=blog">Textos del blog</a></li>
		</ul>
	</nav>
	
	<main>
	<?php 
	switch($categoria){
		case 'blog': include('contenidos/blog.php'); break;
		case 'estaticos': include('contenidos/estaticos.php'); break;
	}
	?>
	</main>

</body>
</html>