<?php
/*
* Class functions  
* - add Gtrade customer user 
* - qurey Gtrade customer         
*/

namespace Nandev\Models;

use Nandev\MongoNativeDriver\Model as NanModel ;

class AdminModel extends NanModel
{  
   /*
   * @override $collection to all stack extends back to -> Class Model -> Class Connection( Using)
   * 
   */ 
   protected  $collection = "system.users" ;  
   protected  $database = "admin" ;  
  

 
}
