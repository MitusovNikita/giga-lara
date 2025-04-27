<?php
namespace App\Services;

class GreetingsService
{
    public function sayHello(string $name = '') : string
    {
        return "Hello $name";
    }
}
