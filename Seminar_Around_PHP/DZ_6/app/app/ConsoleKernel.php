<?php

namespace App;

use App\Exceptions\CommandNotFound;
use App\Helpers\Str;

class ConsoleKernel
{
    const HELP_TEXT = "
    Для работы необходимо ввести название команды через флаг -c или --command .
    
    Пример: 
    php runner -c parser 
    ";
    
    private Application $app;
    
    public function __construct(Application $app)
    {
        $this->app = $app;
    }
    
    public function handle()
    {
        $shortopts = 'c:';
        
        $longopts = ["command:"];
        
        $options = getopt($shortopts, $longopts);
        $command = $options['c'] ?? ($options['command'] ?? '');
        
        if (empty($command)) {
            echo self::HELP_TEXT;
        } else {
            $controllerClass = '\\App\\Commands\\' . Str::camel($command) . 'Command';
            
            if (class_exists($controllerClass)) {
                $controller = new $controllerClass($this->app);
                $controller->run();
            } else {
                throw new CommandNotFound('Command "' . $command . '" not exists.');
            }
        }
        
        exit(0); // exit code
    }
}
