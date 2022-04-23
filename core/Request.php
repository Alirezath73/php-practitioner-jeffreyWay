<?php

class Request
{
    public static function uri()
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
        );
    }

    public static function method()
    {
        return trim($_SERVER['REQUEST_METHOD']);
    }
}