<?php 

namespace MVC\core;    //must be create this name space to can call by autoload compsoer in the index

class app
{

   private $controller;    
    private $method;
    public $params; 




public function __construct()

    {
        $this->geturl();
        $this->render();



    }





         
private function geturl()      //to be more scure and waana crte 
    {
        if(!empty($_SERVER['QUERY_STRING']))
            {

                 $url=explode('/',$_SERVER['QUERY_STRING']);     //to divide url to contrpller then method then parem 

                $this->controller=(isset($url[0])) ?$url[0]."controller" :'homecontroller';    //to define controller from url


                $this->method=(isset($url[1])) ?$url[1] :'index';   //to define method from url

                unset($url[0],$url[1]);                           // to reomeve contoller and metjod from url ARRAY 

                $this->params=array_values($url);


            }else
            {
              

              

            }
    }



private function render()          //to get the control class and call its function from url
    {
//echo  $this->method.$this->controller ;die; 

        $controller="MVC\controllers\\".$this->controller;

 
     
        if(class_exists($controller))   //check controller class exist or not which in url
            {
                $controller=new $controller;  //must make object to access non static fuction from controller classes

               if(method_exists($controller,$this->method))      //check function of  controller class exist or not which in url
                   {
                     call_user_func_array([$controller,$this->method],$this->params);    //call class controll function which in url                                                                                   //will call this function and send para to it


                   }
                   else
                   
                   {
                    echo'func not exist'; 
                    }
            }
                   
            else
            {

                echo'class not exist'; 
            }

    }



    



}


?>