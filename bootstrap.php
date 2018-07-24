<?php 

require __DIR__.'/vendor/autoload.php';

$router = new gerenciador\Router;

$router->add('GET', '/', function(){
    return 'Homepage';
});

$router->add('GET', '/projects/(\d+)', function($params){
    return 'Listando projeto id: ' . $params[1];
});

try {
    echo $router->run();
} catch (\gerenciador\Exceptions\HttpException $e){
    echo $e->getMessage();
    #echo json_encode(['error' => $e->getMessage()]);
}