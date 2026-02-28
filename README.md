# Mi Sistema - Gestión de Tienda

Sistema integral de gestión para tiendas comerciales. Permite administrar inventario, ventas, compras, clientes, proveedores y generar reportes en PDF y Excel.

## 🚀 Características

- **Gestión de Productos** - Crear, editar y eliminar productos con categorías
- **Control de Inventario** - Seguimiento de stock con alertas de stock bajo
- **Ventas** - Procesar ventas con tickets e historial completo
- **Compras** - Gestionar compras a proveedores
- **Clientes & Proveedores** - Base de datos completa de contactos
- **Reportes** - Exportar a PDF y Excel:
  - Inventario y valuación de stock
  - Ventas por período
  - Stock bajo
- **Caja** - Abrir/cerrar caja y registrar movimientos
- **Usuarios** - Sistema de autenticación y permisos por rol
- **Dashboard** - Panel de control con métricas principales

## 📋 Requisitos

- PHP 7.4 o superior
- MySQL/MariaDB
- Composer
- Apache/XAMPP (recomendado)

## 🔧 Instalación

### 1. Clonar el repositorio
```bash
git clone https://github.com/tu-usuario/mi-sistema.git
cd mi-sistema
```

### 2. Instalar dependencias
```bash
composer install
```

### 3. Configurar la base de datos

#### Opción A: Importar SQL directamente
```bash
mysql -u root -p nombre_base_datos < tienda_sistema.sql
```

#### Opción B: Desde phpMyAdmin
1. Accede a phpMyAdmin (`http://localhost/phpmyadmin`)
2. Crea una nueva base de datos llamada `tienda_sistema`
3. Importa el archivo `tienda_sistema.sql`

### 4. Configurar conexión a BD

Edita `config/database.php` con tus credenciales:

```php
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_datos = 'tienda_sistema';
```

## 📁 Estructura del Proyecto

```
├── assets/               # Archivos CSS, JS, imágenes
├── config/              # Configuración de base de datos
├── core/                # Archivos de configuración global
├── includes/            # Header y footer compartidos
├── modules/             # Módulos funcionales
│   ├── auth/           # Login y autenticación
│   ├── caja/           # Gestión de caja
│   ├── categorias/     # Categorías de productos
│   ├── clientes/       # Gestión de clientes
│   ├── compras/        # Compras a proveedores
│   ├── productos/      # Gestión de productos
│   ├── proveedores/    # Gestión de proveedores
│   ├── reportes/       # Reportes PDF y Excel
│   ├── usuarios/       # Gestión de usuarios
│   └── ventas/         # Procesar y registrar ventas
├── vendor/              # Dependencias (generado por Composer)
├── composer.json        # Dependencias del proyecto
├── index.php           # Página principal
└── tienda_sistema.sql  # Script de base de datos
```

## 🔐 Credenciales por Defecto

| Usuario | Contraseña | Rol |
|---------|-----------|-----|
| admin | admin | Administrador |

**⚠️ Importante:** Cambiar contraseña después del primer acceso.

## 🛠️ Dependencias

- **dompdf/dompdf** - Generación de PDF
- **php-font-lib** - Soporte de fuentes en PDF
- **php-svg-lib** - Soporte de SVG en PDF

## 📝 Uso

1. Accede a `http://localhost/mi-sistema`
2. Inicia sesión con las credenciales
3. Navega por los módulos disponibles
4. Realiza operaciones según los permisos de tu rol

## 📊 Reportes

### Desde el módulo de Reportes:

- **Inventario** - Stock actual, valores de costo y venta
- **Stock Bajo** - Productos por debajo del mínimo
- **Ventas** - Resumen de ventas por período
- Exporta a **PDF** o **Excel**

## 🤝 Contribuciones

Las contribuciones son bienvenidas. Para cambios importantes:

1. Fork el proyecto
2. Crea una rama (`git checkout -b feature/mejora`)
3. Commit los cambios (`git commit -am 'Agrega mejora'`)
4. Push a la rama (`git push origin feature/mejora`)
5. Abre un Pull Request

## 📄 Licencia

Este proyecto está bajo la Licencia MIT.

## 📧 Contacto

Para preguntas o soporte: [tu-email@ejemplo.com](mailto:tu-email@ejemplo.com)

---

**Última actualización:** Febrero 2026
