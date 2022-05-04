<?php

namespace App\Core;

class App
{
    protected static $container=[];

    public static function bind($key, $value)
    {
        static::$container[$key]=$value;
    }

    public static function get($key)
    {
        return static::$container[$key];
    }
}
