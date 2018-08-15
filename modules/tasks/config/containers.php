<?php

$container['projects_model'] = function ($c) {
    return new \Gerenciador\Tasks\Models\Projects($c);
};

$container['tasks_model'] = function ($c) {
    return new \Gerenciador\Tasks\Models\Tasks($c);
};

$container['sections_model'] = function ($c) {
    return new \Gerenciador\Tasks\Models\Sections($c);
};

$container['subtasks_model'] = function ($c) {
    return new \Gerenciador\Tasks\Models\SubTasks($c);
};
