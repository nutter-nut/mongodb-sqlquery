<?php

namespace Nandev\Models;

use Jenssegers\Mongodb\Eloquent\Model as MongoDB ;


class Group_type extends MongoDB
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'group_type';
    protected $fillable = [ 'type_groupid', 'type_groupname_th','type_groupname_en' ];
 
     
}
