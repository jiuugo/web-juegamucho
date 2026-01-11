Manual del Programador: Juega Mucho
1. Resumen
Este documento detalla la implementación técnica de la tienda online "Juega Mucho", desarrollada sobre el framework Laravel. Proporciona una visión general de las dependencias, la estructura del proyecto, el modelo de datos y las relaciones clave.

2. Dependencias y Requisitos Técnicos
El proyecto utiliza las siguientes tecnologías y librerías:

Backend: Laravel Framework (Versión 12)

Frontend Scaffolding: Laravel UI

Gestión de Permisos: Spatie Laravel Permission (para manejo de roles de usuario y administrador)

3. Instalación y Puesta en Marcha
Sigue estos pasos para levantar el entorno de desarrollo medinate una terminal:

1. Instalar dependencias de PHP:

composer install

2. Instalar dependencias de Frontend:

npm install

3. Configuración de Base de Datos Crea la base de datos y ejecuta las migraciones junto con los "seeders". IMPORTANTE para tener acceso a los productos por defecto y los usuarios.

php artisan migrate --seed

4. Compilación de Assets:

npm run dev

5. Ejecución del Servidor:

php artisan serve

6. Verificación. Abre tu navegador web e ingresa a la dirección: http://localhost

4. Arquitectura del Proyecto
Estructura de Archivos Relevante
Los siguientes archivos contienen la lógica principal de la aplicación:

app/Models/: Contiene los modelos de datos (Article, Category, Brand, Order, OrderItem).

app/Services/CartService.php: Gestiona la lógica de negocio del carrito de compras y su persistencia en la sesión.

database/migrations/: Archivos de control de versiones de la estructura de la base de datos.

database/seeders/: Scripts para poblar la base de datos con información inicial (ArticleSeeder, CategorySeeder, BrandSeeder, RoleSeeder).

Modelo de Datos y Relaciones
El sistema base de datos relacional sigue estas reglas de negocio:

Artículos: Pertenecen a una Categoría y a una Marca.

Pedidos: Pertenecen a un Usuario y contienen múltiples Líneas de Pedido (OrderItems).

Líneas de Pedido: Cada línea referencia a un Artículo específico.

Campos principales por tabla:

Tabla Artículos (articles): id, nombre, descripción, precio, stock, id_categoría, id_marca, min_edad y max_edad. (Traducidos).

Tabla Pedidos (orders): id, id_usuario, total, estado, fecha_creación. (Traducidos)

Tabla Líneas de Pedido (order_items): id, id_pedido, id_artículo, cantidad, precio_unitario.

5. Funcionalidad y Manual de Uso
Visión General
La aplicación es una tienda online que permite visualizar productos, filtrarlos, gestionar un carrito de compras y simular la finalización de un pedido. Cuenta con cuatro secciones principales: Inicio, Catálogo, Carrito y Contacto.

Autenticación
Registro e Inicio de Sesión: Necesario para realizar compras.

Acceso Público: La página de inicio y el catálogo son visibles sin necesidad de registro.

Roles de Usuario
A) Usuario Registrado (Cliente)

Catálogo: Puede navegar por la sección "Descubre".

Filtros: Capacidad para filtrar productos por categoría, marca, rango de precio o edad recomendada.

Carrito: Funcionalidad para añadir productos, vaciar el carrito, eliminar ítems individuales y proceder al pago.

Checkout: Visualización del resumen final del pedido.

B) Administrador

Panel de Control: Acceso exclusivo desde el menú principal.

Gestión de Artículos: Permisos para crear, editar y eliminar productos del catálogo.

Gestión de Pedidos: Visualización de todos los pedidos realizados por los usuarios de la plataforma.