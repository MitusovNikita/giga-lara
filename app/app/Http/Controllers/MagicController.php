<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\Magic;

class MagicController extends Controller
{
    // Show all users
    public function index()
    {
        // constructor
        $magic = new Magic();
        $string = $magic->myFunction();

        // get


        //set

        // destructor
    }
}
