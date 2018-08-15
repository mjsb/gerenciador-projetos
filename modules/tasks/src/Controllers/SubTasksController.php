<?php

namespace Gerenciador\Tasks\Controllers;

use Gerenciador\CrudController;

class SubTasksController extends CrudController
{
    protected function getModel(): string
    {
        return 'subtasks_model';
    }
}