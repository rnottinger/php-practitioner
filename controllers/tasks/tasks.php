<?php

require 'Task.php';
$tasks = $app['database']->selectAll('todos', 'Task');
require 'views/tasks.view.php';