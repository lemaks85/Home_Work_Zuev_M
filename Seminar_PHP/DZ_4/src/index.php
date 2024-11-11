<?php

require_once 'Library.php';
require_once 'Paperbooks.php';


$goLibrary = new Paperbooks('PHP Manager','John Lennon', 'training');

print_r($goLibrary);

