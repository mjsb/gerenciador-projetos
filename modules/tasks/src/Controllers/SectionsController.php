<?php

namespace Gerenciador\Tasks\Controllers;

use Gerenciador\CrudController;

class SectionsController extends CrudController
{
    protected function getModel(): string
    {
        return 'sections_model';
    }

    public function listByProject($c, $request)
    {
        $id = $request->query->get('id');
        return $c['sections_model']->all(['project_id' => $id]);
    }
}