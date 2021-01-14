## Paso de datos

- Cuando creamos una variable, la misma solo existe en el dcumento donde fue creada
- Al hacer click en otro vinculo, esta inforacion se elimina de la memoria
- Para pasar un dato (o un valor)de un archivo a otro, PHP nos ocrece 3 tecnicas:

* Enviar Datos por GET --> Por Formularios y vinculos
* Enviar Datos pro POST --> Formularios unicamente
* USAR VARIABLES DE SESION --> 

## Diferencia entre GET Y POST

- El Envio de dato por GET tiene 3 desventajas importantes sobre POST.
    * La Informacon es enviada de forma visible por URL, bajo la estructura

    ```php
    htttp://dominio.com/carpeta/archivo.php? variable1=valor&variable2=valor2
    ```