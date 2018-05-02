<?php
require 'vendor/autoload.php';
require 'core/bootstrap.php';
// require Router::load('routes.php')  // require the file that you return to me
Router::load('routes.php')  // require the file that you return to me
    ->direct(Request::uri(), Request::method());
    // we load the routes file
    // then we direct the request