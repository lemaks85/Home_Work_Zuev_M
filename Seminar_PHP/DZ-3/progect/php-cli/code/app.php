<?php

// подключение файлов логики
// require_once('src/main.function.php');
// require_once('src/template.function.php');
// require_once('src/file.function.php');

require_once('vendor/autoload.php');

// вызов корневой функции
$result = main("config.ini");
// вывод результата
echo $result;
