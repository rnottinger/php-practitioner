<?php

// require 'Models/User.php';
App::resolve('database')->insert('users', [
    'first_name'    => $_POST['first_name'],
    'last_name'     => $_POST['last_name']
]);
require 'views/users.view.php'; 

// header('Location: /about');