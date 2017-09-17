<?php 

class Task {
	public function __construct($description, $status) 
	{
		// automatically trigerred on instantiation (NEW keyword required!). Cannot be called manually.

		$this->description = $description; // description (w/o $) is a property of $this object
		$this->completed = $status;
	}
}


$task = new Task('Go to your store', true);
$task2 = new Task('succ Avram\'s cock', false);


require 'functions.php';

require 'index.view.php';