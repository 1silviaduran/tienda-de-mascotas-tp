USE mascotas_db;

-- ==========================================
-- 1. CREATE (Insertar datos iniciales)[cite: 6]
-- ==========================================

-- Inserciones en tablas maestras (Categorías y Proveedores)
INSERT INTO categorias (nombre_categoria) VALUES ('Perros'), ('Gatos');
INSERT INTO proveedores (nombre_proveedor, telefono) VALUES ('PetFood S.A.', '3874112233'), ('NutriCan', '3874998877');

-- Inserciones en la tabla principal vinculando claves foráneas[cite: 6]
INSERT INTO productos (titulo, descripcion, precio, categoria_id, proveedor_id) 
VALUES ('Alimento Balanceado Perros 20kg', 'Alimento premium con sabor a carne y cereales', 48000.00, 1, 1);

INSERT INTO productos (titulo, descripcion, precio, categoria_id, proveedor_id) 
VALUES ('Piedras Sanitarias Sílica 4kg', 'Absorción rápida sin olor para gatos', 9200.00, 2, 2);


-- ==========================================
-- 2. READ (Consultas y Uniones JOIN)[cite: 6]
-- ==========================================

-- Consulta SELECT con WHERE y ORDER BY
SELECT id, titulo, precio 
FROM productos 
WHERE precio > 10000 
ORDER BY precio DESC;

-- Consulta SELECT utilizando INNER JOIN para unir productos, categorías y proveedores
SELECT p.id, p.titulo, p.precio, c.nombre_categoria, pr.nombre_proveedor 
FROM productos p
INNER JOIN categorias c ON p.categoria_id = c.id
INNER JOIN proveedores pr ON p.proveedor_id = pr.id;


-- ==========================================
-- 3. UPDATE (Actualización de registros)[cite: 6]
-- ==========================================

-- Modificar el precio de un producto específico usando estrictamente WHERE
UPDATE productos 
SET precio = 50500.00 
WHERE id = 1;


-- ==========================================
-- 4. DELETE (Eliminación de registros)[cite: 6]
-- ==========================================

-- Dar de baja un registro de prueba utilizando WHERE
DELETE FROM productos 
WHERE id = 2;