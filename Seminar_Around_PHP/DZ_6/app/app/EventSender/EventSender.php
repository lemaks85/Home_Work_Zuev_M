<?php

namespace App\EventSender;

use App\Queue\Queue;
use App\Queue\Queueable;
use App\Telegram\TelegramApi;

class EventSender implements Queueable
{
    private string $receiver;
    private string $message;
    
    public function __construct(
        private TelegramApi $telegram,
        private Queue $queue
    ) {
    }
    
    public function sendMessage(string $receiver, string $message)
    {
        $this->toQueue($receiver, $message);
    }
    
    public function handle(): void
    {
        $this->telegram->sendMessage($this->receiver, $this->message);
    }
    
    public function toQueue(...$args): void
    {
        $this->receiver = $args[0];
        $this->message = $args[1];
        $this->queue->sendMessage(serialize($this));
    }
}