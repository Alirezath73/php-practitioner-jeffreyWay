<?php

namespace App\Helpers;

class Helpers
{
    public static function view($name, $data = [])
    {
        extract($data);

        return require "app/views/{$name}.view.php";
    }

    public static function dd($value)
    {
        die(var_dump($value));
    }

    public static function redirect($uri)
    {
        return header("Location: {$uri}");
    }
}
