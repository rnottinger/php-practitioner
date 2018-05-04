<?php
namespace App\Models;

//look for the nouns. think of it as some blueprint for some concept in your application, your finding your important points in your application
// tables --> tasks, users, products, comments
// class will be the singular form of the table
// properties would correspond to your database columns 
class Task {
	protected $description;
	protected $completed = false;  // always false when first create it
	// public function __construct($description)
	// {
	// 	$this->description = $description;
	// }

	// if you ever want to figure out...if the task is complete
	public function isComplete()
	{
		return $this->completed;
	}

	// Complete the task
	public function complete()
	{
		$this->completed = true;		
	}

	// Display the protected property description
	public function description()
	{
		return $this->description;
	}
	
}




// $task = new Task('Go to the store');

// var_dump($task->isComplete());

// $task->complete();

// var_dump($task->isComplete());


// $tasks = [
// 	new Task('Go to the store'),
// 	new Task('Finish my screencast'),
// 	new Task('Clean my room')
// ];

// $tasks[0]->complete();

// dd($tasks);
//
