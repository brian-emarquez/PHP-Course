###  Como seleccionar el Template

- Por Medio de <strong> include() o require() </strong> cargaremos el template que nos interesa

- para lograrlo, vamos a tener que engiar por GER una variable que no indique que el usuario hizo click en un vinculo de la botonera

### Modificar los Links

- Ahora todos lo vinculos (de la botonera , registro, login y ver perfil ), apuntaran al INDEX.PHP por ese motivo tiene la esctructura en comun vacia.

### Modificar los link

- Ahora todos lo vinculo (de la botonera, registro, login y ver perfil), apuntarán al INDEX.PHP por que ese archivo tiene la estructra en común vacia.
- Y cada vínculo manda por GET una variable(la misma para todos).
- Y Por cada vinculo, solo cambia el valor que manda la variable(lo que está después del igual).

### Cargar el Template

- Para saber cuál de todos lo templates hay que incluir solo debemos evaluar el valor que tiene la variable ercibida por GET.
- Y como puede teer muchos valores posibles )tanto como secciones existan), debemos hacer un IF o SWITCH que verifique que hemos recebido



