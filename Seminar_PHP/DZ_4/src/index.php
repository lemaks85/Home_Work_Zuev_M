<?php

require_once 'Library.php';
require_once 'Paperbooks.php';
require_once 'Ebook.php';


$book1 = new Paperbooks('PHP Manager','John Lennon', 'training', 'library #_1');
$book2 = new Paperbooks('JS Manager',' Matthew Perry;', 'training', 'library #_1');
$book3 = new Ebook('JS Practice',' Perry Holle;', 'training', 'https://www.qmox.ru/JS.txt');
$book4 = new Ebook('HTML + CSS',' Robert Pattison;', 'training', 'https://www.qmox.ru/HTML_CSS.txt');



// $goLibrary = [$book1, $book2];
// print_r($goLibrary);
echo $book2->bringBook();
