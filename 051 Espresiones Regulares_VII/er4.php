<?php 
$txt = "Estamos aprendiendo <b>PHP y MySQL</b> en BloomIT, <i>digital academy</i>";
$er = "/<.+>/";
$er2 = "/<.+?>/";


$rta = preg_match( $er, $txt, $c );
var_dump($rta);
var_dump($c);

$rta2 = preg_match( $er2, $txt, $c2 );
var_dump($rta2);
var_dump($c2);
?>