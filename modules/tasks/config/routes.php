<?php

$router->add('GET', '/api/projects', 'Gerenciador\Tasks\Controllers\ProjectsController::index');
$router->add('POST', '/api/projects', 'Gerenciador\Tasks\Controllers\ProjectsController::create');

$router->add('GET', '/api/sections', 'Gerenciador\Tasks\Controllers\SectionsController::index');
$router->add('POST', '/api/sections', 'Gerenciador\Tasks\Controllers\SectionsController::create');

$router->add('GET', '/api/tasks', 'Gerenciador\Tasks\Controllers\TasksController::index');
$router->add('POST', '/api/tasks', 'Gerenciador\Tasks\Controllers\TasksController::create');

$router->add('GET', '/api/subtasks', 'Gerenciador\Tasks\Controllers\SubTasksController::index');
$router->add('POST', '/api/subtasks', 'Gerenciador\Tasks\Controllers\SubTasksController::create');

