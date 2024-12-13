<?php

$address = '/code/birthdays.xml';

$xml = simplexml_load_file($address);
print_r($xml);