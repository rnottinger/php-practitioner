<?php
// use App\Core\Router;
// use App\Core\Request;
use App\Core\{Router, Request};

require 'vendor/autoload.php';
require 'core/bootstrap.php';
// require Router::load('routes.php')  // require the file that you return to me
Router::load('app/routes.php')  // require the file that you return to me
    ->direct(Request::uri(), Request::method());
    // we load the routes file
    // then we direct the request