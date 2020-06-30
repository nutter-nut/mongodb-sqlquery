<?php

namespace Nandev\Models;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoDB ;

class Products extends MongoDB
{
    protected $connection = 'mongodb';
    protected $collection = 'products';

    protected $fillable = [
        'name', 'description','description_th', 'image','price','type_id','group_id'
    ];
}



