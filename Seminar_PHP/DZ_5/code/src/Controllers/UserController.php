<?php

namespace Geekbrains\Application1\Controllers;

use Geekbrains\Application1\Render;
use Geekbrains\Application1\Models\User;

class UserController {

    public function actionIndex() {
        $users = User::getAllUsersFromStorage();
        
        $render = new Render();

        if(!$users){
            return $render->renderPage(
                'user-empty.twig', 
                [
                    'title' => 'Список пользователей в хранилище',
                    'message' => "Список пуст или не найден"
                ]);
        }
        else{
            return $render->renderPage(
                'user-index.twig', 
                [
                    'title' => 'Список пользователей в хранилище',
                    'users' => $users
                ]);
        }
    }

    public function actionSave() {
        $routeArray = explode('/', urldecode($_SERVER['REQUEST_URI']));
        if(isset($routeArray[3]) && $routeArray[3] != '') {
            $workString = mb_substr($routeArray[3], 1);
            $workData = explode('&', $workString);
            if (count($workData) == 2) {
                $name = str_replace('name=','',$workData[0]);
                $birthday = str_replace('birthday=','',$workData[1]);  
                User::saveUserToStorage($name, $birthday);
            }
        }
        return $this->actionIndex();
    }
}