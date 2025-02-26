<?php

namespace App\Queue;

interface Queueable
{
    public function handle(): void;
    
    public function toQueue(...$args): void;
}