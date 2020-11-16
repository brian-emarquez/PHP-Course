<!-- Condicionales  else If -->

<?php


$n1 = 100;
$n2 = 1000;
$rta = $n1 <=> $n2;

#var_dump($rta);

if( $rta == 0){

    echo "$n1 y $n2 son iguales";

}else if ( $rta ==-1){
    echo "$n1 es menor al $n2";

}else if($rta ==1){
    echo "$n1 es mayor al $n2";

}else{
    echo "NO se cumplio ninguna de la ondiciones";
}

?>