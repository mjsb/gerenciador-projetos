<?php 

require __DIR__.'/vendor/autoload.php';

$router = new gerenciador\Router;

$router->add('/', function(){
    return 'Homepage';
});

$router->add('/projects', function(){
    return '';
});