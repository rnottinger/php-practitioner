<?php
// responsible for the behind the scenes work
// notice we are manually loading every file that we need
//      autoloading will pull in any class that we require
require 'core/functions.php';

// App::bind('config',$config = require 'config.php');  // get the config array and associate it with a key named config
App::bind('config',require 'config.php');  // get the config array and associate it with a key named config

// dd(App::resolve('config'));

// so if I ever want to grab that configuration array
// $config = App::resolve('config');

// so instead of doing all of this
// $app = [];
// $app['config'] = require 'config.php';

// $app['database'] = new QueryBuilder(
//     Connection::make($app['config']['database'])
// );
App::bind('database', new QueryBuilder(
    // Connection::make($app['config']['database'])
    // Connection::make($config['database']);
    Connection::make(App::resolve('config')['database'])
));



// literally you take things...then assign a label to them...then throw them into a box container...
// then later if I need it again then just look for the lable and assign it to a variable
// App::get



// this is like a little factory file that builds up our query builder and gives you the result