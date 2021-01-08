
<!-- Array Asociativo -->

<?php 

$select = array( );
$select['name'] = 'motivo';
$select['required'] = false;
$select['tabindex'] = 2;

//var_dump($select);

$elementos = array( 
	/*0*/ array( 
		'etiqueta' => 'input',
		'type'  => 'text',
		'name'  => 'nombre',
		'placeholder' =>  'Tu nombre completo',
		'texto'  => 'Tu nombre'
	),
	/*1*/ array( 
		'etiqueta' => 'input',
		'type' => 'email',
		'name' => 'correo',
		'placeholder' => 'usuario@email.com',
		'texto' => 'Tu correo'
	),
	/*2*/ array( 
		'etiqueta' => 'select',
		'name' => 'motivo',
		'texto' => 'Motivo del mensaje',
		'opciones' => array( 'contacto', 'sugerencia', 'reclamo' )
	),
	array( 
		'etiqueta' => 'input',
		'type' => 'checkbox',
		'name' => 'item',
		'texto' => 'Acepto los terminos y condiciones'
	)
	
);
for( $i = 0; $i < count($elementos); $i++ ){
    	
	echo '<p>'.$elementos[$i]['texto'].'</p>';
	
	if( $elementos[$i]['etiqueta'] == 'input' ){
        echo '<input type="'.$elementos[$i]['type'].'" name="'.$elementos[$i]['name'].'" />';
        
	}else if( $elementos[$i]['etiqueta'] == 'select' ){
        echo '<select name="'.$elementos[$i]['name'].'">';
        
        //motivo de mensaje
		for( $x = 0; $x < count ($elementos[$i]['opciones'] ); $x++ ){
			echo '<option>';
			echo $elementos[$i]['opciones'][$x];
			echo '</option>';
			
		}
		echo '</select>';
	}
	
	echo '<hr />';
}




?>