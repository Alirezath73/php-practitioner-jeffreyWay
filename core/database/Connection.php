<?php

class Connection
{
    public static function make($config)
    {
        try {
            $connection = new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );

            return $connection;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
