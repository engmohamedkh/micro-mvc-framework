<?php 
namespace MVC\core;

use  Dcblogdev\PdoWrapper\Database;  //to can acesss the db classes sources

class model
    {
         static  function db()  //make it static  to can call it un the models class without create object
        {
            $options = [
                //required
                'username' => USERNAME,
                'database' => DATABASE,
                //optional
                'password' => PASSWORD,
                'type' => DATABASE_TYPE,
                'charset' => 'utf8',
                'host' => SERVER,
                'port' => '3306'
            ];
            
         return($db = new Database($options)); 
        }
    }

?>