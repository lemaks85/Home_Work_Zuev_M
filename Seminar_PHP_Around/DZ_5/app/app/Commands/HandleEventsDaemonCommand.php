<?php

declare(ticks=1);

namespace App\Commands;

use App\Application;

class HandleEventsDaemonCommand extends Command
{
    protected Application $app;

    const CACHE_PATH = __DIR__ . '/../../cache.txt';

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function run(array $options = []): void
    {
        $this->initPcntl();

        $this->daemonRun($options);
    }

    private function initPcntl(): void
    {
        $callback = function ($signal) {
            switch ($signal) {
                case SIGTERM:
                case SIGINT:
                case SIGHUP:
                    $lastData = $this->getCurrentTime();
                    $lastData[0] = $lastData[0] - 1;

                    file_put_contents(self::CACHE_PATH, json_encode($lastData));
                    exit;
            }
        };

        pcntl_signal(SIGTERM, $callback);
        pcntl_signal(SIGHUP, $callback);
        pcntl_signal(SIGINT, $callback);
    }

    private function daemonRun(array $options)
    {
        $lastData = $this->getLastData();

        $handleEventsCommand = new HandleEventsCommand($this->app);

        while (true) {
            if ($lastData === $this->getCurrentTime()) {
                sleep(10);
                continue;
            }

            $handleEventsCommand->run($options);
            $lastData = $this->getCurrentTime();
            sleep(10);
        }
    }

    public function getCurrentTime(): array
    {
        return [
            date("i"),
            date("H"),
            date("d"),
            date("m"),
            date("w")
        ];
    }

    private function getLastData(): array
    {
        $lastData = file_get_contents(self::CACHE_PATH);

        if ($lastData) {
            return json_decode($lastData);
        }

        return [];
    }
}