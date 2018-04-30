<?php
require 'core/bootstrap.php';

require Router::load('routes.php')  // require the file that you return to me
    ->direct(Request::uri(), Request::method());