<?php

class Task
{
    protected $description;
    protected $complete = false;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function isComplete() : bool
    {
        return $this->complete;
    }

    public function complete() : void
    {
        $this->complete = true;
    }

    public function description() : string
    {
        return $this->description;
    }
}

$tasks = [
  new Task('practice php.'),
  new Task('practice javascript.'),
  new Task('practice css.'),
];

$tasks[1]->complete();

require './index.view.php';
