## Aplicación de Gestión de Productos
Esta es una aplicación simple de gestión de productos desarrollada con CodeIgniter 4. Permite realizar operaciones básicas de lectura de información proveniente de la base de datos, ver detalles y crear productos.

## Funcionalidades
Listado de Productos: Muestra todos los productos almacenados.
Crear Producto: Permite agregar nuevos productos.
Ver Detalles: Permite ver detalles específicos de un producto.

## Estructura del Proyecto
El proyecto está organizado de la siguiente manera:
app/Controllers/: Contiene controladores para manejar la lógica de los productos.
app/Models/: Incluye modelos para interactuar con la base de datos.
app/Views/productos/: Vistas para mostrar la lista de productos, formulario de creación y vista detallada de cada producto.
public/: Directorio raíz accesible públicamente, contiene archivos estáticos y el punto de entrada index.php.
.env: Archivo de configuración para variables de entorno, incluyendo la configuración de la base de datos.
composer.json: Archivo de configuración de Composer para gestionar dependencias PHP.

## Configuración de la Base de Datos
Para utilizar la aplicación, asegúrate de configurar correctamente la base de datos y las variables de entorno. Aquí un ejemplo de cómo crear la base de datos en MySQL:

## Creación de la Base de Datos en MySQL

-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS ci4;

-- Utilizar la base de datos
USE ci4;

-- Crear la tabla de productos
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio FLOAT (10, 2) NOT NULL
);

## Configuración de las Variables de Entorno (.env)
Asegúrate de configurar las variables de entorno en el archivo .env en la raíz del proyecto para que coincidan con tu configuración de base de datos:


# .env

database.default.hostname = localhost
database.default.database = ci4
database.default.username = tu_usuario
database.default.password = tu_contraseña
database.default.DBDriver = MySQLi
database.default.port = 3306

# Instalación y uso

1. Clonar el repositorio:
git clone https://github.com/yanelricarte/Crud_Codeigniter.git

2. Instalar las dependencias de Composer:
composer install

3. Ajustar las variables de entorno para que funcione correctamente

# Accede a la aplicación desde tu navegador.
public/productos