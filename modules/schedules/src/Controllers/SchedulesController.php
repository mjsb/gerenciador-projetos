<?php

namespace Gerenciador\Schedules\Controllers;

use Gerenciador\CrudController;

class SchedulesController extends CrudController
{
    protected function getModel(): string
    {
        return 'schedules_model';
    }
}