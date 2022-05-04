<?php

use App\Core\App as Application;
use App\Core\Database\Connection;
use App\Core\Database\QueryBuilder;

Application::bind('config', require 'config.php');

Application::bind('database', new QueryBuilder(
    Connection::make(Application::get('config')['database'])
));
