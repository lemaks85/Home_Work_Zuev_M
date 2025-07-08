<?php

namespace App\Telegram;

interface TelegramApi
{
    public function __construct(string $token);
    
    /**
     * @return TelegramMessageDto[]
     */
    public function getMessages(int $offset): array;
    
    public function sendMessage(string $chatId, string $text);
}