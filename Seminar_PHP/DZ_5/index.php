<?php


require_once(__DIR__ . '/vendor/autoload.php');

use Geekbrains\Application1\Application;

$app = new Application();
echo $app->run();