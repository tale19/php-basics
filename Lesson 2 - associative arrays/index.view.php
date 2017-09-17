<!DOCTYPE html>
<html>
<head>
	<title>Zdravo, Avro</title>
</head>
<body>
<h1>
Hello, User!
</h1>

<p>
	This is <?= $tale['name'] ?>:
</p>


<ul>
	
	<?php foreach ($tale as $trait => $value) {
		if ($trait == 'glasses' && $value == true) {
			$value = '&#x1f453;';
		} elseif ($trait == 'glasses' && $value == false) {
			$value = '&#x1f440;';
		}
		echo "<li><strong>$trait: </strong> $value</li>";
	}

	?>
</ul>

<p>
	This is <?= $avra['name'] ?>:
</p>


<ul>
	
	<?php foreach ($avra as $trait => $value) {
		if ($trait == 'glasses' && $value == true) {
			$value = '&#x1f453;';
		} elseif ($trait == 'glasses' && $value == false) {
			$value = '&#x1f440;';
		}
		echo "<li><strong>$trait: </strong> $value</li>";
	}

	?>
</ul>


<br/>




<?php
if (! $task['completed']) : ?>
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
		<strong>Status: </strong> <?= $task['completed'] ? '&#10004;' : '&#10008;'; ?>
	</li>

</ul>



</body>

</html>




