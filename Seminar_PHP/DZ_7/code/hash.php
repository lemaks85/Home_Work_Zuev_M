<?php

$hash = password_hash('123', PASSWORD_DEFAULT);

if (password_verify('1232', $hash)) {

}