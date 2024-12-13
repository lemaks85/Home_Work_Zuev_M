<?php

function main(string $configFileAddress) : string {
    $config = readConfig($configFileAddress);

    if(!$config){
        return handleError("Невозможно подключить файл настроек");
    }

    $functionName = parseCommand();

    if(function_exists($functionName)) {
        $result = $functionName($config);
    }
    else {
        $result = handleError("Вызываемая функция не существует");
    }

    return $result;
}

function parseCommand() : string {
    $functionName = 'helpFunction';
    
    if(isset($_SERVER['argv'][1])) {
        $functionName = match($_SERVER['argv'][1]) {
            'read-all' => 'readAllFunction',
            'search' => 'searchDate',
            'add' => 'addFunction',
            'clear' => 'clearFunction',
            'delete' => 'deleteRecord',
            'read-profiles' => 'readProfilesDirectory',
            'read-profile' => 'readProfile',
            'help' => 'helpFunction',
            default => 'helpFunction'
        };
    }

    return $functionName;
}