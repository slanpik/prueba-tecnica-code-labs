Backend Code Test  📖

El proyecto es una aplicacion web que permite al usuario ver y crear usuarios a traves de dos paginas.

Archivos principales

Controlador UserController 

En el controlador encontraremos las funciones principales que hacen que nuestro proyecto funcione entre ellas tenemos:


• showHistorical, esta funcion nos permite ver todos los registros del IMC que creo el usuario.
• createIMC, esta funcion nos lleva a la vista para agregar un nuevo IMC.
• storeIMC, esta funcion nos permite guardar un nuevo usuarios despues de realizada las siguientes validaciones:
► El campo weight es requerido y tiene que ser string.
► El campo height es requerido, tiene que ser string.


 Controlador RegisterController 
En el controlador encontraremos las funciones principales que hacen que nuestro proyecto funcione entre ellas tenemos:

• showRegistrationForm, esta funcion nos permite registrar un usuario.
• create, esta funcion nos permite guardar un nuevo usuarios despues de realizada las siguientes validaciones:
► El campo firstName es requerido y tiene que ser string.
► El campo email es requerido, tiene que ser string y tiene que ser un email valido.
► El campo password es requerido y tiene que tener confirmación del mismo.

 Vistas 

Las vistas se contruyeron con blade templates y con bootstrap (framework css) y encontraremos los siguientes archivos:


• 2 plantillas para todo el sistema, llamadas master.blade.php y loginLayoup.blade.php
• Una plantilla con el navbar, se llama navbar.blade.php
• La vista para ver el formularios de calcular IMC, el formulario se envia por medio de AJAX, el archivo se llama createImc.blade.php
• La vista para ver todos los calculos del IMC creados a traves de datatables con la carga de datos por medio de AJAX, el archivo de se llama showHistorical.blade.php
• La vista de home que contiene un html con los requisitos y parametros del proyecto.
• La vista de login que permite al usuario iniciar sesion.
• La vista de register permite al usuario registrarse en la plataforma.



Traducciones

Se utilizo para el proyecto el sistema de traducciones de laravel (@lang()) para el uso de las traducciones en español y ingles.


• Por defecto el lenguaje esta en ingles, pero si quieren cambiarlo a español lo pueden hacer cambiando los siguientes datos:
► En la ruta config/app.php linea de codigo 83 cambiar 'locale' => 'es', _de esta manera el sistema estara en español_


 Rutas 

Las rutas son personalizadas y no se usa ninguna ruta del resource.


Autores ✒️

Francisco Sanchez
