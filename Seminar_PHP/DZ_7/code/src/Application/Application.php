<?php

namespace Geekbrains\Application1\Application;

use Geekbrains\Application1\Domain\Controllers\AbstractController;
use Geekbrains\Application1\Infrastructure\Config;
use Geekbrains\Application1\Infrastructure\Storage;
use Geekbrains\Application1\Application\Auth;

class Application {

    private const APP_NAMESPACE = 'Geekbrains\Application1\Domain\Controllers\\';

    private string $controllerName;
    private string $methodName;

    public static Config $config;

    public static Storage $storage;

    public static Auth $auth;

    public function __construct(){
        Application::$config = new Config();
        Application::$storage = new Storage();
        Application::$auth = new Auth();
    }

    public function runApp(): string {
        $memory_start = memory_get_usage();

        $result = $this->run();

        $memory_end = memory_get_usage();
        //добавить if config...(Application::$config->get()['log']['DB_MEMORY_LOG']
        $this->saveMemoryLog($memory_end - $memory_start);

        return $result;
    }

    private function saveMemoryLog(int $memory): void {
        $logSql = "INSERT INTO memory_log(`user_agent`, `log_datetime`, `url`, `memory_volume`) 
            VALUES (:user_agent, :log_datetime, :url, :memory_volume)";


        $handler = Application::$storage->get()->prepare($logSql);
        $handler->execute([
            'user_agent' => $_SERVER['HTTP_USER_AGENT'],
            'log_datetime' => date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']),
            'url' => $_SERVER['REQUEST_URI'],
            'memory_volume' => $memory
        ]);
    }

    public function run() : string {
        session_start();
        Application::$auth->restoreSession();

        $routeArray = explode('/', $_SERVER['REQUEST_URI']);

        if(isset($routeArray[1]) && $routeArray[1] != '') {
            $controllerName = $routeArray[1];
        }
        else{
            $controllerName = "page";
        }

        $this->controllerName = Application::APP_NAMESPACE . ucfirst($controllerName) . "Controller";

        if(class_exists($this->controllerName)){
            // пытаемся вызвать метод
            if(isset($routeArray[2]) && $routeArray[2] != '') {
                $methodName = $routeArray[2];
            }
            else {
                $methodName = "index";
            }

            $this->methodName = "action" . ucfirst($methodName);

            if(method_exists($this->controllerName, $this->methodName)){
                $controllerInstance = new $this->controllerName();

                if($controllerInstance instanceof AbstractController){
                    if($this->checkAccessToMethod($controllerInstance, $this->methodName)){
                        return call_user_func_array(
                            [$controllerInstance, $this->methodName],
                            []
                        );
                    }
                    else{
                        return "Нет доступа к методу";
                    }
                }
                else{
                    return call_user_func_array(
                        [$controllerInstance, $this->methodName],
                        []
                    );
                }
            }
            else {
                return "Метод не существует";
            }
        }
        else{
            return "Класс $this->controllerName не существует";
        }
    }

    private function checkAccessToMethod(AbstractController $controllerInstance, string $methodName): bool {
        $userRoles = $controllerInstance->getUserRoles();



        $rules = $controllerInstance->getActionsPermissions($methodName);

        $rules[] = 'user';

        $isAllowed = false;

        if(!empty($rules)){
            foreach($rules as $rolePermission){
                if(in_array($rolePermission, $userRoles)){
                    $isAllowed = true;
                    break;
                }
            }
        }

        return $isAllowed;

    }
}