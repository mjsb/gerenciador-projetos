<?php

$router->add('GET', '/api/schedules', 'Gerenciador\Schedules\Controllers\SchedulesController::index');
$router->add('POST', '/api/schedules', 'Gerenciador\Schedules\Controllers\SchedulesController::create');