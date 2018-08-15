<?php

namespace Gerenciador\Tasks\Controllers;

use Gerenciador\CrudController;

class ProjectsController extends CrudController
{
    protected function getModel(): string
    {
        return 'projects_model';
    }
}