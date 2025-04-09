<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class RedisController extends Controller
{
    // redis as nosql db
    public function nosql()
    {
        // сохраняем строку в Redis
        Redis::set('id', 1);

        // хранить ограниченное время (5 сек)
        Redis::setex('num', 5, 1);

        // извлекаю строку из Redis
        $id = Redis::get('id');

        echo $id;
    }

    // as cache
    public function cache () : void
    {
        // кэширование данных на час
        Cache::store('redis')->put('id', 777, 3600);
        echo Cache::store('redis')->get('id');
    }


    // pub, sub queu brocker
    public function pubsub()
    {
        Redis::publish('my_channel', 'Привет из контроллера');
        return response()->json(['status' => "Сообщение отправлено"]);
    }
}
