<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueController extends Controller
{
    // Show all users
    public function index()
    {
        // Fetch users from the database, for example
        return view('vue.index'); // return a view
    }
}
