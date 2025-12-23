# Latest Laravel App

A clean and modern Laravel application starter, ready for development and deployment.

## Features

- Laravel 11+
- API and Web ready
- CI with GitHub Actions
- Composer & NPM dependencies managed
- Ready for deployment

## Setup Instructions

```bash
# Clone the repo
git clone https://github.com/your-username/latest-laravel.git
cd latest-laravel

# Install dependencies
composer install
cp .env.example .env
php artisan key:generate

# Setup database
php artisan migrate

# Start local server
php artisan serve
