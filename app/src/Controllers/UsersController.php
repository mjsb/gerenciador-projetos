<?php 

namespace App\Controllers;

use Gerenciador\CrudController;

class UsersController extends CrudController
{
    protected function getModel(): string
    {
        return 'users_model';
    }
}