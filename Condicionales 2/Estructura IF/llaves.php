<?php 
$nombre = 'brian';
if( $nombre == 'brian' ){ //Las llaves agrupan todo el bloque que se debe comportar como verdadero... en este caso, siendo el nombre Pepe, no se muestra ni el hola profesor, ni el acceder al curso
	echo "Hola profesor<br />";
	echo "Acceder al curso";
}

echo '<hr />';
if( $nombre == 'brian' ) //En este caso, como no tiene llaves, se muestra SIEMPRE Acceder al curso, porque solo se toma como acción del IF la muestra de hola profesor.
	echo 'Hola profesor<br />';
	echo 'Acceder al curso';

echo "<hr />Final del archivo";