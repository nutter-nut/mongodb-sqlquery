# mongodb-sqlquery
Mongodb using SQL style
-Setup



Configuration
-------------
add below setings to interface to use MongoDB to file `config/database.php`:

```php
'mongodb' => [
    'driver' => 'mongodb',
    'host' => env('DB_HOST', '127.0.0.1'),
    'port' => env('DB_PORT', 27017),
    'database' => env('DB_DATABASE', 'nantaburi'),
    'username' => env('DB_USERNAME', 'saniancity'),
    'password' => env('DB_PASSWORD', 'secret'),
    'options' => [
        'database' => env('DB_AUTHENTICATION_DATABASE', 'admin'), // required with Mongo 3+
    ],
],
``
    
