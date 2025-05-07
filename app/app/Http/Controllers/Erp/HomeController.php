<?php
namespace App\Http\Controllers\Erp;

class HomeController
{
    public function index()
    {
        return view('erp.home.index', []);
    }
}
