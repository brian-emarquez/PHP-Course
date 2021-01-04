<!-- Iteraion de Matrices-->

<?php

$fotos = array(
    array(
        'foto1.jpg',
        'Mi primera foto',
        'Foto de una persian en la calle'
    ),

    array(
        'foto1.jpg',
        'otra foto de la galeria',
        'un gato paseando por la calle'
    ),
    array(
        'foto2.PNG',
        'Un Conejo',
        'Conejo saltando el la pradera'
    )

    );

#echo $fotos[0][0];
#echo '<hr />';
#echo $fotos[1][0];

for($i = 0; $i< count($fotos); $i++){
    #var_dump($fotos[$i]);
    for($j=0; $j < count($fotos[$i]);$j++){
        echo $i.' '.$j.' '.$fotos[$i][$j];
        echo '<br />';
    }
    echo '<hr />';

}


?>