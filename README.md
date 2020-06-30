# mongodb-sqlquery
Mongodb using SQL style 
- Configuraton  add setting in config/database.php of laravel
````
'mongodb' => [
    'driver' => 'mongodb',
    'host' => env('MONGO_DB_HOST', '127.0.0.1'),
    'port' => env('MONGO_MONGO_DB_PORT', 27017),
    'database' => env('MONGO_MONGO_MONGO_DB_DATABASE', 'marcompany'),
    'username' => env('MONGO_MONGO_MONGO_MONGO_DB_USERNAME', 'maradmin'),
    'password' => env('MONGO_DB_PASSWORD', 'password'),
    'options' => [     
        'database' => env('DB_AUTHENTICATION_DATABASE', 'admin'),
    ],
],

````
__________

- Using Laravel for SQL query style  example below 
    - Create Model
````

use Nantaburi\Mongodb\MongoNativeDriver\Model 

class Userdatabase  extends Model {

    protected $collection = "users" ;
    protected $database = "marcompany" ;


}


````

