<?php

namespace App\Commands;

use App\Application;

//php runner -c test
class TestCommand extends Command
{
    protected Application $app;
    
    public function __construct(Application $app)
    {
        $this->app = $app;
    }
    
    public function run(array $options = []): void
    {
        // web_app_eco/lesson_3/app/tests/HandleEventsCommandTest.php
        
        exec('php vendor/phpunit/phpunit/phpunit tests/', $result);
        $result = [
            str_pad('--- ' . date('Y-m-d H:i:s') . ' ---', 120, '-'),
            ...$result,
            str_pad('', 120, '-'),
        ];
        echo "\n" . implode("\n", $result) . "\n\n";
    }
}