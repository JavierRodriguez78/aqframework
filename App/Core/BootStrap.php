<?php
namespace App\Core;
use App\Core\Helpers\View;

class BootStrap{
    function init(){
        session_start();
        View::renderTemplate('home.view.html');
    }
}