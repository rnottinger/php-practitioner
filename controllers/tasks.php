<?php

require 'Models/Task.php';


// we really only want to say ... just want all tasks & load the view
// $tasks = $query->selectAll('tasks', 'Task');
// $tasks = $query->selectAll('todos', 'Task');
$tasks = $app['database']->selectAll('todos', 'Task');
require 'views/index.view.php'; 