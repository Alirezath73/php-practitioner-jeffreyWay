<?php require 'views/partials/header.view.php' ?>

  <h1>my tasks</h1>

  <ul>
    <?php foreach ($tasks as $task) : ?>
      <li>
      <?php if ($task->completed) :?>
        <del><?= $task->description ?></del>
      <?php else:?>
          <?= $task->description ?>
      <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>

  <h3>enter your task</h3>
  <form method="POST" action="/tasks">
    <input type="text" name="description">
    <button type="submit">submit</button>
  </form>

<?php require 'views/partials/footer.view.php' ?>