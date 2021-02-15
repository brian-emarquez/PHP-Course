### Leer y escribir archivos en el servidor

- Es posible leer el contenido de los archivos que estan en el servidor usando la funcion file_get_contects()

- Recibe entre parentesis una cadenas de teto con la rita al archivo a leer.

- Esta funcion es sutilmente deferencial al include():
    * include() interpreta y procesa variables y funciones
    * file_get_contents() lee el contenido en texto plano

### Escribir archivos

asi como hay una funcion para leer archivos , hay otra para escribirlos:

```php
file_put_contents()

Recibe dos argumentos obligatorios:
    
    * La ruta al archivo que se va a modificar.
    * El contenio a insertarle
    
```

