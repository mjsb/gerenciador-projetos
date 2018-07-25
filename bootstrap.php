<?php 

require __DIR__.'/vendor/autoload.php';

$router = new gerenciador\Router;

require __DIR__ . '/config/containers.php';
require __DIR__ . '/config/routes.php';

try {
    echo $router->run();
} catch (\gerenciador\Exceptions\HttpException $e){
    echo $e->getMessage();
    #echo json_encode(['error' => $e->getMessage()]);
}