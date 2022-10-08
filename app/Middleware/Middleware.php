<?php
namespace Davit37\PhpMvc\Middleware;

interface Middleware 
{
    public function before(): void;
}