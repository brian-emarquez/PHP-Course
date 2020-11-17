<!-- selector - Case --> 

<?php 

$nivel = "editore";

switch($nivel){

    
    case 'usuario': // acciones
        echo "El $nivel Comun solo puede comentar/likear";
        echo "<hr />";
    break;

    case 'editor': #acciones 
        echo "Un $nivel puede publicar contenidos <a href='#'>Editar contenidos </a>";
        echo "<hr />";
    break;

    case 'redactor': #acciones 
        echo "Hola $nivel , haga <a href='#'>click aqui para publicar uan nueva entrada</a>";
        echo "<hr />";
    break;
        
    case 'administrador': #acciones
        echo "Hola Admin , haga <a href='#'>click aqui para configurar toda la plataforma</a>";
        echo "<hr />";
    break;

    default:
        echo "No se reconoce ningun nivel de $nivel";
        echo "<hr />";
}
echo "fin de scrip";
?>