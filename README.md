## README del proyecto "Perros" de Desarrollo de Software

### Instalación

Antes de importar este repositorio, es necesario haber instalado LampStack

- Primero, ingresa a la web https://bitnami.com/stack/lamp donde podrás descargar el instalador de lampstack.

- A continuación, ejecuta el instalador. Esto creará una carpeta, que será la carpeta del proyecto con todos los archivos de configuración incluidos por defecto.

- Tercero, dentro de esta carpeta, muévete a */apache2* y busca el subdirectorio que contiene los archivos html, css y js (podría ser en */htdocs*), y cuyo contenido está en este repo. 

- Para clonar el repositorio en la carpeta y mantener el nombre, muévete al directorio */apache2* y ejecuta:

'''
git clone https://github.com/Pudindin/Perros-Desarrollo.git htdocs
'''

- O en caso de que los archivos no hayan estado en */htdocs*, colocar el nombre que posee. Es importante que el nombre sea el mismo que viene por defecto, para que la aplicación funcione bien.

### Correr la aplicación

Para correr la aplicación en tu máquina, ejecuta el archivo ejecutable (*.run) en la carpeta raíz del proyecto (creada por bitnami). Esto abrirá una ventana que te permitirá manejar los servidores e ir directo a la aplicación. Para que la página corra, debes iniciar los servidores (Web y MySql).

### Creación de BD

Para crear la Base de Datos, luego de ejecutar el ejecutable (*.run), seleccionar la opción *Open phpMyAdmin*. En cuanto se haya abierto la página, autenticarse con los datos personales (la contraseña es la ingresada al momento de configurar bitnami).

Una vez ingresados, crear la base de datos *grupo_i* y, después, la tabla *perros*. Ahí, agregar la columna *comentario* de tipo *varchar*

Además, desde la página principal, crear el usuario *iic3142* y darle privilegios sobre la base de datos creada.