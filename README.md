# Laravel Proyect. 
## This is just a CRUD proyect for learning proposes.

### Needed: 
- Xampp
- Composer
- HeidiSQL (optional)
- Cmder (optional)

---
### Previous instructions:
1) Install composer
2) Open Cmder and go to the location folder to execute the following commands

### Instructions:
1) **Composer install** (Ejecuta el siguiente comando para instalar las dependencias de Laravel (esto asume que tienes Composer instalado))
2) Crear una base de datos (puede ser con HeidiSQL) y activar Xampp
3) Del archivo **.env.example**, cambiarle el nombre a **.env** y luego escribir el nombre de la base de datos en DB_DATABASE=[nombrebd]
4) php artisan migrate (Ejecuta las migraciones para crear las tablas de la base de datos)
5) php artisan key:generate (Ejecuta el siguiente comando para generar una clave de aplicación única)
6) php artisan serve (Ejecuta el siguiente comando para iniciar el servidor de desarrollo de Laravel)
7) localhost:8000/tasks done!

