### Generar subcadenas de texto

- Podemos cortar una cadena de texto a cierta cantidad de caracteres por medio de la funcion `substr()` que recibe dos o tres argumentos:

* cadenas de tecto a cortar
* En que caracter de la cadena empeisa a recortar
* Cantidad de carracteres a obtener desde el punto de inicio


- Si el tercer argumento no se indica, asume que debe ir hasta el final
si cualquiera de los dos argumentso son negativos, se calcula desde el final en lugar desde el principio.

### Subring HTML incompleto

- Cuando generamos un subtring es factible que nos quede eriquetal mal cerradas o sin cerrar.

- PHP tiene una libreeria adicional llamada `tidy.html` que permitem, entre otras cosas, reparar codigo HMTL incompleto

- para eso debemos parar la subcaderna generada por la funcion ``tidy_parse_sting ($string)` que procesa el codigo HTML.


```php
if(empty($preview)){
	$preview = file_get_contents("$base/$carpeta/contenido.txt");
	# Obtener un fragmento
	$preview = substr($preview, 0, 100); # empiesa de 0 y que de 100 caracteres
	$preview = tidy_parse_string($preview); # repara etiquetas mal cerradas
}
```