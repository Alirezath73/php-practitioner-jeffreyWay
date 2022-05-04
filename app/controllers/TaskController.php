<?php

namespace App\Controllers;

use App\Helpers\Helpers;
use App\Core\App;

class TaskController
{
    public function index()
    {
        $tasks = App::get('database')->selectAll('tasks');

        return Helpers::view('task', [
            'tasks' => $tasks,
        ]);
    }

    public function store()
    {
        App::get('database')->insert('tasks', [
        'description' => $_POST['description'],
      ]);

        Helpers::redirect('http://localhost:8888/tasks');
    }
}
