<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueController extends Controller
{
    // Show all users
    public function index()
    {
        // TODO: add blade with vue
        // Fetch users from the database, for example
        return view('vue.index'); // return a view
    }

    public function simple()
    {
        return response()->file(resource_path('views/vue/simple.php'));
    }

    public function simpleVue()
    {
        return response()->file(resource_path('views/vue/simple-vue.php'));
    }
}
