# Ejemplo de aplicación CRUD con Laravel usando Livewire 

## Configuraciones previas
Debemos instalar:
PHP
Composer
Livewire
Base de datos (MySQL o alguna otra)

### Instalación de PHP
Puedes usar XAMPP o WampServer, que son paquetes que incluyen PHP, Apache y MySQL.
### XAMPP:
Descarga e instala XAMPP desde https://www.apachefriends.org.
### WampServer:
Descarga e instala WampServer desde https://www.wampserver.com.
Verificación de la instalación de PHP
php -v
Para verificar la correcta instalación, ejecutar en una nueva terminal el comando php -v. Obtendremos información sobre la versión de PHP instalada.
Si estás utilizando Linux, puedes instalar PHP a través de apt:
sudo apt-get install php

### Composer
Composer es un gestor de dependencias que se usa para instalar Laravel. Lo descargamos desde su [página oficial](https://getcomposer.org/download/) . Por defecto, los instaladores configuran el PATH para poder utilizar Composer desde cualquier CLI. Verificamos la instalación mediante el comando composer --version.
Base de datos: MySQL

En Windows, puedes ir al sitio web oficial de MySQL para [descargar](https://dev.mysql.com/downloads/installer/) el instalador  

En Linux, puedes instalar MySQL desde el terminal 
sudo apt-get update
sudo apt-get install mysql-server
## Creación del proyecto
Mediante composer vamos a crear un nuevo proyecto. Para ello, abrimos una consola en la carpeta donde queremos alojar el directorio del proyecto y ejecutamos lo siguiente:
composer create-project --prefer-dist laravel/laravel example-livewire-app
Configuración de Detalles de la Base de Datos
Dentro del archivo .env configuramos los datos adecuados para la base de datos creada previamente (host, password, nombre de base de datos, etc.).
### Install Livewire
Instalamos livewire mediante Composer:
composer require livewire/livewire
### Creación de un Modelo 
Creamos un modelo y una migración para la tabla que queremos en nuestra base de datos

Ejemplo: php artisan make:model User -m
### Creación de Componentes
Para crear un componente Livewire
php artisan make:livewire category
Esto generará un componente Livewire llamado "Category " en la carpeta app/Http/Livewire/

Y también una vista llamada category.blade.php en resources/views/livewire 
### Migración de la base de datos
Una vez definida las migraciones se ejecuta el siguiente comando para aplicarlas y crear las tablas en la base de datos:
php artisan migrate
### Iniciar el Servidor de Desarrollo

php artisan serve

Esto pone en marcha el servidor en http://127.0.0.1:8000 o http://localhost:8000

