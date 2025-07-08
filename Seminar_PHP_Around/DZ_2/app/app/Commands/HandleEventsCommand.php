<?php

namespace App\Commands;

use App\Application;

use App\Database\SQLite;

use App\EventSender\EventSender;

use App\Models\Event;
use App\Telegram\TelegramApiImpl;

//use App\Models\EventDto;

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

    private function shouldEventBeRan($event): bool

    {
        $currentMinute = date("i");

        $currentHour = date("H");

        $currentDay = date("d");

        $currentMonth = date("m");

        $currentWeekday = date("w");

        return ((int)$event['minute'] === (int)$currentMinute &&

            (int)$event['hour'] === (int)$currentHour &&

            (int)$event['day'] === (int)$currentDay &&

            (int)$event['month'] === (int)$currentMonth &&

            (int)$event['day_of_week'] === (int)$currentWeekday);
    }

}