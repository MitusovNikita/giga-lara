<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueController extends Controller
{
    // vue js in blade
    public function index()
    {
        // TODO: add blade with vue
        // Fetch users from the database, for example
        return view('vue.index'); // return a view
    }

    // frontend as php doc
    public function simple()
    {
        return response()->file(resource_path('views/vue/simple.php'));
    }

    // vue js in php frontend file
    public function simpleVue()
    {
        return response()->file(resource_path('views/vue/simple-vue.php'));
    }
}
