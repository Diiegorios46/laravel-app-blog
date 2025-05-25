# 📚 Blog Laravel

![Laravel Logo](img:laravel-logo.png)

---

## 🚀 Descripción

Este es un **Blog** construido con Laravel que permite:

- Crear, leer, actualizar y eliminar posts (CRUD).
- Registro de usuarios.
- Login y logout.
- Manejo de sesiones y roles básicos.
- Base de datos relacional con Modelo Conceptual de Datos (MCD) simple.

---

## 🛠️ Tecnologías usadas

- PHP 8.x
- Laravel 9.x
- MySQL (Base de datos XAMPP)
- Blade (motor de plantillas Laravel)
- TailwindCSS para estilos
- XAMPP para entorno local

---

## ⚙️ Requisitos Previos

- Tener instalado [XAMPP](https://www.apachefriends.org/es/index.html) (Apache + MySQL)
- Composer instalado en tu sistema (https://getcomposer.org/)
- PHP configurado (XAMPP trae PHP)

---

## 🗂️ Estructura del proyecto
/app -> Controladores, Modelos, etc. /resources -> Vistas (Blade templates) /routes -> Archivo web.php para rutas /database -> Migraciones y seeds /public -> Archivos públicos (css, js, imágenes)

---

## ⚡ Instalación y Configuración

1. **Clonar el repositorio:**
    ```bash
    git clone https://tu-repositorio.git
    cd nombre-del-proyecto
    ```

2. **Instalar dependencias con Composer:**
    ```bash
    composer install
    ```

3. **Copiar archivo de entorno y configurar variables:**
    ```bash
    cp .env.example .env
    ```
    Edita el archivo [.env](http://_vscodecontentref_/0) con tus credenciales de base de datos:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel_db
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4. **Generar la clave de la aplicación:**
    ```bash
    php artisan key:generate
    ```

5. **Ejecutar migraciones y seeders:**
    ```bash
    php artisan migrate --seed
    ```

6. **Instalar dependencias de frontend y compilar assets:**
    ```bash
    npm install
    npm run dev
    ```

7. **Levantar el servidor de desarrollo:**
    ```bash
    php artisan serve
    ```

---

## 🧪 Pruebas

Para ejecutar las pruebas, usa:

```bash
composer run dev 
```