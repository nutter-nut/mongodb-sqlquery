<?php

namespace Nandev\Models;

use Illuminate\Database\Eloquent\Model;


class Products extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'products';

    protected $fillable = [
        'name', 'description','description_th', 'image','price','type_id','group_id'
    ];
}



