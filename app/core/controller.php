<?php 

namespace MVC\core;

//all control dunction need to call view page so i make all control classes inherit this function from parent control

class controller
{
    public function view($path,$parms)
        {
            extract($parms); // converts array keys (into) variable names and array values into variable value
        
            require_once(VIEW.$path.".php");
        }
 
}
    
