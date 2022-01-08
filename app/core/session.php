<?php 

namespace MVC\core;

class session
{
    public static function start()
        {
            @session_start();  // to escape the error 
        }
    
    public static  function set($key,$value)  //more secure   than use directly
        {
            $_SESSION[$key]=$value;
        }

    public static function get($key)
        {
            if(isset($_SESSION[$key]))    
            return($_SESSION[$key]);
        }

    public static function stop()
        {
            session_destroy();
        }
}











?>