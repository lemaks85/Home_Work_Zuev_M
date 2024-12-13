<?php

$file = fopen("/code/example.txt", "rb");
if ($file === false) {
    echo("Файл невозможно открыть или он не существует");
}
else {
    $contents = ''; 
    while (!feof($file)) {
        $contents .= fread($file, 100);
    }
    fclose($file);
    echo $contents;
}
