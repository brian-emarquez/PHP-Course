## Paso de datos

- Cuando creamos una variable, la misma solo existe en el dcumento donde fue creada
- Al hacer click en otro vinculo, esta inforacion se elimina de la memoria
- Para pasar un dato (o un valor)de un archivo a otro, PHP nos ocrece 3 tecnicas:

* Enviar Datos por GET ➜ Por Formularios y vinculos
* Enviar Datos pro POST ➜ Formularios unicamente
* USAR VARIABLES DE SESION ➜ 

## Diferencia entre GET Y POST

### GET

- El Envio de dato por GET tiene 3 desventajas importantes sobre POST.
    * La Informacon es enviada de forma visible por URL, bajo la estructura

    ```php
    htttp://dominio.com/carpeta/archivo.php? variable1=valor&variable2=valor2
    ```

- Tiene un limite de 2048 caracteres, desde el principio al final(incluye http)

- No permite adjuntar archivos (no reconoce el input de tipo file)
- Tiene mejor Performanse.
- Se puede guardar en favoritos o compartir en redes sociales.


### POST

- No es visible y es para gran cantidad de documento
- Forma parte de encabesado (error 404)


