<?php

require_once('./vendor/autoload.php');

use Geekbrains\Application1\Application;

$app = new Application();
echo $app->run();