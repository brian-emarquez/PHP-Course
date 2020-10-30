<!-- Variables Globales-->
<?php

$n1 = 6;
$n2 = 4;

function suma(){

    $GLOBALS['s'] =  $GLOBALS['n1'] +  $GLOBALS['n2'];

}
suma();
echo $s;


?>