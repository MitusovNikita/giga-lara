<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\Magic;

class MagicController extends Controller
{
    private $magicService;

    public function __construct(Magic $magic)
    {
        $this->magicService = $magic;
    }

    // Show all users
    public function index(Magic $magic)
    {
        // service 1
// $magic = new Magic();
// $string = $magic->myFunction();

        // service 2
//        echo $magic->myFunction();

        // service 3
        echo $this->magicService->myFunction();

        // get

        //set

        // destructor
    }
}
