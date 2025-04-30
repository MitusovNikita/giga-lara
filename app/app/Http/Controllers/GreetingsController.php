<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\GreetingsService;
use Illuminate\Http\JsonResponse;

class GreetingsController extends Controller
{
    public function hello(GreetingsService $service) : JsonResponse
    {
        // response good
        return response()->json(['message' => $service->sayHello('Bob')]);
    }


}
