## Array
### Espacios en Memoria

- Una Variable es un espacio en la memoria que almacena un dato y tiene un nombre que lo referencia.
- Una Funcion es un espacio en una momoria que tambien tiene un nombre referencial, pero almacena una secuancia de pasos.
- un array es un espacio en la memoria con un nombre que lo referencia.

![php](./images/array.png)


<!--It's preferable to install it globally through [`npm`](https://www.npmjs.com/package/git-release-notes)-->

<!--    npm install -g git-release-notes -->

<!--It's also possible to use `git-release-notes` as a node module. Check the usage on [usage as a module](#Usage_as_a_module)-->

#### Installation

   npm install --save-dev git-release-notes

#### Usage

Inside your script file

```js
const releaseNotes = require('git-release-notes');

const OPTIONS = {
  branch: 'master',
};
const RANGE = 'v1.0.0..v2.0.0';
const TEMPLATE = 'markdown';

releaseNotes(OPTIONS, RANGE, TEMPLATE)
.then((changelog) => {
  console.log(`Changelog between ${RANGE}\n\n${changelog}`);
})
.catch((ex) => {
  console.error(ex);
  process.exit(1);
});
```
