<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PageController;
Route::resource('page', PageController::class);

use App\Http\Controllers\VueController;
Route::resource('vue', VueController::class);

use App\Http\Controllers\MongoController;
Route::resource('mongo', MongoController::class);
