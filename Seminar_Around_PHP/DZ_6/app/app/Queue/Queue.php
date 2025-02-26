<?php

namespace App\Queue;

interface Queue
{
    public function sendMessage($message): void;
    
    public function getMessage(): ?string;
    
    public function ackLastMessage(): void;
}