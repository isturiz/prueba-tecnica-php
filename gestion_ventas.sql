CREATE DATABASE IF NOT EXISTS gestion_ventas;
USE gestion_ventas;
-- Crear la tabla de clientes
CREATE TABLE IF NOT EXISTS clientes (
  id_cliente INT AUTO_INCREMENT PRIMARY KEY,
  primer_nombre VARCHAR(50) NOT NULL,
  segundo_nombre VARCHAR(50),
  primer_apellido VARCHAR(50) NOT NULL,
  segundo_apellido VARCHAR(50),
  correo_electronico VARCHAR(255) NOT NULL,
  cedula_rif VARCHAR(20) NOT NULL,
  telefono VARCHAR(15) NOT NULL,
  direccion VARCHAR(255) NOT NULL
);
-- Crear la tabla de categorías de productos
CREATE TABLE IF NOT EXISTS categorias (
  id_categoria INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL
);
-- Crear la tabla de productos
CREATE TABLE IF NOT EXISTS productos (
  id_producto INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255) NOT NULL,
  precio_base DECIMAL(10, 2) NOT NULL,
  descuento BOOLEAN NOT NULL,
  id_categoria INT,
  FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria)
);
CREATE TABLE IF NOT EXISTS vendedores (
  id_vendedor INT AUTO_INCREMENT PRIMARY KEY,
  primer_nombre VARCHAR(255) NOT NULL,
  segundo_nombre VARCHAR(255),
  primer_apellido VARCHAR(255) NOT NULL,
  segundo_apellido VARCHAR(255),
  cedula_rif VARCHAR(20) NOT NULL,
  telefono VARCHAR(15) NOT NULL
);
-- Crear la tabla de ventas
CREATE TABLE IF NOT EXISTS ventas (
  id_venta INT AUTO_INCREMENT PRIMARY KEY,
  fecha_venta DATE NOT NULL,
  total DECIMAL(10, 2) NOT NULL,
  iva DECIMAL(10, 2) NOT NULL,
  id_cliente INT,
  id_vendedor INT,
  FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
  FOREIGN KEY (id_vendedor) REFERENCES vendedores(id_vendedor)
);
-- Crear la tabla de detalles de ventas
CREATE TABLE IF NOT EXISTS detalles_venta (
  id_detalle INT AUTO_INCREMENT PRIMARY KEY,
  cantidad INT NOT NULL,
  subtotal DECIMAL(10, 2) NOT NULL,
  id_venta INT,
  id_producto INT,
  FOREIGN KEY (id_venta) REFERENCES ventas(id_venta),
  FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);