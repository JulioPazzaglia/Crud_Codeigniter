## Aplicación de Gestión de Productos
Esta es una aplicación simple de gestión de productos desarrollada con CodeIgniter 4. Permite realizar operaciones básicas de lectura de información proveniente de la base de datos, ver detalles y crear productos.

## Funcionalidades
Listado de Productos: Muestra todos los productos almacenados.
Crear Producto: Permite agregar nuevos productos.
Ver Detalles: Permite ver detalles específicos de un producto.

## Estructura del Proyecto
El proyecto está organizado de la siguiente manera:

app/
│
├── Controllers/
│   ├── Productos.php       # Controlador para gestionar los productos

│
├── Models/
│   ├── ProductosModel.php  # Modelo para interactuar con la base de datos de productos

│
├── Views/

│   ├── productos/

│   │   ├── index.php       # Vista para listar todos los productos

│   │   ├── create.php      # Vista para el formulario de creación de productos

│   │   ├── ver.php         # Vista para ver detalles de un producto
│
public/

│

├── .env                    # Archivo de configuración para variables de entorno

├── composer.json           # Archivo de configuración de Composer

├── .htaccess               # Archivo de configuración para Apache

└── README.md               # Este archivo

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


# Accede a la aplicación desde tu navegador.
public/productos