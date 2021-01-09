
<!-- Iteración de Arrays asociativos-->

<?php

$options = array(
    'pe' => 'Peru',
    'co' => 'Colombia',
    'us' => 'Estado Unidos',
    'ch' => 'Chile'
);

$imagenes = array (

    'fotos1.jpg' => 'Imagee de una persona ',
    'fotos2.jpg' => 'Perro paseando',
    'fotos3.jpg' => 'Gato sorprendido'
);

$redes = array (

    'facebook' => 'htps://facebook.com/nombre_usuario ',
    'twitter' => 'htps://twitter.com/nombre_usuario ',
    'Instagram' => 'htps://Instagram.com/nombre_usuario'
);


//for($i = 0; $i < count($redes); $i++){
//    echo $i;
 //   echo '<hr />'
//}

foreach( $redes as $nombrered => $urlRed ){
    echo $nombrered;
    echo ' ';
    echo $urlRed;
    echo '<hr />';
}

?>