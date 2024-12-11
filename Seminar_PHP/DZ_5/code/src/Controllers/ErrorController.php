<?php

namespace Geekbrains\Application1\Controllers;
use Geekbrains\Application1\Render;

class ErrorController {

    public function classNotFound(string $controllerName) {
        $render = new Render();
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
        return $render->renderPage('classnotfound.twig', ['controllerName' => $controllerName]);
    }

    public function methodNotFound(string $methodName) {
        $render = new Render();
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
        return $render->renderPage('methodnotfound.twig', ['methodName' => $methodName]);
    }
}