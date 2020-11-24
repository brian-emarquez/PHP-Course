## Funciones y Variables

- PHP todas las variables se asumen provadas para las funciones
- Una Funcion no puede salir a buscar unas variabl eque exita por fuera
- Una variable usada dentro de cada funcion no existe por fuera de la misma

## Acceder a variables Externas

_global_

- Una Funcion pueden leer y escribir variables externas
- Para eso desde la funcion , necesitamos  buscarlos como globales
- Eso se hace antoponiendo la palabra reservada <b>global</b> al nombre de variable que queremos afectar
-Esta tecnica deja como margen de error que podemos accidentalmente modificar en valor de una variable que no deberiamos afectar

