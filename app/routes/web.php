<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PageController;
Route::resource('page', PageController::class);

use App\Http\Controllers\VueController;
//Route::resource('vue', VueController::class);
Route::get('vue', [VueController::class, 'index']);
Route::get('vue/simple', [VueController::class, 'simple']);



Route::get('vue/simple-vue', [VueController::class, 'simpleVue']);

use App\Http\Controllers\MongoController;
Route::resource('mongo', MongoController::class);

use App\Http\Controllers\MagicController;
Route::resource('magic', MagicController::class);

use App\Http\Controllers\RedisController;
//Route::resource('redis', RedisController::class);
Route::get('redis', [RedisController::class, 'nosql']);
Route::get('redis/cache', [RedisController::class, 'cache']);
Route::get('redis/pubsub', [RedisController::class, 'pubsub']);

use App\Http\Controllers\SwaggerController;
Route::get('swagger/show', [SwaggerController::class, 'show']);
Route::get('swagger/advanced/{num}', [SwaggerController::class, 'advanced']);
