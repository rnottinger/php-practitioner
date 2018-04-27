<?php
// responsible for the behind the scenes work
require 'functions.php';
require 'database/Connection.php';    // how we connect to the database
require 'database/QueryBuilder.php';  // how we create a query builder

// $pdo = Connection::make();
// $query  = new QueryBuilder(Connection::make());// could save it as a global variable 


// or just be explicit and just return it 
// then when we require it we can save to a variable
return new QueryBuilder(
    Connection::make()
);


// this is like a little factory file that builds up our query builder and gives you the result