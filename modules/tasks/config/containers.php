<?php

$container['projects_model'] = function ($c) {
    $id = $c['loggedUser']['user']->id;
    #debug($id);
    $projects = new \Gerenciador\Tasks\Models\Projects($c);
    $projects->user_id = $id;

    return $projects;
};

$container['tasks_model'] = function ($c) {

    $id = $c['loggedUser']['user']->id;
    #debug($id);
    $tasks = new \Gerenciador\Tasks\Models\Tasks($c);
    $tasks->user_id = $id;

    return $tasks;
};

$container['sections_model'] = function ($c) {

    $id = $c['loggedUser']['user']->id;
    #debug($id);
    $sections = new \Gerenciador\Tasks\Models\Sections($c);
    $sections->user_id = $id;

    return $sections;
};

$container['subtasks_model'] = function ($c) {

    $id = $c['loggedUser']['user']->id;
    #debug($id);
    $subtasks = new \Gerenciador\Tasks\Models\SubTasks($c);
    $subtasks->user_id = $id;

    return $subtasks;
};