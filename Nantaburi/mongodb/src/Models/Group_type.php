<?php

namespace Nantaburi\Mongodb\Models;

use Nantaburi\Mongodb\Models\Model as MongoDB ;


class Group_type extends MongoDB
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'group_type';
    protected $fillable = [ 'type_groupid', 'type_groupname_th','type_groupname_en' ];
 
     
}
