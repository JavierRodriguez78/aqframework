<?php
namespace App\Controllers;

use App\Core\Helpers\View;

class indexController
{
    public function getView(){
    
        View::renderTemplate('home.view.html');

    }
}