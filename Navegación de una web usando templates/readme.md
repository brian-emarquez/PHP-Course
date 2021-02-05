###  Qué es un template

- Un Template es cualquier fragmeto de codigo HTML cuyo contendo no definido de antemano se va a completar con ayuda de php.

- Puede ser un <strong> Componente </strong> 
- Puede ser algo <strong>MICRO</strong> como el mail que se envia cuando un usuario completa un formulario.


### Navegando por Templates

- es no de los metodos mas usuados para optimizar las navegacion de una web
-Dado que la estructura de una pagina web se repite entre todos los archivos ue nevegamos (index, categorias, ver posteo, registro), dejamos en el index.php todos lo elementos en comun (header, aside, footer)

### Incluir los Templates

- Para cargar uno de estos archovso que convertimos en template, debemos usar la funcion <strong>include() o requiere() </strong> que reciben entre parentesis la ruta para llegar al archivo que queremos incluir.

- A nivel funcionamiento no hay diferencias entre ambas, salvo que el archivo solicitado no exita.
 
