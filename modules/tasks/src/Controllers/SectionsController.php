<?php

namespace Gerenciador\Tasks\Controllers;

use Gerenciador\CrudController;

class SectionsController extends CrudController
{
    protected function getModel(): string
    {
        return 'sections_model';
    }
}