<?php

namespace gerenciador;

class Router{

    private $routes = [];

    public function add(string $pattern, $callback){

        $this->routes[$pattern] = $callback;

    }

    public function run() {

        $route = $_SERVER['PATH_INFO'] ?? '/';

        }
        
        return 'Página não encontrada';

    }

}