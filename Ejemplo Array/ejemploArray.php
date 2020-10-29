<!-- Ejemplo con Arrays -->

<?php
// Ejercio con Array

$cursos = array ('python', 'java', 'html', 'html', 'css');
echo $cursos[3];

// cambio de nombre de un elemento en el array
$cursos[3] = 'javascript';
echo $cursos[3];
echo "<br>";
//print_r($cursos);

// Contar nuero de elentos en un Array
echo count ($cursos);
echo "<br>";

?>