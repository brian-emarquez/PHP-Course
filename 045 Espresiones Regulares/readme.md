### Expresiones Regualres

- Son patrones para buscar un cadena de texto adentro de otra cadenas
- Se puede usar solo para verificar si la subcaderna de texto o para reemplazar Strings

_Donde se Usan_

La Expresiones Regualres existen en la mayoria de lo lenguajes de preogramacion actuales
- En la web preincipalmente se usan para la validacion de datos ingresados por un usuario ya sea desde un formulario o url
- de esta manera , enrealidad , podemos verificar los datosr con javascript

_Crear Patron_

Para PHP  el patron de un aexpresion regular no tiene un construcor, es simplemente una cadena de texto que empisa y termina en la la barra

`$patron = "/patron/`;
- poer medio de una serie se ofrede php , le indicaremos otra cadena
- PHP es un lenguaje de case sensitive; el valor que estamos validando debera coincidir con sus mayusculas y minusculas.

### Librerias para RegExp

- PHP permite testear los patrones de una expresion regular usando una libreria de funciones(Como sucede con el GDLibrar)

- Existen dos conjustos de librerias que podria usar:
    > La que inician con ereg_ (Expresiones POSIX)
    > Las que inicial con preg_ (Basadas en PERL) son mas repidas en su procesamiento

### Testear el patron

- Para verificar si la cadena de texto satisface el patron indicado, se usa la funcion `preg_match()` que recibe dos argumentos obligatorios

> El string con el patron de la expresion regular
> El string contra el cual queremos validar el patron

Devolvera el numero 1 si el string coincide contrar el patron y 0 de no ser asi.
- Como estos valores se comportan como los booleanos true y false (respectivamente), podemos usarlo en un condicional.

### Si el patron matchea

- Tambien podemos capturar el motivo por el cual el patron devolvio verdadero

- Para eso se puede agregar un tercer argumento que se instaciará al ejecutar la funcion `preg_match` y retornara un array de conincidencias.
- Esta funcion tiene como pasticularidad que al concontrar la primera coincidencia deja de buscar
- Si queremos capturar todas la funciones repeticiones, debemos usar la funcion `preg_match_all()` que devuelve una matriz de coincidencias.


