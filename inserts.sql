-- Inserts para la tabla de categorías de productos
INSERT INTO categorias (nombre) VALUES
  ('Detergentes'),
  ('Desinfectantes'),
  ('Limpiadores Multiusos'),
  ('Cepillos y Escobas'),
  ('Papel Higiénico'),
  ('Guantes de Limpieza');

-- Inserts para la tabla de productos
INSERT INTO productos (nombre, precio_base, descuento, id_categoria) VALUES
  ('Detergente en Polvo', 10.99, 0, 1),
  ('Limpiador Desinfectante', 8.50, 1, 2),
  ('Limpiador Multiusos', 5.99, 0, 3),
  ('Escoba de Cerdas Duras', 12.99, 0, 4),
  ('Papel Higiénico Suave', 3.99, 0, 5),
  ('Guantes de Látex', 2.50, 0, 6),
  
  ('Jabón en Barra', 1.99, 0, 1),
  ('Desinfectante de Superficies', 9.75, 1, 2),
  ('Limpiador de Ventanas', 6.49, 0, 3),
  ('Cepillo de Esponja', 7.99, 0, 4),
  ('Papel Higiénico Reciclado', 4.50, 0, 5),
  ('Guantes de Nitrilo', 3.25, 0, 6);

-- Inserts para la tabla de vendedores
INSERT INTO vendedores (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, cedula_rif, telefono) VALUES
  ('Ana', 'María', 'Gómez', 'Rodríguez', 'V765432109', '04121234567'),
  ('Pedro', 'Antonio', 'Hernández', 'López', 'E234567890', '04261234568'),
  ('Luisa', 'Fernanda', 'Suarez', 'Martínez', 'V987654321', '04131234567'),
  ('Carlos', 'Andrés', 'García', 'Pérez', 'E345678901', '04261234569');

-- Inserts para la tabla de clientes
INSERT INTO clientes (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, correo_electronico, cedula_rif, telefono, direccion) VALUES
  ('María', 'Alejandra', 'Fernández', 'García', 'maria.fernandez@example.com', 'V876543210', '04141234567', 'Calle 123, Ciudad'),
  ('Jorge', 'Alberto', 'Mendoza', 'Pérez', 'jorge.mendoza@example.com', 'E123456789', '04261234567', 'Avenida 456, Pueblo'),
  ('Isabel', 'Carmen', 'Ramírez', 'Suarez', 'isabel.ramirez@example.com', 'V234567890', '04151234567', 'Carretera 789, Villa'),
  ('Juan', 'Carlos', 'Gómez', 'Martínez', 'juan.gomez@example.com', 'E345678901', '04261234568', 'Calle 567, Poblado');

-- Inserts para la tabla de ventas
INSERT INTO ventas (fecha_venta, total, iva, id_cliente, id_vendedor) VALUES
  ('2023-01-15', 50.00, 8.00, 1, 1),
  ('2023-02-20', 30.00, 4.80, 2, 2),
  ('2023-03-05', 25.50, 4.08, 3, 3),
  ('2023-03-15', 40.00, 6.40, 4, 4);

-- Inserts para la tabla de detalles de ventas
INSERT INTO detalles_venta (cantidad, subtotal, id_venta, id_producto) VALUES
  (3, 32.97, 1, 1),
  (2, 17.00, 2, 3),
  (1, 8.50, 3, 5),
  (4, 26.00, 4, 9);
