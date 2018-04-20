<?php
// this file will receive and prepare the data
//$greeting = "Hello, " . htmlspecialchars($_GET['name']);
// then the following file will render the data
// this is a highlevel concept of separatation of concerns
//require 'index.view.php';


//load some data
// $names = [
// 	'Jeff',
// 	'John',
// 	'Mary'
// ];
$person = [
	'age' => 31,
	'hair' => 'brown',
	'career' => 'web developer'
];

$person['name'] = 'Richard';


var_dump($person);
die();
// foreach ($names as $name) {
// 	echo $name . ',';
// }

// load some view
require 'index.view.php';  // within the view you cycle through that array and echoed out the name wrapped in a list item 