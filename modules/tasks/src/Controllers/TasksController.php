<?php

namespace Gerenciador\Tasks\Controllers;

use Gerenciador\CrudController;

class TasksController extends CrudController
{
    protected function getModel(): string
    {
        return 'tasks_model';
    }
}