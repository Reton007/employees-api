## employees-api

PHP 8.2.8, MySQL 8.0.28, Laravel 10.15.0

## установка

```sh
composer install
cp .env.expample .env
```

открываем файл .env редактором, заполняем

```sh
php artisan key:generate
php artisan migrate
php artisan db:seed
```