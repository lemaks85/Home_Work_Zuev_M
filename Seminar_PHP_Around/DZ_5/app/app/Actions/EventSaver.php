<?php

namespace App\Actions;

use App\Models\Event;

class EventSaver
{
    public function __construct(private Event $event)
    {
    }
    
    public function handle(array $eventDto): void
    {
        $this->saveEvent($eventDto);
    }
    
    private function saveEvent(array $params): void
    {
        $this->event->insert(
            implode(', ', array_keys($params)),
            array_values($params)
        );
    }
}