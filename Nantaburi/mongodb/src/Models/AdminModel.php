<?php
/* ******************* 
* project Nandave
* edit file composor.json 
* Create by team Nandev: 
*                       Anan P.
*                       Suphachai.
*                       Tanapath.
*                       
* config: composer.json 
* 
* add  : "psr-4": { 
*     
*              "Nandev\\" : "nandev/"
*
*        }
* and run command below in  connamd line :
* $ composer dumpautoload
************************* */

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
