<?php

namespace App\Commands;

use App\Application;

abstract class Command
{
    protected Application $app;

    abstract function run(array $options = []): void;
}