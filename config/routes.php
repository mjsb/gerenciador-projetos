<?php

$router->add('GET', '/', function() use ($container) {
    $pdo = $container['db'];
    var_dump($pdo);
    return 'Homepage';
});

$router->add('GET', '/projects/(\d+)', function($params){
    return 'Listando projeto id: ' . $params[1];
});