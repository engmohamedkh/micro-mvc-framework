<?php
namespace MVC\models; //must be create this name space to can call by autoload compsoer in the index

// in each model class with make functions need to treate with db and use it 
//directly with controller class of this model by create an object and call function

use MVC\core\model;   //TO CAN IHERT any class need must be use its namespace

class user extends model
    {
        public function getall_user()   ///this function can dirtectly use in controller 
            {
                $db=model::db()->rows("select * FROM user");

                return($db);

            }

        
        public function get_user($email,$password)   ///this function can dirtectly use in controller 
            {
                $db=model::db()->row("select* FROM user where  email = ? and password = ?", [$email, $password]);  
                return($db);
                


            }


    }
?>