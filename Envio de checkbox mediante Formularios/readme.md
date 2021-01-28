## Envio de Checkbox

- Al igual que lo demas compos el input <strong> input </strong> de timpo  <strong> checkbox </strong> debe tener un name. 
- pero cada <strong> checkbox </strong> debe tener un noombre diferente.
- Y como ya dijimos , todo <strong> checkbox </strong> que no fue seleccionado, no se envia al <strong> action  </strong> del formulario.
- El problema es que hacer un $_POST O $_GET de un elento que no esiste genera error.

    ```
    Categorias seleccionadas: $_POST[categoria0]  $_POST[categoria1]  $_POST[categoria2] $_POST[categoria3] $_POST[categoria4]<br />
    ```


