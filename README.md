# Aplicativo Mi Portafolio
Hecho en Laravel 7.

### Pasos para la instalación manual
- Crear la base de datos MySQL o SQlite
- Copiar el .env.example a .env y actualizarlo según tu necesidades
- Ejecutar los siguientes comandos:
``` 
- composer install
- php artisan key:generate
- php artisan migrate
- php artisan db:seed
```
- Node version 10.x, comandos a ejecutar:
```
npm install
npm run prod
```

### Usando Docker compose
Ejecutar el script en bash: `./setup_local.sh` y se hará todo automáticamente.

Acceso al sistema:
```
user: admin@panel.com
password: password
```
