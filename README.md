## Laboratorio 2 – Implementación de Login en Laravel  

### Introducción
Este repositorio contiene la solución para el Laboratorio #2 del curso de Ingeniería Web, enfocado en la implementación de un sistema de autenticación de usuarios utilizando el framework Laravel y siguiendo la arquitectura Modelo-Vista-Controlador (MVC).

En este trabajo se busca:  
- Comprender la importancia de documentar proyectos de software.  
- Familiarizarse con la estructura MVC en Laravel (Modelos, Controladores, Vistas y Rutas).  
- Configurar e implementar un módulo de autenticación.  
- Identificar dificultades y soluciones durante la práctica.

### Requisitos previos

- PHP 8.x o superior  
- Composer instalado y configurado  
- Servidor local (XAMPP, WAMP, Laragon o equivalente)  
- Editor de código (Visual Studio Code recomendado)  
- Base de datos MySQL/MariaDB en funcionamiento  
- Node.js y NPM (si se usó Laravel UI/Breeze con Bootstrap o Tailwind)  
- Conexión a internet para instalación de dependencias 

## Instalación y Configuración

1. Instalar dependencias del proyecto
Esto es lo primero que se hace cuando se abre un proyecto Laravel.
    composer install
   
2. Configurar el archivo .env
    cp .env.example .env
    php artisan key:generate

3. Instalar el paquete de autenticación
    composer require laravel/ui
    php artisan ui bootstrap --auth
    npm install && npm run dev

4. Migraciones
    php artisan migrate # (tener el servidor de BD encendido)

5. Pasos de configuración adicionales
php artisan config:clear
php artisan config:cache
php artisan view:clear
php artisan serve     # iniciar el servidor de Laravel

### Resultado del laboratorio
Pantalla de bienvenida funcionando: 
![Pantalla de Bienvenida](IMGREADME/Bienvenida.png)

Pantalla del login funcionando: 
![Pantalla de login](IMGREADME/Login.png)

Pantalla de registro funcionando: 
![Pantalla de Registro](IMGREADME/Registro.png)

Pantalla de inicio funcionando: 
![Pantalla de Inicio](IMGREADME/Inicio.png)

### Dificultades encontradas y solución

### Referencias

### Conclusiones y aprendizajes

### Información del estudiante
Nombre: Stephany Chong
Correo: stephany.chong@utp.ac.pa
Curso: Ingeniería Web
Instructor: Ing. Irina Fong
Fecha de ejecución: 28/09/2025

