### Librería GDLibrary: Redimensionar imágenes

- Es una libreria de PHP que permite manipular las imagenes desde la programacion.
- Las funcionalidades mas comunes que podemos aprovechar son:
        - Redimendionar imagenes
        - cambiar el tono de una imagenen
        - Superponer una marca de agua
        - Agregar texto sobre una imagen

### Abrir la imagenes a editar

- Para editar una imagen, primero debemos abrirla y guardarla en una variable
- GDLibrary tiene una funcion distinta para cada formato de imagen
- Por lo cual tiene una funcion `imagecreatefrom()` por cada formato que recibe como argumento el archivo a editar

- `$jpg_original = imagecreatefromjpeg('foto.jpg');`
- `$png_original = imagecreatefromjpeg('foto.png');`
- `$gif_original = imagecreatefromjpeg('foto.gif');`


### Crear el lienzo destino

- La imagen origin anunca se modifica con el GDLibrary, solo es una referencia.
- Debemos crear un nuevo recurso con el tamaño (ancho/alto) que Deseamos.
- Tambien se guarda en una variable (para manipularla ) y recibe como argumento el ancho y alto del nuevo lienzo.


### Clonar la Iamgen

- Para crear la copia de la foto , solo debemos supoerponer un area del original en el lienzo vacio(ña copia)
- Paeso eso se usa la funcion `imagescopyresampled()` ue recibe 10 argumentos:
    - Recursos destino donde pegamos la infomacion (la copia)

### Exportar la imagen

- La funcion anterior solo superpone la imagen original sobre la copia en la momoria, pero todavia la exporta la miniatura.

- Para exportarla , hay que pasarla como argumento del `imageXXX`


### Argumentos del imagejpeg()

- Con un solo argumento, trata de mostrar la imagen en el mismo PHP que hizo la miniatura (sin crear un archivo fisico)
- Con dos argumentos, el segundo sera el nombre del archivo que se creará con la copia. al usar este método, ya no hace falta usar el `remove_uploaded_file()`





