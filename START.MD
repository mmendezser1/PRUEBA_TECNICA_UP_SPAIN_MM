# Archivo a seguir para configurar el proyecto y que pueda funcionar correctamente:

Configurar el archivo .env
Principalemente la conexión a MySql :

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=prueba_tecnica_up_spain_mm
DB_USERNAME=[usuario_especifico]
DB_PASSWORD=[contraseña_especifico]

Ejecutar "CREATE SCHEMA prueba_tecnica_up_spain_mm" en la consola de SQL para crear la base de datos;

Una vez configurado el .env ejecutar los siguientes comandos en el CLI del proyecto:

> composer install
> php artisan migrate
> php artisan key:generate
> php artisan db:seed --class=ProductInfoSeeder

# Para lanzar el proyecto:

> php artisan serve
