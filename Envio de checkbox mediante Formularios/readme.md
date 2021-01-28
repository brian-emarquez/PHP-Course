## Envio de Checkbox

- Al igual que lo demas compos el input <strong> input </strong> de timpo  <strong> checkbox </strong> debe tener un name. 
- pero cada <strong> checkbox </strong> debe tener un noombre diferente.
- Y como ya dijimos , todo <strong> checkbox </strong> que no fue seleccionado, no se envia al <strong> action  </strong> del formulario.
- El problema es que hacer un $_POST O $_GET de un elento que no esiste genera error.

    ```
    Categorias seleccionadas: $_POST[categoria0]  $_POST[categoria1]  $_POST[categoria2] $_POST[categoria3] $_POST[categoria4]<br />
    ```

- Usando la funcion <strong> isset($_POST['Nname_box']) </strong> que retornará verdadero si existe el <strong> input </strong> y falso si no existe.

### Simplificar el Checkbox

- Claro que hacer un <strong>  isset()  </strong>, por cada campo es aceptable con 5 o 10 checkbox.
- En un cantidad mayor se vuelve inmanejable

```
if (isset($_POST['categoria0'])){
    $categorias_seccionadas .= " ".$_POST['categoria0'];
}

if (isset($_POST['categoria1'])){
    $categorias_seccionadas .= " ". $_POST['categoria1'];
}

if (isset($_POST['categoria2'])){
    $categorias_seccionadas .= " ".$_POST['categoria2'];
}

if (isset($_POST['categoria3'])){
    $categorias_seccionadas .= " ". $_POST['categoria3'];
}

if (isset($_POST['categoria4'])){
    $categorias_seccionadas .= " ".$_POST['categoria4'];
}
```

- Por lo cual la solucion es hacer que el <strong>  name  </strong> en HTML tengan formato de array -> cbox[].
- Para HTML es un nombre valido y PHP asume que $_POST['cbox'] es efectivamente un array, por el cual podemos recorrerlo con un for/foreach o unirlos con un implode().



