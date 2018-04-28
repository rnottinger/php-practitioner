<?php
// $query = require 'core/bootstrap.php';  // it kind of doesn't make sense to return a database instance
require 'core/bootstrap.php';

// dd($app);

// $router = new Router;  // we create a router

// require 'routes.php';  // this file references $router object and calls the define() method and passes an array of routes

// // dd(trim($_SERVER['REQUEST_URI'],'/'));
// $uri = trim($_SERVER['REQUEST_URI'],'/');
// dd($uri);
// // Finally load the controller associated with the uri
// require $router->direct($uri);

// I'm writing code that don't exist
//  that is a good habbit to get into
//      try to describe it in the best possible way for your mind
//          what would make you understand this best
//              write the code first
//                  then run it and see it fail
//                      then you make it work
// dd(Request::uri());
require Router::load('routes.php')  // require the file that you return to me
    ->direct(Request::uri());
// this basically says 
//require controllers/about-culture.php


// same as 
// $router = Router::load('routes.php'); // so this means the result of the load method needs to be a router instance
// dd($router);
// require $router->direct($uri);