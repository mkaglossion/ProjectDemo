<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# ProjectDemo (Laravel Starter)

A clean and modern **Laravel 11+** starter template for building **Web** and **API** applications.  
Includes best-practice setup steps and a production-friendly baseline.

## Features

- Laravel **11+**
- Web & API-ready structure
- GitHub Actions CI (tests workflow)
- Composer & NPM dependency management
- Ready for development and deployment

## Requirements

Make sure you have the following installed:

- **PHP 8.2+**
- **Composer**
- **Node.js + NPM**
- Database: **MySQL / MariaDB / PostgreSQL / SQLite**
- (Optional) Git

## Installation (Step-by-step)

### 1) Clone the repository
```bash
git clone https://github.com/mkaglossion22/ProjectDemo.git
cd ProjectDemo


### 2) Install backend dependencies (Composer)

```bash
composer install
```

### 3) Create environment file

```bash
cp .env.example .env
```

### 4) Generate application key

```bash
php artisan key:generate
```

### 5) Configure the database

Open `.env` and configure your database connection.

#### Option A: SQLite (quick setup)

```bash
touch database/database.sqlite
```

Update `.env`:

```env
DB_CONNECTION=sqlite
```

#### Option B: MySQL / MariaDB

Create a database (example: `projectdemo`) then update `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=projectdemo
DB_USERNAME=root
DB_PASSWORD=
```

### 6) Run migrations

```bash
php artisan migrate
```

### 7) Install frontend dependencies (NPM)

```bash
npm install
```

### 8) Run the application (development)

Start Vite:

```bash
npm run dev
```

Start Laravel:

```bash
php artisan serve
```

Open in browser:

* [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Learning Laravel

Laravel has extensive documentation and learning resources:

* [Documentation](https://laravel.com/docs)
* [Laravel Learn](https://laravel.com/learn)
* [Laracasts](https://laracasts.com)

## Useful Artisan Commands

### Migrations

```bash
php artisan migrate               # Run all migrations
php artisan migrate:rollback      # Rollback last migration
php artisan migrate:refresh       # Reset and re-run migrations
php artisan migrate:fresh --seed  # Drop tables and reseed
php artisan db:seed               # Run seeders only
```

### Generators

```bash
php artisan make:model ModelName                     # Create a model
php artisan make:model ModelName -mcf                # Model + Migration + Controller + Factory
php artisan make:controller ControllerName           # Create a controller
php artisan make:migration create_table_name_table   # Create a migration
php artisan make:seeder SeederName                   # Create a seeder
```

### Auth / UI

```bash
php artisan breeze:install        # Install Laravel Breeze
php artisan ui bootstrap --auth   # (Laravel UI-based auth)
```

### Cache / Optimize

```bash
php artisan optimize:clear   # Clear all caches
php artisan config:clear     # Clear config cache
php artisan config:cache     # Cache configuration
php artisan route:clear      # Clear route cache
```

### Local Development

```bash
php artisan serve            # Start local dev server
php artisan route:list       # List all routes
php artisan env              # Show current environment
php artisan queue:failed     # List failed jobs
```

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## Security

If you discover a security vulnerability, please report it responsibly (avoid posting sensitive details publicly).

## License

This project is open-sourced under the **MIT license**.

```
::contentReference[oaicite:0]{index=0}
```
