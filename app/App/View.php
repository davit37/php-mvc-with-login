<?php

namespace Davit37\PhpMvc\App;

class View 
{
    public static function render(string $view, $model)
    {
        require __DIR__.'/../View/'.$view.'.php';
    }
}