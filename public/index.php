<?php

require_once __DIR__.'/../vendor/autoload.php';

use Davit37\PhpMvc\App\Router;
use Davit37\PhpMvc\Controller\HomeController;


Router::add("GET", "/", HomeController::class, "index", []);


Router::run();