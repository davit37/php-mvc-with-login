<?php

namespace Davit37\PhpMvc\Controller;

use Davit37\PhpMvc\App\View;

class HomeController
{
    public function index(): void 
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Belajar MVC"
        ];

        View::render("Home/index", $model);
    }

    public function hello(): void 
    {
        echo "HomeController.hello()";
    }

    public function world(): void 
    {
        echo "HomeController.world()";
    }

    public function about(): void 
    {
        echo "Author: Davit hermansyah";
    }

}