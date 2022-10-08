<?php

namespace Davit37\PhpMvc\Controller;

use Davit37\PhpMvc\App\View;

class HomeController
{
    public function index() 
    {
        View::render('Home/index',[
            'title' => 'Index Login'
        ]);
    }

}