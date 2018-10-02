<?php

namespace App\Core\Helpers;

class View
{
    public static function render($view,$args=[])
    {
        if($args !==null){
            extract($args, EXTR_SKIP);
        }

        $file="App/Views/$view";
        if(is_readable($file)){
            require $file;
        }else{
            echo "error no se puede acceder al archivo";
            die();
        }

    }

    public static function renderTemplate($template, $args=[]){
        static $twig = null;
        if ($twig === null){

            $directory = realpath(__DIR__.'/..');
            $loader = new \Twig_Loader_Filesystem(dirname($directory).'/Views');
            $twig = new \Twig_Environment($loader);
        }
        echo $twig->render($template, $args);
    }
}