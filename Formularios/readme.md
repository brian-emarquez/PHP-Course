## Formularios

- Los Formularios permiten el envio de tanto GET como por POST
- Eso se define con el atributo <strong> method </strong> que tendra uno de eso dos valores.
- La Informacion ingresada sera enviada al documento que haya sido indicado en el atributo <strong>action</strong> del formulario

## Atributos y controles

- Todos los campos del formulario deben tener atributo name.
- Cuaquier control que no tenga un <strong> name </string> será omitido en el envio.
- Y en en caso de los controlesa de seleccion, deberan tener un <strong>Value</string> que sea representativo de la informacion a enviar.
- Si un radio o ckeckbox no tiene <strong>Value</string>, se envia el valot <strong>On</string> (pero no dice cual es el campo que fue seleccionado).