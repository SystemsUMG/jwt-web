# JWT Web README

This is a Laravel project that utilizes PHP 8.2. Below are some important steps to get started:

## Prerequisites

- PHP 8.2
- Composer (https://getcomposer.org/)

## Installation

1. Navigate to the project directory:
```bash
cd jwt-web
```

2. Install project dependencies using Composer:
```bash
composer install
```

3. Create a `.env` file by duplicating `.env.example` and configure your database settings:
```bash
cp .env.example .env
```

4. Generate a new application key:
```bash
php artisan key:generate
```

5. Run database migrations to create the necessary tables:
```bash
php artisan migrate
```

6. Generate a JWT secret key for API authentication:
```bash
php artisan jwt:secret
```

## Usage

You can now start using the Laravel application. To run a development server, use:
```bash
php artisan serve
```
Access the application in your web browser at http://localhost:8000.

## Additional Information
This project is open-source and available under the [Laravel Documentation](https://laravel.com/docs/10.x).

## License
This project is open-source and available under the [MIT license](https://opensource.org/licenses/MIT).
