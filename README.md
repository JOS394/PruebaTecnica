# 🚀 Prueba Técnica App - Laravel

Una aplicación web moderna desarrollada con Laravel que incluye funcionalidades de consumo de API y registro de candidatos.

## 📋 Características

- **🎨 Diseño Moderno**: Interfaz elegante y responsiva
- **📊 Consumo de API**: Endpoint personalizado para mostrar datos JSON
- **📝 Formulario de Registro**: Sistema completo de registro de candidatos
- **🎯 Validación**: Validación robusta en frontend y backend
- **📱 Responsive**: Optimizado para dispositivos móviles y desktop
- **🎨 UI/UX**: Diseño moderno con animaciones y efectos visuales

## 🛠️ Tecnologías Utilizadas

- **Backend**: Laravel 12
- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap 4
- **Base de Datos**: MySQL/PostgreSQL
- **Iconos**: Font Awesome 5
- **Estilos**: CSS personalizado con gradientes y animaciones

## 📦 Requisitos Previos

Antes de comenzar, asegúrate de tener instalado:

- **PHP** >= 8.1
- **Composer** >= 2.0
- **Node.js** >= 16.0 (para compilar assets)
- **MySQL** >= 8.0 o **PostgreSQL** >= 13.0
- **Git**

## 🚀 Instalación y Configuración

### 1. Clonar el Repositorio

```bash
git clone <url-del-repositorio>
cd pruebaTecnicaApp
```

### 2. Instalar Dependencias

```bash
# Instalar dependencias de PHP
composer install

# Instalar dependencias de Node.js (si usas Vite)
npm install
```

### 3. Configurar Variables de Entorno

```bash
# Copiar archivo de configuración
cp .env.example .env

# Generar clave de aplicación
php artisan key:generate
```

### 4. Configurar Base de Datos

Edita el archivo `.env` con tus credenciales de base de datos:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=prueba_tecnica_app
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_password
```

### 5. Ejecutar Migraciones y Seeders

```bash
# Ejecutar migraciones
php artisan migrate

# Ejecutar seeders (opcional)
php artisan db:seed
```

### 6. Configurar Almacenamiento

```bash
# Crear enlace simbólico para storage
php artisan storage:link
```

### 7. Compilar Assets (Opcional)

```bash
# Para desarrollo
npm run dev

# Para producción
npm run build
```

### 8. Iniciar el Servidor

```bash
# Servidor de desarrollo
php artisan serve

#Servicio de desarrollo Frontend
npm run dev
```

La aplicación estará disponible en: `http://localhost:8000`

## 📁 Estructura del Proyecto

```
pruebaTecnicaApp/
├── app/
│   ├── Http/Controllers/     # Controladores
│   ├── Models/              # Modelos Eloquent
├── database/
│   ├── migrations/          # Migraciones de BD
│   ├── seeders/            # Seeders
│   └── factories/          # Factories para testing
├── resources/
│   ├── views/              # Vistas Blade
│   ├── css/                # Estilos CSS
│   └── js/                 # JavaScript
├── routes/
│   └── web.php             # Rutas web
└── public/                 # Archivos públicos
```

## 🎯 Funcionalidades Principales

### 1. Página de Inicio
- Diseño hero con animaciones
- Sección de características
- Navegación intuitiva

### 2. Consumo de API (/menu-view)
- Endpoint personalizado `/menu`
- Visualización de datos JSON
- Interfaz interactiva para recargar datos

### 3. Formulario de Registro (/somos-emkt)
- Registro de candidatos
- Validación completa
- Almacenamiento en base de datos
- Interfaz moderna con slider

## 🔧 Comandos Útiles

```bash
# Limpiar caché
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Ver rutas disponibles
php artisan route:list

# Crear nuevo controlador
php artisan make:controller NombreController

# Crear nueva migración
php artisan make:migration create_tabla_table

# Ejecutar tests
php artisan test
```

## 🌐 Rutas Disponibles

- **GET** `/` - Página de inicio
- **GET** `/menu-view` - Vista de consumo de API
- **GET** `/somos-emkt` - Formulario de registro
- **POST** `/somos-emkt` - Procesar formulario de registro

## 🎨 Personalización

### Estilos CSS
Los estilos principales se encuentran en:
- `resources/views/layouts/partials/style.blade.php`
- `resources/views/partials/menu/style.blade.php`

### Vistas
Las vistas están organizadas en:
- `resources/views/layouts/` - Layouts principales
- `resources/views/home/` - Página de inicio
- `resources/views/emkt/` - Formulario de registro
- `resources/views/menu.blade.php` - Vista de API

## 🐛 Solución de Problemas

### Error de Permisos
```bash
# En sistemas Unix/Linux
chmod -R 755 storage bootstrap/cache
```

### Error de Composer
```bash
# Limpiar caché de Composer
composer clear-cache
composer install --no-cache
```

### Error de Base de Datos
```bash
# Verificar conexión
php artisan tinker
DB::connection()->getPdo();
```

## 📝 Notas de Desarrollo

- El proyecto usa Bootstrap 4 para el diseño responsivo
- Los iconos son de Font Awesome 5
- El footer tiene un diseño elegante con fondo negro
- Las animaciones están optimizadas para rendimiento

## 🤝 Contribución

1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

## 📄 Licencia

Este proyecto está bajo la Licencia MIT. Ver el archivo `LICENSE` para más detalles.

## 📞 Contacto

- **Email**: info@e-mktcompany.com
- **Website**: [E-MKT Company](https://e-mktcompany.com)
- **LinkedIn**: [E-MKT Company](https://www.linkedin.com/company/emkt-company/)

---

⭐ Si este proyecto te ha sido útil, ¡no olvides darle una estrella!
