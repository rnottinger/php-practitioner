<?php

class Connection
{

	public static function make($config)
	{
		try {
			// return new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','');	
			$dsn		= $config['connection'] . ';dbname=' . $config['name'];
			$user		= $config['username'];
			$password	= $config['password'];
			$options	= $config['options'];
			return new PDO(
				$dsn,
				$user,
				$password,
				$options
			);	
		// } catch (Exception $e)  any kind of exception
		} catch (PDOException $e) { // or a specific type of exception
			// die('Could not connect');
			die($e->getMessage());  // in real life you might want to bubble up this exception & then you will have a global exception handler that figures out what you want to do  in the situation when you can't connect to our database
		} 
	}

}


// $connection = new Connection();
// $connection->make();

// Connection::make();

// $pdo = Connection::make();// will trigger the make() method on the Connection class