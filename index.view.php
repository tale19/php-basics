<!DOCTYPE html>
<html>
<head>
	<title>Zdravo, Avro</title>
</head>
<body>
<h1>
</h1>

Hello, User!

<ul>
	
	<?php foreach ($names as $name) : ?>
			<li><?=$name ?></li>
	<?php endforeach; 
	?>

	<?php 

		foreach ($names as $name) {
			echo "<li>$name</li>";
		}

	?>
</ul>

<?php
if ($task['completed'] != true) : ?>
	Hey, <?= $task['assigned_to']?>, you have to <?= $task['title']?> <?= $task['due']?>!
<?php else : ?>
	No tasks for today! Enjoy the rest of your day!
<?php endif ?>




</body>

</html>




