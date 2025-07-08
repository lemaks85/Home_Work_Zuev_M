<?php

namespace App;

use Dotenv\Dotenv;

class Environment
{
    private Application $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
        $dotenv = Dotenv::createImmutable(__DIR__ . '/..');
        $dotenv->load();
    }

    public function get($key, $default = null)
    {
        return $_ENV[$key] ?? $default;
    }
}