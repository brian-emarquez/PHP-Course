### Atributos de las columnas

- Acorde al tipo de dato seleccionado, se pueden aplicar atributos.
- Para lo tipo de datos numericos existe:

>`UNSIGNED`: Elimina el signo negativo. solo aceptará valores positivos y lo estira al valor maximo del tipo.

>`ZEROFILL`: Convierte esa columna a texto, rellenado el valor con tantos ceros a la izquierda como necesite, Ademas lo pasa a UNSIGNED.

>`AUTO_INCREMENT`: lo convierte en un "numero de serie" Esta columna incrementará automaticamente su valoe de 1 en 1, segunn el valor de la fila anterior. La primera fila sera el valor 1.

>`UNIQUE`: Evita que lo valores de esa columna se repitan.Al Insertar uno ya existe , rechaza toda la fila.

>`NOT NULL`: Esa Columna oligatorio deberá tener un valor,. si no lo recibe , se rechaza toda la fila.

>`  DEFAULT "X"`: se la columna no recibe un valor , fuarfara "x", se la haya definido como NOT NULL o no.
