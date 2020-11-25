<!-- Date -->

<?php

$ahora = time ( );

$ahora_formateado = date("d -m- Y H:i:s", $ahora ); // sensitive

echo $ahora; //segundos
echo "<hr />";
echo $ahora_formateado


?>