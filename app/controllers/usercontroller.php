<?php 

namespace MVC\controllers;

use MVC\models\user;     // to can call the model use class function

use MVC\core\controller;   //TO CAN IHERT any class need must be use its namespace

use MVC\core\session;   //to can get all post and get input data

use GUMP;

class usercontroller extends controller
{

    public function __construct()
    {
        session::start();
    
       

        
        $userdata=session::get('user');  //if the session user set through login function so user can acces this class 

        if(empty($userdata))
            {
                echo'class not access';
                die; //not have access on this class 
            }

        
    }


    public function index()
    {
        echo'hallo';
    }

}
    








?>