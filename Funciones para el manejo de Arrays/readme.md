##  Funciones para el manejo de Arrays

- Los Array tiene varias funciones para manipular sus elementos.
- Por ejemplo , las funcion <strong>array_push() </strong> que nos permite agregar uno o varios elemtos al final del array.

- si queremos agregar al principio del array, podemos usar la funcion <strong>array_unshift() </strong>

- Podemos Eliminar un elemento por medio del <strong> array_pop()</strong>

- si queremos agregar al final del array, podemos usar la funcion <strong>array_unshift() </strong>

- y lo que existe una funcion llamada <strong>array_splice()</strong> que permite agregar o quitar elementos en cualquier lugar del arrat

## Verificar el Array

- Podemos verificar si el array tione o no un determado elemento.
- En este caso sera una funcion distinta segun se trate de un valor o de un indice
- la funcion <strong> in_array() </strong> recibe un array y un valor, devolverá verdadero si el valor existe dentro del array.

- La funcion <strong> isset() </strong>, verifica si existe un determinado indice adentro del array tanto el array como el indoce que estamos verificando.


## Ordenar los Arrays

- La Funcion <strong> sort() </strong> permite ordenar un array por su valores (de mennor a mayor)
- La Funcion <strong> rsort() </strong> hace el ordenamiento inverso (de mayor a menor)
- La Funcion <strong> ksort() </strong> ordena el array por sus indices en orden ascendente.
- La Funcion <strong> krsort() </strong> hace el ordenamiento del array seguin los indices en orden inverso.

## De array a String

- Podemos unir todos lo elementos de un array en una unica cadena de texto por medio de la funcion <strong> implode() </strong> que recibe dos datos.

- El camino inverso es el explode(), ue separa una cadena de texto en un array. tambien recibe dos datos.

## Obtener un numero al azar

- PHP tiene la funcion <strong> rand() </strong> para sacar un valor al azar, que recibe dos datos entre parentesis 