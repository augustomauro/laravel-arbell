## Database:

1) Crear la base de datos:

    CREATE DATABASE `arbell-app` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

2) Generar key para la aplicacion:

    php artisan key:generate

3) Conectar aplicacion Laravel a base de datos en .env

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=arbell-app
    DB_USERNAME=root
    DB_PASSWORD=

4) Correr migraciones de tabla

    php artisan migrate 

