<?php

// die(var_dump("your new task is {$_POST['description']}"));

$app['database']->insert('tasks', [
  'description' => $_POST['description'],
]);
