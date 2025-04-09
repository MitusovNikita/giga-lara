<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class RedisSubscriber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:subscribe';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Подписка на Redis-канал';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("Ожидает сообщение от Redis");

        Redis::subscribe(['my_channel'], function ($message) {
            $this->info("Получено сообщение - {$message}");
        });
    }
}
