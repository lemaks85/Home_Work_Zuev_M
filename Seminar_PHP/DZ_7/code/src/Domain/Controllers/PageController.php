<?php

namespace Geekbrains\Application1\Domain\Controllers;
use Geekbrains\Application1\Application\Render;

class PageController {

    public function actionIndex() {
        $render = new Render();
        
        return $render->renderPage('page-index.tpl', ['title' => 'Главная страница']);
    }
}