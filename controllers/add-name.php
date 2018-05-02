<?php

require 'Models/User.php';


// $users = $app['database']->selectAll('users', 'User');
$app['database']->insert('users', [
    'first_name'    => $_POST['first_name'],
    'last_name'     => $_POST['last_name'],
    // 'age'           => $_POST['age']
]);
// so we performed the query and did nothing
// $users = $app['database']->selectAll('users', 'User');
// require 'views/users.view.php'; 

// header('Location: /about');


// we really only want to say ... just want all tasks & load the view
// $tasks = $query->selectAll('tasks', 'Task');
// $tasks = $query->selectAll('todos', 'Task');

// dd($_SERVER);
// dd($_REQUEST);  //query string
// dd($_GET['name']);  //query string


// dd($_POST['name']);  //query string

// dd('You typed ' . $_POST['name']);

// dd($app['database']);
// so now we can take the information that the user types into the form then process it then store/persist into the database
// TIP
// in your querybuilder you only have one method selectAll
// maybe add a new method to insert to a table using prepared statements and bound values
// do research & little googling
//      get used to it, deal with it

// query string good for search or filtering
//      but for anything else you will probably want to POST it to your server