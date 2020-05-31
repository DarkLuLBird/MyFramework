<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{
    public function loginAction()
    {
        $args = [
            'name' => 'Sooqa',
            'age' => 15,
        ];
        $this->view->render('Login', $args);
    }
    
    public function registerAction()
    {
        $this->view->render();
    }
}