<?php

// dd($_SERVER);
// dd($_REQUEST);  //query string
// dd($_GET['name']);  //query string


// dd($_POST['name']);  //query string

// dd('You typed ' . $_POST['name']);

dd($app['database']);
// so now we can take the information that the user types into the form then process it then store/persist into the database
// TIP
// in your querybuilder you only have one method selectAll
// maybe add a new method to insert to a table using prepared statements and bound values
// do research & little googling
//      get used to it, deal with it

// query string good for search or filtering
//      but for anything else you will probably want to POST it to your server