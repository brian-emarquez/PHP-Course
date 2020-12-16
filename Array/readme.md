## Array
### Espacios en Memoria

- Una Variable es un espacio en la memoria que almacena un dato y tiene un nombre que lo referencia.
- Una Funcion es un espacio en una momoria que tambien tiene un nombre referencial, pero almacena una secuancia de pasos.
- un array es un espacio en la memoria con un nombre que lo referencia.

![php](./images/array.png)


<!--It's preferable to install it globally through [`npm`](https://www.npmjs.com/package/git-release-notes)-->

<!--    npm install -g git-release-notes -->

<!--It's also possible to use `git-release-notes` as a node module. Check the usage on [usage as a module](#Usage_as_a_module)-->


#### Example

Array

```js
$nombre = 'German';
$anio = 2021;
//resto del programa
$nombre = 'Juan'; //reemplazar valores

$cursos = array ( ); //esta manera existe en todas las verisones
$tecnologias = [ ]; // 
```

## Items del Array

- Cuando creamos un array, podemos definir qué cobtenido van a tener inicialmente.
- Eso se hace tanto entre lo parentesis de la funcion array(), como entre los corchetes deñ [].
- Cada elemento deberá ir separado del siguiente por como, respetando su tupo de dato.
-Automáticamente irá arignado los corchetes 0,1,2,3(empesando siempre por el nivel cero).

## Ver elementos del Array

- Para poder mostrar un determinado elemento del Array solo tenemos que hacer un echo o print del array que nos interesa ver y -entre corchetes-indicar que índice buscamos.

```
var_dump($cursos); // muestra tipos de dato y largo  por cada item del array
```
```
print_r($tecnologias); // No muestra el tipo de dato ni el largo de cada item , solo se puede usar en array
```

## Agregar Elementos
    
```
$elemento[5] = 'newElemento';
```

```
array_push($elemento, 'newElemento', 'newElenento2, 'newEleneto3'...);
```

## Recorrer los Elementos

- Dado que los índices del array son numéricos.
- Y que, para mostrarlo, solo cambia ese numero entre los corchetes
- Podemos recorrerlos con el ciclo FOR indicando hasta donde debemos iterar

## Array como fuente de Datos

- Una fuente de datos, es cualquier recurso que PHP pueda consultar para optener informacion dinámica
- El más obvio es de la Base de Datos, pero el array puede cubrir ese rol.
- Podria tener un array con un listado de categorias posibles para los posteos y por cada íten generar un vinculo de la botonera.



