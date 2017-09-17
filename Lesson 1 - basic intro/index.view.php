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


</body>

</html>




