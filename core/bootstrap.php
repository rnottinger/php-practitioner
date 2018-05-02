<?php
// responsible for the behind the scenes work
// notice we are manually loading every file that we need
//      autoloading will pull in any class that we require
require 'core/functions.php';

$app = [];

// we are sort of storing our dependencies such as our config, and query builder within an array
//      but instead lets setup a dedicated class for that
//          so that we can bind dependencies into it
//              then when we need to resolve dependencies out of it
// we call this a simple dependency injection container
$app['config'] = require 'config.php';

// have to require more and more files
// everytime I new up a class, I don't want to require a file...i just want it to automatically load
// composer normalized everything...gave you a fast and efficient way to pull in packages
//      modify an image
//      create a thumbnail
//      composer does provide an autoloader out of the box
// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';    // how we connect to the database
// require 'core/database/QueryBuilder.php';  // how we create a query builder

// $pdo = Connection::make();
// $query  = new QueryBuilder(Connection::make());// could save it as a global variable 


// or just be explicit and just return it 
// then when we require it we can save to a variable
// return new QueryBuilder(
$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);


// this is like a little factory file that builds up our query builder and gives you the result