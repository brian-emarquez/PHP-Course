### Conectarse con Oracle

_Descargar Oracle XE_

<table align="center">
  <tr>
    <td align="center" style="padding=0;width=50%;">
      <img align="center" style="padding=0;" src="../images/oracleDownload.png" />
    </td>
  </tr>
</table>

_Descargarr e Instalar_

<table align="center">
  <tr>
    <td align="center" style="padding=0;width=50%;">
      <img align="center" style="padding=0;" src="../images/oracleDownload2.png" />
    </td>
  </tr>
</table>

_Creacion de Usuario por la consola SQL PlUS_

**Ingresar modo admin en pasword presionar ENTER**

```sql
Introduzca el nombre de usuario: CONN /AS SYSDBA
Introduzca la contrase±a: /*ENTER*/
```

** Ver los Usuarios ***

```sql
show user;
```

** Eviamos el Errir ORA-65096 **

```sql
ALTER SESSION SET "_ORACLE_SCRIPT" = TRUE
```

** Creamos Usuario **

```sql
CREATE USER users IDENTIFIED BY password
```

** Briandomos Admin **

```sql
GRANT DBA TO briandb;
```

_Ejecucion SQL DEVELOPER_

<table align="center">
  <tr>
    <td align="center" style="padding=0;width=50%;">
      <img align="center" style="padding=0;" src="../images/oracleDownload2.png" />
    </td>
  </tr>
</table>

_Descargar SQLDeveloper_

<table align="center">
  <tr>
    <td align="center" style="padding=0;width=50%;">
      <img align="center" style="padding=0;" src="../images/SQLdeveloper.png" />
    </td>
  </tr>
</table>

_Instalar, Ejecular y Conectarse a la Instancia_

<table align="center">
  <tr>
    <td align="center" style="padding=0;width=50%;">
      <img align="center" style="padding=0;" src="../images/SQLdeveloper2.png" />
    </td>
  </tr>
</table>