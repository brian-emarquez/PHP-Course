### Manipulacion de etiquetas desde PHP

- El texdto multiliena de un <textarea></textarea> no es respetado por el HTML al ver un posteo.

- Esto sucede porque para HTML el enter no significa nada

- Para generar nuvas lineeas necesitamos usar elementos del bloque o etiquetas <br /> que representan el salto de oraciones.

### Eliminar etiquetas HTML 

- En en caso de formularios que completa el usuario (y a veces los mismo adminitradores), aceptar codigo HTML puede ser problema.

- Por ejemplo, un usuario podria insertar un <script> como codigo molesto o malicioso

- por lo cual con la funcion `strip_tag($contenido)` se elimina cualquier etiqueta HTML que tenga valor pasado como argumento.

### Mostar Codigo fuente HTML

- Otra opcion que tenemos es si aceptar el codigo HTML que el usuario escriba pero no procesarlo, sino mostrarlo como fue escrito

- Para eso existen dis fucniones:

`htmlspecialchars($texto)`
`htmlentities($texto)`



