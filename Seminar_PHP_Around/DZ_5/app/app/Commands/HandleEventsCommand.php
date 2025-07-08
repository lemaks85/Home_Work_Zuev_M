<?php

namespace App\Commands;

use App\Application;
use App\Database\SQLite;
use App\EventSender\EventSender;
use App\Models\Event;
use App\Telegram\TelegramApiImpl;

class HandleEventsCommand extends Command
{
    protected Application $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function run(array $options = []): void
    {
        $event = new Event(new SQLite($this->app));

        $events = $event->select();

        $eventSender = new EventSender(new TelegramApiImpl($this->app->env('TELEGRAM_TOKEN')));
        //die(var_dump(999));
        foreach ($events as $event) {
            if ($this->shouldEventBeRan($event)) {
                $eventSender->sendMessage($event['receiver_id'], $event['text']);
            }
        }
    }

    public function shouldEventBeRan(array $event): bool
    {
        $result = true;
        $map = [
            // date => event
            'i' => 'minute',
            'H' => 'hour',
            'd' => 'day',
            'm' => 'month',
            'w' => 'day_of_week',
        ];
        $check = [];

        foreach ($map as $dateKey => $eventKey) {
            $check["$eventKey -> $dateKey"] = "$event[$eventKey] -> $event[$eventKey]";
            if (!($event[$eventKey] === null || (int)date($dateKey) === (int)$event[$eventKey])) {
                $result = false;
            }
        }

        return $result;
    }
}