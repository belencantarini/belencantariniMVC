
# belencantarini MVC

Modelo vista controlador del proyecto de belencantarini de medicina estetica

## Usuario y password

El usuario y password utilizados fueron

```bash
usuario admin
```

```bash
password admin123
```
## Secciones

La seccion de inicio es una pagina web de un centro de medicina estetica, donde se pueden ver los tratamientos ofrecidos (tomados desde una base de datos) y un formulario de contacto

La seccion de Login se accede desde el boton de Administrar Tratamientos y Servicios, el cual si no se ha iniciado sesion te dirige primero al Login.

Una vez iniciada la sesion se pueden acceder a las secciones:
```bash
Listado de tratamientos
```
Donde se enumeran todos los tratamientos ofrecidos, con la posibilidad de editar su informacion o directamente eliminar dicho Servicio.
```bash
Generar nuevo tratamiento
```
En esta seccion se puede generar un nuevo tratamiento 
```bash
Pendientes de confirmacion
```
Luego de la modificacion o la creacion de nuevos tratamientos, los mismos deben ser confirmados para poder incluirse en la pagina web inicial
```bash
Salir
```
Cierra la sesion de administrador y retorna a la pagina inicial con todos los tratamientos actualizados.
