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
************************* *//


namespace Nandev\MongoNativeDriver;

class Config {  

  private static $connection = array('config' => array() ) ;

  public function __construct() {
       $databaseConfig = include __DIR__ ."/../../config/database.php"   ; 
       self::$connection['config']['database'] = $databaseConfig['connections']['mongodb']['database']  ;
       self::$connection['config']['host'] = $databaseConfig['connections']['mongodb']['host']  ;
       self::$connection['config']['port'] = $databaseConfig['connections']['mongodb']['port']  ;
       self::$connection['config']['username'] = $databaseConfig['connections']['mongodb']['username']  ;
       self::$connection['config']['password'] = $databaseConfig['connections']['mongodb']['password']  ;
  }
   
  public static function getDb(){
   return self::$connection['config']['database']  ;
  }  

  public static function setDb(String $dbname){
     // print "newdb is set -> $dbname <- <br>" ;
      self::$connection['config']['database'] =  $dbname  ;
   }  

  public static  function getHost(){
   return self::$connection['config']['host']  ;
  }  
 
  public static  function getPort(){
   return self::$connection['config']['port']  ;
  }  
 
  public static  function getUser(){
   return self::$connection['config']['username']  ;
  }  

  public static  function getPassword(){
   return self::$connection['config']['password']  ;
  }  
 
 
}
