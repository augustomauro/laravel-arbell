## Database:

1) Crear la base de datos:

    CREATE DATABASE `arbell-app_db` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

2) Generar key para la aplicacion:

    php artisan key:generate

3) Conectar aplicacion Laravel a base de datos en .env (crearlo a partir de .env.example)

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=arbell-app_db
    DB_USERNAME=root
    DB_PASSWORD=

4) Correr migraciones de tabla

    php artisan migrate

5) Crear usuarios y perfiles de la aplicacion:

    php artisan db:seed

6) Instalar dependencias:

    npm install
    composer install

7) Correr aplicacion:

    php artisan serv



### Funcionalidades:

1) CRUD Usuarios: modificar, eliminar (soft delete), crear.


