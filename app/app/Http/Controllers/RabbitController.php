<?php
namespace App\Http\Controllers;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class RabbitController
{
    public function index()
    {
        $connection = new AMQPStreamConnection('rabbitmq', 5672, 'guest', 'guest');
        $channel = $connection->channel();
        $channel->queue_declare('hello', false, false, false, false);
        $msg = new AMQPMessage('Hello world');
        $channel->basic_publish($msg, '', 'hello');
        echo 'published';

        $channel->close();
        $connection->close();
    }
}
