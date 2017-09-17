<?php 

// $name = strip_tags($_GET['name'], '<i>');


$names = [
	'Avram',
	'Tale',
	'Poglavica Ogromna Karina'
];


// associative arrays (key-value pairs)

$person = [
	'age' => 26,
	'hair' => 'brown',
	'profession' => 'pharmacist'
];



$task = [
	'title' => 'pay the rent',
	'assigned_to' => 'Stefan',
	'due' => 'today',
	'completed' => true
];

require 'index.view.php';