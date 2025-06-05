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

-----------------------------------------------------------------

### Funcionalidades:

1) CRUD Usuarios: modificar, eliminar (soft delete), crear.

2) API Usuarios: obtener token, editarse, eliminarse (soft delete), listar todos (solo admin).

## API
_Importante: la aplicacion a traves de API necesita autenticacion tipo Bearer para cualquier usuario del sistema._

### _Obtener Token_
Endpoint: POST /api/login
Body (JSON):
{
  "email": "tu@email.com",
  "password": "tu_contraseña"
}
Response:
{
  "token": "1|qwerty123456abcdef...",
  "user": {
    "id": 1,
    "name": "Tu Usuario",
    "email": "tu@email.com"
  }
}

### _Editar Usuario_
Endpoint: PUT /api/user
Header: Authorization: Bearer 1|qwerty123456abcdef...
        Content-Type: application/json
Params (JSON):
{
    "name": "",
    "email": "",
    "password": "",
    "phone": "",
    "profile_id": ""
}
Response:
{
    "message": "Usuario actualizado correctamente."
    "user": {
        "id": "",
        "name": "",
        "email": "",
        "email_verified_at": "",
        "phone": "",
        "profile_id": "",
        "created_at": "",
        "updated_at": "",
        "deleted_at": ""
    }
}

### _Remover Usuario_
Endpoint: DELETE /api/user
Header: Authorization: Bearer 1|qwerty123456abcdef...
        Content-Type: application/json
Response:
{
    "message": "Usuario eliminado correctamente."
}

### _Obtener Todos los Usuarios (solo usuarios Admin)_
Endpoint: GET /api/users
Header: Authorization: Bearer 1|qwerty123456abcdef...
        Content-Type: application/json
Response:
[
    {
    "id": "1",
        "name": "",
        "email": "",
        "email_verified_at": "",
        "phone": "",
        "profile_id": "",
        "created_at": "",
        "updated_at": "",
        "deleted_at": "" 
    },
    {
    "id": "2",
        "name": "",
        "email": "",
        "email_verified_at": "",
        "phone": "",
        "profile_id": "",
        "created_at": "",
        "updated_at": "",
        "deleted_at": "" 
    }
]