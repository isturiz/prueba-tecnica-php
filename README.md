# Prueba de Programación en PHP y MySQL
## Sistema de Gestión de Ventas de Productos de Limpieza

Imagina que estás trabajando en una empresa de productos de limpieza, y se te ha asignado la tarea de desarrollar un sistema de gestión de ventas. El sistema debe permitir a los vendedores registrar ventas, calcular el total de la venta (incluyendo deducciones e impuestos), y también proporcionar estadísticas de ventas para cada vendedor.

## Requisitos de la prueba:

### 1. Base de Datos:

- Crea una base de datos llamada "gestion_ventas".
- Diseña al menos tres tablas: "clientes", "productos", y "vendedores".

### 2. Interfaz Web (SPA):

#### Registro de Venta:

- Formulario para ingresar la información del cliente: nombre, cédula/RIF, teléfono, dirección.

- Formulario para agregar productos a la venta: Categoría del producto (selección), precio base, disponibilidad de descuento (sí o no). El impuesto es un valor fijo de 16%

- Visualización de la lista de productos agregados con su subtotal.

- Cálculo automático del total de la venta (subtotal + IVA).

#### Estadísticas de Vendedor:

- Incluye un botón de visualización que abra un modal mostrando estadísticas de ventas para cada vendedor.

- Seleccionable de vendedores para ver sus estadísticas.

- Las estadísticas deben incluir el total de ventas, el número de ventas, y los productos más vendidos.

### 3. Validación:

- Implementa validación en los formularios para asegurar que los campos obligatorios estén completos y que los datos sean válidos.

### 4. Entregables:

- Archivos PHP que contengan el código necesario para la lógica del sistema.

- Archivo SQL que contenga las instrucciones para crear la base de datos y las tablas.

### 5. Observaciones:

- La interfaz debe ser fácil de usar.

- Considera el uso de AJAX para mejorar la experiencia del usuario, por ejemplo, al agregar productos a la venta sin recargar la página.

- Las bases de datos deben contener índices y estar relacionadas.

# Inicialización del proyecto

## Requisitos previos

- [Node.js](https://nodejs.org/)
- [PHP](https://www.php.net/) o similares como [Apache](https://www.apachefriends.org/)

## Pasos

1. **Clona el Repositorio:**

    ```bash
    git clone git@github.com:isturiz/prueba-tecnica-php.git
    cd prueba-tecnica-php
    ```

2. **Instala las Dependencias de Node.js:**

    ```bash
    npm install
    ```

3. **Compila los Estilos CSS:**

    ```bash
    npm run build:css
    ```
4. **Importa la base de datos**

    Puedes importar la base de datos desde `gestion_ventas_export.sql` o copiar las instrucciones sql de `gestion_ventas.sql` y posteriormente hacer el insert de datos con las instrucciones dentro de `inserts.sql`

5. **Configura la Base de Datos (si es necesario):**

   - Editar el archivo `config/config.php` con los detalles de conexión a la base de datos.

6. **Inicia el Servidor PHP:**

    Puedes usar el servidor incorporado de PHP para ejecutar la aplicación.

    ```bash
    php -S localhost:8000
    ```







