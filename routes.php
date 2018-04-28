<?php

// $routes = [
//     ''              => 'controllers/index.php',
//     'about'         => 'controllers/about.php',
//     'about/culture' => 'controllers/about-culture.php',
//     'contact'       => 'controllers/contact.php'
// ];

$router->define([  // so we will need a Router class with a define() method
    ''              => 'controllers/index.php',
    'about'         => 'controllers/about.php',
    'about/culture' => 'controllers/about-culture.php',
    'contact'       => 'controllers/contact.php'
]);

// dd($router);
// or you could have one call per route
// $route->define('','controller/index.php');
// $route->define('','controller/index.php');
// $route->define('','controller/index.php');
// $route->define('','controller/index.php');

// OR IF YOU USE LARAVEL
// Route::get('','controller/index.php');