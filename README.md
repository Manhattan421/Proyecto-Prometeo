# Sistema de Gestión de Incidencias

Este proyecto es un sistema web para la gestión de incidencias. Los usuarios pueden crear incidencias, comentarlas y ver el historial de incidencias resueltas.

## Requisitos

- **PHP 7.4 o superior**
- **MySQL 5.7 o superior**
- Un servidor web **Apache** con soporte para **PHP**.

## Instalación del servidor

### 1. Clonar el repositorio

Primero, clona el repositorio de GitHub en tu servidor local.

# Configuración del Sistema

## 2. Configurar la base de datos

1. Accede a **phpMyAdmin** (o usa la línea de comandos de MySQL).
2. Crea una base de datos llamada `Incidencias`.
3. Importa el archivo `backup.sql` que se encuentra en la carpeta `db/` del repositorio:
	```bash
	mysql -u root -p Incidencias < db/backup.sql
	```

## 3. Configurar el servidor web

1. Asegúrate de tener **Apache** y **PHP** instalados:
	```bash
	sudo apt install apache2 php libapache2-mod-php php-mysql
	```

2. Coloca los archivos del repositorio en el directorio adecuado (por ejemplo, `/var/www/html/incidencias`).

3. Asegúrate de que el archivo `db.php` esté configurado con las credenciales correctas de la base de datos (usuario, contraseña, etc.).
