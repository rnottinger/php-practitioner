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
	<pre>
		<?php var_dump($person); ?>
	</pre>
	
	<ul>
		<?php foreach ($person as $feature => $val) : ?>
			<li><strong><?= $feature; ?></strong> <?= $val; ?></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>