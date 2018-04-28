<?php
// responsible for the behind the scenes work
// notice we are manually loading every file that we need
//      autoloading will pull in any class that we require
require 'core/functions.php';

$app = [];
$app['config'] = require 'config.php';
require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';    // how we connect to the database
require 'core/database/QueryBuilder.php';  // how we create a query builder

// $pdo = Connection::make();
// $query  = new QueryBuilder(Connection::make());// could save it as a global variable 


// or just be explicit and just return it 
// then when we require it we can save to a variable
// return new QueryBuilder(
$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);


// this is like a little factory file that builds up our query builder and gives you the result