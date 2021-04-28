### Expresiones Regualares V 

_Atajo existente_

* \d Cualquier digito [0-9] <br>
* \D Cualquier NO digio [^0-9] <br>
* \w Caracter alfanumerico [a-zA-Z0-9_] <br>
* \W Caracter NO alfanumerico [a-zA-Z0-9_] <br>
* \s Cualquier caracter de espacio (tab, n r, etc) <br>
* \S Cualquier caracter que NO sea un espacio <br>
* \b Delimitador de papabras(ningun caracter ni antes ni depues) <br>

```php
$texto = $_POST['texto'];
$er = "/\b(mota|sexo|droga)\b/i";
```

### Patrones Optativos 

- Siempre que definimos una ecpresion regular, la misma se vuelve "Obligatoria" para el string contra el que le matcheamos.

