<?php


require_once('./vendor/autoload.php');

use Geekbrains\Application1\Application\Application;

try{
    $app = new Application();

    $result = $app->runApp();

    echo $result;
}
catch(Exception $e){
    echo $e->getMessage();
}

