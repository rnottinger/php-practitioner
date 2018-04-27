<?php
$query = require 'bootstrap.php';
require 'Task.php';


// we really only want to say ... just want all tasks & load the view
$tasks = $query->selectAll('tasks', 'Task');
require 'index.view.php'; 




