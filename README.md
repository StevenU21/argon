# Plantilla de Laravel con Argon Dashboard Integrado

[![Estado de la construcción](https://img.shields.io/badge/estado-construcci%C3%B3n_exitosa-brightgreen.svg)](https://github.com/StevenU21/argon)
[![Licencia](https://img.shields.io/badge/licencia-MIT-blue.svg)](https://opensource.org/licenses/MIT)

Este repositorio proporciona una plantilla prediseñada para proyectos de Laravel que requieren un panel de administración. La plantilla está integrada con Argon Dashboard, una plantilla de panel de control elegante y moderna.

## Características

- Integración de Argon Dashboard para una interfaz de usuario elegante y moderna.
- Estructura de carpetas predefinida para una organización eficiente del código.
- Vistas predefinidas para páginas comunes como inicio, perfil, ajustes, etc.
- Formularios predefinidos con validaciones básicas para una rápida implementación.
- Autenticación de usuario lista para usar con páginas de inicio de sesión y registro.
- Documentación clara y detallada para ayudar a los desarrolladores a comenzar rápidamente.
- Uso de componentes reutilizables como tablas, enlaces, botones, paginación y permisos de usuario.

## Requisitos Previos

Antes de comenzar a utilizar esta plantilla, asegúrate de tener instalado:

- [PHP](https://www.php.net/) >= 8.2
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [npm](https://www.npmjs.com/)

## Instalación

1. Clona este repositorio en tu máquina local:

    ```bash
    git clone https://github.com/StevenU21/argon
    ```

2. Navega a la carpeta del proyecto:

    ```bash
    cd argon
    ```

3. Instala las dependencias PHP usando Composer:

    ```bash
    composer install
    ```

4. Instala las dependencias de JavaScript:

    ```bash
    npm install
    ```

5. Copia el archivo de configuración de ejemplo y configura tu entorno:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

6. Ejecuta las migraciones de la base de datos y los seeders:

    ```bash
    php artisan migrate --seed
    ```

7. Inicia el servidor de desarrollo:

    ```bash
    php artisan serve
    ```

## Paquetes Utilizados

### Dependencias

- `php`: ^8.2
- `laravel/breeze`: ^2.0 (para la autenticación y generación de scaffolds)
- `laravel/framework`: ^12.0
- `laravel/tinker`: ^2.9
- `spatie/laravel-permission`: ^6.16 (para la gestión de roles y permisos)
- `spatie/laravel-sluggable`: ^3.7 (para la generación de slugs)

### Dependencias de Desarrollo

- `barryvdh/laravel-debugbar`: ^3.13 (para la depuración)
- `fakerphp/faker`: ^1.23 (para la generación de datos ficticios)
- `laravel/pint`: ^1.13 (para el formateo del código)
- `laravel/sail`: ^1.26 (para el entorno de desarrollo con Docker)
- `mockery/mockery`: ^1.6 (para las pruebas)
- `nunomaduro/collision`: ^8.0 (para la gestión de excepciones)
- `phpunit/phpunit`: ^11.0.1 (para las pruebas unitarias)
- `spatie/laravel-ignition`: ^2.4 (para la gestión y visualización de errores)

## Ejemplos de Componentes

### Tabla de Artículos

```blade
<x-table>
    <x-slot name="thead">
        <tr>
            <x-table.th icon="fas fa-list-ol"> ID</x-table.th>
            <x-table.th icon="fas fa-heading"> Título</x-table.th>
            <x-table.th icon="fas fa-align-left"> Contenido</x-table.th>
            <x-table.th icon="fas fa-tags"> Categoria</x-table.th>
            <x-table.th icon="fas fa-tags"> Etiquetas</x-table.th>
            <x-table.th icon="fas fa-image"> Imagen</x-table.th>
            <x-table.th icon="fas fa-calendar-check"> Fecha de Registro</x-table.th>
            <x-table.th icon="fas fa-cogs"> Acciones</x-table.th>
        </tr>
    </x-slot>
    <x-slot name="tbody">
        <!-- Código para listar los artículos -->
    </x-slot>
</x-table>
```

### Botón de Enlace

```blade
<x-link :href="route('articles.create')" variant="primary" icon="fas fa-plus" text="Nuevo Articulo" can="create articles" />
```

### Paginación

```blade
<x-pagination position="left" :links="$articles->links()" />
```

### Componente de Permiso

```blade
@can('create', App\Models\Article::class)
    <x-link :href="route('articles.create')" variant="primary" icon="fas fa-plus" text="Nuevo Articulo" />
@endcan
```

## Licencia

Este proyecto está bajo la Licencia MIT. Consulta el archivo [LICENSE](LICENSE) para obtener más detalles.
