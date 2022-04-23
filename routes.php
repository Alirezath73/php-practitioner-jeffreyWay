<?php

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/about-culture', 'controllers/about-culture.php');
$router->post('/tasks', 'controllers/add-task.php');
