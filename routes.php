<?php

$router->get('/', 'PageController@home');
$router->get('/about', 'PageController@about');
$router->get('/contact', 'PageController@contact');
$router->get('/about-culture', 'PageController@aboutCulture');
$router->get('/tasks', 'TaskController@index');
$router->post('/tasks', 'TaskController@store');
