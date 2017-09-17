<!DOCTYPE html>
<html>
<head>
	<title>Zdravo, Avro</title>
</head>
<body>
<h1>
Hello, User!
</h1>


<?php
if ($task['completed'] != true) : ?>
	<h2>
		Hey, <?= $task['assigned_to']?>, you have to <?= $task['title']?> <?= $task['due']?>!
	</h2>
<?php else : ?>
	<h2>
		No tasks for today! Enjoy the rest of your day!
	</h2>
<?php endif ?>




</body>

</html>




