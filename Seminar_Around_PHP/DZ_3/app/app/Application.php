<?php

namespace App;

class Application
{
    /** @var string|null */
    private ?string $basePath;
    
    public function __construct(string $basePath = null)
    {
        $this->basePath = $basePath;
    }
    
    
    public function run(): void
    {
        if (!$this->env('DEBUG')) {
            ini_set('display_errors', 0);
        }
        $handler = new ConsoleKernel($this);
        $handler->handle();
    }
    
    public function isRunningInConsole(): bool
    {
        return php_sapi_name() === 'cli' || php_sapi_name() === 'phpdbg';
    }
    
    public function path(): ?string
    {
        return $this->basePath;
    }
    
    public function env(string $key, $default = null)
    {
        return (new Environment($this))->get($key, $default);
    }
}