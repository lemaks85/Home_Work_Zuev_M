<?php

namespace App\EventSender;

use App\Telegram\TelegramApi;

class EventSender
{
    private TelegramApi $telegram;
    
    public function __construct(TelegramApi $telegram)
    {
        $this->telegram = $telegram;
    }

    public function sendMessage(string $receiver, string $message)
    {
        $this->telegram->sendMessage($receiver, $message);

        echo date('d.m.y H:i') . " Я отправил сообщение $message получателю с id $receiver\n";
    }
}