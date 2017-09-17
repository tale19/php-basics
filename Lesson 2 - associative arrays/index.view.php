<!DOCTYPE html>
<html>
<head>
	<title>Zdravo, Avro</title>
</head>
<body>
<h1>
Hello, User!
</h1>

<ul>
	
	<?php foreach ($person as $trait => $value) {
		echo "<li><strong>$trait: </strong> $value</li>";
	}

	?>
</ul>


<?php
if ($task['completed'] != true) : ?>
	<p>
		Hey, <?= $task['assigned_to']?>, you have to <?= $task['title']?> <?= $task['due']?>!
	</p>
<?php else : ?>
	<p>
		No tasks for today! Enjoy the rest of your day!
	</p>
<?php endif ?>

<h3>List the tasks as LIs:</h3>

<ul>

	<li>
		<strong>Name: </strong> <?= $task['title']; ?>
	</li>

	<li>
		<strong>Person responsible: </strong> <?= $task['assigned_to']; ?>
	</li>

	<li>
		<strong>Due: </strong> <?= $task['due']; ?>
	</li>
	<li>
		<strong>Status: </strong> <?= $task['completed'] ? 'complete' : 'incomplete'; ?>
	</li>

</ul>



</body>

</html>




