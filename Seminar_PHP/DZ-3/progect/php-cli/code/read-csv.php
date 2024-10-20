<?php

$address = '/code/birthdays.txt';
$fileHandle = fopen($address, 'r');
while ($data = fgetcsv($fileHandle, 1000, ",")) {
    print_r($data);
}
