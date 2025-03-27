<?php

namespace App\Services;

class Magic
{
    function __construct()
    {
        echo "constructor";
    }

    function __destruct()
    {
        echo "destructor";
    }

    function __get($value)
    {

    }

    public function myFunction() : string
    {
        return "OK";
    }
}
