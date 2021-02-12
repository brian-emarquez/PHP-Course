### el GET puede fallar

- Regla fundamental de PHP: No se puede hacer un GET(ni un POST) de algo que no existe , da error.

- Y cuando el usuario accede a la web, el GET no existe (porque todavia no interactuó con ningun link)

- el GET es un array, y las variables recibidas son indices de ese Array 

- Por lo cual se verifica con <strong> isset():</strong>

```php
    if(isset($_GET['seccion'])) {/* Cargando el modulo*/}
```

### Secciones invalidas

- Dado qe el paso de datos de GET es visible y publico, un usuario puede cambiar la seccion perdida.
- Hay que tener presente qué pasa si se pide una seccion invalida.
- En ese caso el GET de seccion existe, pero el valor está mal.
- Con un IF o SWITCH hemos definido qué categoria se carga ante cada valor valido.
- Si no es ninguna válida en el ELSE o DEFAULT, se carga una seccion por defecto (que puede ser nuevamente el index, con un mensaje de error).

### Marcar la seccion actual

- Generalmente al usuario se le marca el vinvulo de la seccion donde se encuentra navegando.
- Esto se hace un class o id que destaque ese boton por sobre los demas.

### Marcar la seccion actual

- Generalmente al usuario se le marca el vinculo de la seccion donde se encuentra novegando.
- Esto se hace con CLASSo ID que destaque ese boton por sobre las demas
-Hata ahora esto era simple , por que al HTML que le correspondia, se le marcaba su opcion.










