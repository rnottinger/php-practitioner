<?php

// require 'Models/Task.php';
$tasks = App::resolve('database')->selectAll('todos', 'Task');
require 'views/index.view.php'; 