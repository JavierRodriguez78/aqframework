<?php
namespace App\Core\Routing;

class Router{

    protected $routes=[
        'GET'=>[],
        'POST'=>[]
    ];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controller){
        $this->router['GET'][$uri]=$controller;
    }

    public function post($uri, $controller){
        $this->router['POST'][$uri]=$controller;
    }

    public function direct($uri, $requestType){
        if(array_key_exists($uri, $this->router[$requestType])){
            return $this->router[$requestType][$uri];
        }
        return "noLocalizadoControlador";
    }
}