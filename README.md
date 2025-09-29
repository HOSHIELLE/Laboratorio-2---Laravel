# Laboratorio 2 – Proyecto Laravel: Autenticación / Login

**INTRODUCCIÓN**
Este repositorio contiene la solución para el Laboratorio #2 del curso de Ingeniería Web, 
enfocado en la implementación de un sistema de autenticación de usuarios utilizando el framework Laravel 
y siguiendo la arquitectura Modelo-Vista-Controlador (MVC).

**OBJETIVOS**
En este trabajo se busca:  
- Comprender la importancia de documentar proyectos de software.  
- Familiarizarse con la estructura MVC en Laravel (Modelos, Controladores, Vistas y Rutas).  
- Configurar e implementar un módulo de autenticación.  
- Identificar dificultades y soluciones durante la práctica.
  
**REQUISITOS PREVIOS**  
Para correr el proyecto localmente se necesita:

- PHP 8.0 o superior  
- Composer última versión estable
- Laravel installer versión global
- Servidor local (XAMPP, Laragon, WampServer, etc.)  
- Base de datos MySQL / MariaDB  
- Editor de código (VS Code recomendado)  
- Node.js y NPM (para compilar los assets si usaste Bootstrap, Tailwind u otro CSS)  


**INSTALACIÓN Y CONFIGURACIÓN**

1. **Instalar dependencias**  
Esto es lo primero que siempre hay que hacer cuando se abre un proyecto en Laravel.
  composer install

2. **Configurar el archivo .env**
  cp .env.example .env
  php artisan key:generate

2.1. **Editar el archivo .env con la información de la base de datos**
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=nombre_de_tu_bd
  DB_USERNAME=usuario
  DB_PASSWORD=contraseña

3. **Instalación del paquete de autenticación (Laravel/UI)**
  composer require laravel/ui
  php artisan ui bootstrap
  npm install && npm run dev

4. **Migraciones**
  php artisan migrate # (tener el servidor de BD encendido)

5. **Pasos de configuración adicionales que usé durante el Lab2**
  php artisan config:clear
  php artisan config:cache
  php artisan view:clear
  php artisan serve     # iniciar el servidor de Laravel

Estos comandos permitieron limpiar cachés de configuración y vistas, volver a generar la configuración, 
ejecutar migraciones y finalmente correr el servidor para acceder a la aplicación.

**RESULTADOS**

