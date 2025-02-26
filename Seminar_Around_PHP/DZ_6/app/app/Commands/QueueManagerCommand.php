<?php

namespace App\Commands;

use App\Application;
use App\Queue\Queueable;
use App\Queue\RabbitMQ;

class QueueManagerCommand extends Command
{
    protected Application $app;
    
    public function __construct(Application $app)
    {
        $this->app = $app;
    }
    
    public function run(array $options = []): void
    {
        while (true) {
            $queue = new RabbitMQ('eventSender');
            $message = $queue->getMessage();
            if ($message) {
                /** @var Queueable $class */
                $class = unserialize($message);
                $class->handle();
                $queue->ackLastMessage();
            }
            sleep(10);
        }
    }
}