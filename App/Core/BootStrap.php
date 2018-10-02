<?php
namespace App\Core;
use App\Controllers\indexController;
use App\Controllers\contactController;
use App\Core\Routing\Request;
use App\Core\Routing\Router;

class BootStrap{

    function init(){
        session_start();
       $Controller = Router::load('routes.php')
       ->direct(Request::uri(), Request::getMethod()); 
      
       if($Controller ==="indexController"){
         
            $contr = new indexController();
            $contr->getView();
        }
        if($Controller ==="contactController"){
         
            $contr = new contactController();
            $contr->getView();
        }
    }
}