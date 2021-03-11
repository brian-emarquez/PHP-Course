### Validación de los archivos subidos por formularios

### Validaciones

- Mas alla del tamaño que acepte el `PHP.ini` , que podemos restringir el tamaño desde la programacion verificando el `$_FILES['input']['size'];`

- D ehecho si no se envia ningun archivo, el `$_FILES['input']` se genera, pero con tamaño vacio (por si necesitamos verificar que no haya llegado un archivo)

- Tambien podemos verificar el tipo de archivo que no ha enviado desde PHP: 
    * Podemos analizar el mine-type con el `$_FILE['input']['type'];`

### Definir nombre del archivo

- si soa archivos se suben a la misma carpeta , con el mismo nombre se pisan.
- tenemos 2 formas de crear nombre unicos en lo nombre de archivo.
Usar el valor que devuelve la funcion `time()` con el nombre del archivo
