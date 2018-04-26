<?php

require 'functions.php';


require 'Task.php';


// Task::all();
// $task->all();

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);

// fetch() method will retrieve a single row

// var_dump($tasks);
// dd($tasks[0]->description);
require 'index.view.php'; 




