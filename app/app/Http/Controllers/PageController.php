<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Show all users
    public function index()
    {
        $tests = User::all();

        echo "<pre>";
        print_r($tests);
        echo "</pre>";
        die;
        echo "OK";
        die;
        $number = rand(0, 100);
        // Fetch users from the database, for example
        return view('page.index', compact('number')); // return a view
    }
}
