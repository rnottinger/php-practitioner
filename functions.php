<?php

function dd($data)
{
	echo '<pre>';
	die(var_dump($data));
	// highlight_string(var_export($data, true));
	echo '</pre>';
}


// function connectToDb(){
// 	// when you try to connect to mysql using pdo you always want to wrap it in a try catch block
// 	try {
// 		return new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','');	
// 	// } catch (Exception $e)  any kind of exception
// 	} catch (PDOException $e) { // or a specific type of exception
// 		// die('Could not connect');
// 		die($e->getMessage());
// 	} 
// }

//this function will accept an instance of our database connection
// what are we doing here? we are building up and executing a query --> lets create a class called Database/QueryBuilder.php
// query is doing a select all
// function fetchAllTasks($pdo){
// 	// now that we connected, we can prepare and sql query
// 	$statement = $pdo->prepare('select * from tasks');  // we prepare a statement, but we haven't executed yet

// 	$statement->execute();  // execute the statement

// 	// var_dump($statement->fetchAll());  // fetch all results

// 	//$tasks = $statement->fetchAll(); // index=row & return the values as both array forms... associative array & indexed array
// 	// $tasks = $statement->fetchAll(PDO::FETCH_OBJ);  // instance of a generic class
// 	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');  // instance of a generic class
// }