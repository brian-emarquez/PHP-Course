<!-- Condicionales 3 -->

<?php


$n1 = 1000;
$n2 = 100;
$rta = $n1 <=> $n2;

#var_dump($rta);

if( $rta == 0){

    echo "$n1 y $n2 son iguales";

}else{
    if ($rta == -1)
    {
        echo "$n1 es menor que $n2";
    }
    else{
        echo "$n1 es mayor que $n2";
    }

}

?>