<?php

require_once('./vendor/autoload.php');

use Geekbrains\Application1\Application\Application;

try{
    $app = new Application();
    echo $app->run();
}
catch(Exception $e){
    echo $e->getMessage();
}
