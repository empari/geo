Empari/Geo
==========
Countries, States and Cities helper for Laravel (only Brazil)

## Installation

### Composer

Execute the following command to get the latest version of the package:

```terminal
composer require empari/geo
```

### Laravel

In your `config/app.php` add `Empari\Geo\GeoServiceProvider::class` to the end of the `providers` array:

```php
'providers' => [
    ...
    Empari\Geo\GeoServiceProvider::class,
],
```

Publish Configuration

```shell
php artisan vendor:publish --provider "Empari/Geo/GeoServiceProvider"
```

Migrate the new tables

```shell
php artisan migrate
```

Seeder Tables

```shell
php artisan db:seed --class="Empari\Geo\Database\Seeds\CountryTableSeeder" 
php artisan db:seed --class="Empari\Geo\Database\Seeds\StateTableSeeder"
php artisan db:seed --class="Empari\Geo\Database\Seeds\CityTableSeeder"
```