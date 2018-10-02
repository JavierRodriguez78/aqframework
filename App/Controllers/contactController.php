<?php
namespace App\Controllers;

use App\Core\Helpers\View;

class contactController
{
    public function getView(){
    
        View::renderTemplate('contact.view.html');

    }
}