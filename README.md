# Adaptación del ambiente de trabajo - Cuatro en línea
 El cuatro en línea, desarrollado en el lenguaje php con el framework laravel. En este juego dos jugadores irán turnandose para colocar una ficha en una cuandricula, el que consiga que 4 de sus fichas esten en fila (horizonal, vertical o diagonalmente) será el ganador.

## **Programas a utilizar**
Estos serán los progamas que se utilizarán:

* [DDEV](https://ddev.readthedocs.io/en/stable/ "Pagina de DDEV")
* [Docker Desktop](https://docs.docker.com/desktop/ "Pagina de docker")
* [Composer](https://getcomposer.org/download/ "Pagina de composer")


## **Proceso de preparación**
Para lograr correr adecuadamente la web , primero se deben hacer varias configuraciones:

### **Clonar el proyecto**
Para clonarlo, se puede desde la consola, con el comando ``git clone https://github.com/dagosdev/cuatroenlinea``, o mediante github dando a la opción ![Code button](images\Screenshot_2.png) y eligiendo la opción que convenga.


### **Crear y configurar el container**
Primero debemos abrir el programa `Docker`, luego ejecutamos el comando `ddev config`, para luego ingresarle los datos que queramos en los campos:
* **Proyect name:** El nombre del proyecto que queramos, en este caso **cuatroenlinea**
* **Docroot location:** Puede dejarse en blanco directamente
* **Proyect type:** Ingresar la opcion **laravel**

Luego ingresamos en consola el comando `ddev composer install`, para instalar composer.

Cuando termine de ejecutarse, corremos el comando `cp .env.example .env` para crear el archivo de ambiente del proyecto de tipo **.env**. 

Por último se debe generar la clave de aplicación para nuestro proyecto mediante el comando `php artisan key:generate`.

## Iniciar la aplicación

Si no tenemos problemas con los pasos anteriores, iniciamos el proyecto mediante el comando `ddev start`. Al ejecutarlo debe darnos dos links ![Links](images/ddev%20start.png)

Al ingresar a alguna de ellas, nos puede salir una ventana indicando que la pagina es peligrosa, pero se debe ignorar.
Si todo salió bien debería salir una página de este estilo: 
![webpage](images/Correct%20webpage.png)

Si este fue el caso, la ejecución fue todo un éxito, y con añadir al final de la url `jugar/1` la pagina del cuarto en línea aparecerá.

## Cerrar la aplicación

Para cerrarla, no se recomienda ir cerrando los programas relacionados, y será mejor hacerlos desde la consola ejecutando el comando `ddev stop`.