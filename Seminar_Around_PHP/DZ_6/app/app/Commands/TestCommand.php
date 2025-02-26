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
        // exec('php vendor/bin/phpunit tests/', $result);
        // exec('php vendor/bin/phpunit --coverage-text tests/', $result);
        exec('php vendor/bin/phpunit -c phpunit.xml', $result);
        // exec('vendor/bin/phpunit --coverage-text -c phpunit.xml', $result);
        
        $result = [
            str_pad('--- ' . date('Y-m-d H:i:s') . ' ---', 120, '-'),
            ...$result,
            str_pad('', 120, '-'),
        ];
        echo "\n" . implode("\n", $result) . "\n\n";
    }
}