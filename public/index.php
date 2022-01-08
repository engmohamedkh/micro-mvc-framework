<?php 
//root of website which call all from it
//to get path for all folder in your project by easy way to call its classes
define('DS',DIRECTORY_SEPARATOR);  //as linx sys / and other \ so use this function 
define('ROOT',dirname(__DIR__));
define('APP',ROOT.DS.'app');
define('Controllers',APP.DS.'controllers');
define('MODELS',APP.DS.'models');
define('VIEW',APP.DS.'view');
define('CORE',APP.DS.'core');
define('CONFIG',APP.DS.'config');

//config
define('SERVER','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','mvc');
define('DATABASE_TYPE','mysql');

define('DOMAIN_NAME','http://mvc.test/');


 
//use autoload to can create any object from my project without create include to it as use autoload to get its fills

require_once("../vendor/autoload.php"); //only which will need to require to require all need folder by its name space
 


$app=new MVC\core\app();    
