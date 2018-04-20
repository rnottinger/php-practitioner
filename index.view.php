<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		header {
			background: #e3e3e3;
			padding: 2em;
			text-align: center
		}
	</style>
</head>
<body>
	
	<ul>
		<?php foreach($names as $name) : ?>
			<li><?= $name; ?></li>
		<?php endforeach; ?>
	
		<?php
			foreach($names as $name){
				echo "<li>$name</li>";
			}
		?>
	</ul>
</body>
</html>