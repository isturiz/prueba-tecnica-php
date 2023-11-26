-- Insertar vendedores
INSERT INTO vendedores (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, cedula_rif, telefono)
VALUES 
  ('Juan', 'Carlos', 'Gómez', 'López', 'V12345678', '555-1234'),
  ('María', NULL, 'Martínez', 'García', 'E87654321', '555-5678'),
  ('Pedro', 'José', 'Rodríguez', 'Pérez', 'J98765432', '555-9012');


-- Insertar categorías
INSERT INTO categorias (nombre) VALUES
  ('Limpiadores'),
  ('Detergentes'),
  ('Desinfectantes'),
  ('Accesorios de limpieza');

-- Insertar productos
INSERT INTO productos (nombre, precio_base, descuento, id_categoria) VALUES
  ('Limpiador Multiusos', 10.99, FALSE, 1),
  ('Detergente Líquido', 8.99, FALSE, 2),
  ('Desinfectante en Aerosol', 12.49, FALSE, 3),
  ('Cepillo de Escoba', 5.99, FALSE, 4),
  ('Limpiador de Ventanas', 7.49, FALSE, 1);
