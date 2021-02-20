### Recorrer directorios

- Si tenermos varios archivos dentro de una carpeta y queremos recorrerlo todos, PHP nos da 2 fucnioens combinadas.

- Primero debemos sacceder al directorio, por medio de la funcion <stronng> opendi() </stronng> que percibe como cadena de texto el nombre del directorio a recorrer.

- Esta funciones retorna un recurso que debe guardarse en una variable.

- una vez finalizafo , el recurso debe ser ñiberado con la funcion <stronng> closedir($recurso). </stronng>

- Y para obtener los archivos del directorio, se usa la funcion <stronng> readdir($recurso)</stronng> que devolvera una cadena de texto con el nombre de archivo del nombre obtenido.


### Uso del readdir()

- Cada vez que ejecutamos el <stronng> readdir </stronng> nos devuelve de uno en uno los nombre de archivos o subcarpetas que encontro n el directorio.


