<?php

namespace Gerenciador\Tasks\Controllers;

use Gerenciador\CrudController;

class TasksController extends CrudController
{
    protected function getModel(): string
    {
        return 'tasks_model';
    }

    public function listByProject($c, $request)
    {
        $id = $request->query->get('id');
        return $c['tasks_model']->getByProjectId($id);
    }
}