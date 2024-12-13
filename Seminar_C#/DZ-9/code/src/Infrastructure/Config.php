<?php

namespace Geekbrains\Application1\Infrastructure;

class Config {

    private string $defaultConfigFile = "/src/config/config.ini";

    private array $applicationConfiguration = [];

    public function __construct(){
        $address = $_SERVER['DOCUMENT_ROOT'] . '/../' . $this->defaultConfigFile;

        if(file_exists($address) && is_readable($address)){
            $this->applicationConfiguration = parse_ini_file($address, true);
        }
        else {
            throw new \Exception("Файл конфигурации не найден");
        }
    }

    public function get(): array {
        return $this->applicationConfiguration;
    }
}