<?php

require 'Task.php';
$tasks = App::resolve('database')->selectAll('todos', 'Task');
require 'views/tasks.view.php';