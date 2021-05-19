### Conectarse a MySQL

*Tipo de Datos*

- MYSQL ews un lenguaje TIPADO , eso significa que sus columnas debene de tener definido un tipo de dato.

```
Numero, texto, Fechas, Booleanos y Array
```

*Tipos Numericos*

- Enteros: `INT`
    * Tinyint : 225 Maximo de valores.
    * Smallint : 63.535 Maximo de valores.
    * Mediumint : 17.777.215 Maximo de valores.
    * Int : 4.294.967.295 Maximo de valores.
    * Bigint :  18.446.744.073.709.551.615 Maximo de valores.
-

*Tipo de cadena*

- Char(n):
Almacena una cadena de longitud fija. La cadena podrá contener desde 0 a 255 caracteres.

- VarChar(n):
Almacena una cadena de longitud variable. La cadena podrá contener desde 0 a 255 caracteres.

- TinyText y TinyBlob:
Columna con una longitud máxima de 255 caracteres.

- Blob y Text:
Un texto con un máximo de 65535 caracteres.

- MediumBlob y MediumText:
Un texto con un máximo de 16.777.215 caracteres.

- LongBlob y LongText:
Un texto con un máximo de caracteres 4.294.967.295. Hay que tener en cuenta que debido a los protocolos de comunicación los paquetes pueden tener un máximo de 16 Mb.

- Enum:
Campo que puede tener un único valor de una lista que se especifica. El tipo Enum acepta hasta 65535 valores distintos

- Set:
Un campo que puede contener ninguno, uno ó varios valores de una lista. La lista puede tener un máximo de 64 valores.


*Tipo Fecha*

A la hora de almacenar fechas, hay que tener en cuenta que Mysql no comprueba de una manera estricta si una fecha es válida o no. Simplemente comprueba que el mes esta comprendido entre 0 y 12 y que el día esta comprendido entre 0 y 31.

- Date:
Tipo fecha, almacena una fecha. El rango de valores va desde el 1 de enero del 1001 al 31 de diciembre de 9999. El formato de almacenamiento es de año-mes-dia

- DateTime:
Combinación de fecha y hora. El rango de valores va desde el 1 de enero del 1001 a las 0 horas, 0 minutos y 0 segundos al 31 de diciembre del 9999 a las 23 horas, 59 minutos y 59 segundos. El formato de almacenamiento es de año-mes-dia horas:minutos:segundos

- TimeStamp:
Combinación de fecha y hora. El rango va desde el 1 de enero de 1970 al año 2037. El formato de almacenamiento depende del tamaño del campo

- Time:
Almacena una hora. El rango de horas va desde -838 horas, 59 minutos y 59 segundos a 838, 59 minutos y 59 segundos. El formato de almacenamiento es de 'HH:MM:SS'

- Year:
Almacena un año. El rango de valores permitidos va desde el año 1901 al año 2155. El campo puede tener tamaño dos o tamaño 4 dependiendo de si queremos almacenar el año con dos o cuatro dígitos.