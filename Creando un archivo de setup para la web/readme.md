### Formatos de inclusión

- Por medio del <strong> include() o require</strong> podemos incluir archivos HTML O PHP

- La ventaja está en que la inclusion se resuelve en el servidor, por lo cual si se incluye un archivo con extension PHP se procesa de incluirse.

- En consecuencia , siese PHP tiene variables o funciones, ya forman parte 
del resto del sitio (inlusive de otros include que se haga a continuacion).

- Esto permite desglosar en distintos modulos la programacion de la pagina web en lugar de teer un bloque demasiado extenso

### Archivo de Configuracion

- Tal es así, que una práctica recomendable es tener un archivo donde se encuentren la configuraciones basicas del sitio.

- Esto se Extiende a la muestra de arrores , funciones , arrays, conexiones a la base de datos, zona horaria, etc.
### Incluir archivos mas de unas vez

- Desdfe la porgramacion cargar mas de una vez el mismo archivo si es necesario, pero en algunos casos eso puede generar o mostrar menos errores

- por ejemeplo, PHP no permite redifinir las funciones(crearlas mas de una ves con la palabra reservada FUNCTION() po rque corta con un error.

- po lo Cual INCLUDE() Y REQUIERE() tienen un funcion análoga que no cargan los archivos si ya fueron incluidos con anterioridad.

- son las funciones INCLUDE_ONE() y REQUIERE_ONCE()









