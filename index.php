<?php
require 'vendor/autoload.php';

require 'core/bootstrap.php';
// dd(Request::method());
require Router::load('routes.php')  // require the file that you return to me
    ->direct(Request::uri(), Request::method());