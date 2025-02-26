<?php

namespace App\Helpers;

class Str
{
    public static function studly($value)
    {
        $value = ucwords(str_replace(['-', '_'], ' ', $value));
        return str_replace(' ', '', $value);
    }
    
    public static function camel($value)
    {
        return ucfirst(static::studly($value));
    }
}