<?php require('partials/header.php'); ?>
<ul>
	<?php foreach ($users as $user) : ?>
		<li>
			<?= $user->fullName(); ?>
		</li>
	<?php endforeach; ?>
</ul>


<h1>Submit your name</h1>
<form method="POST" action="/users">
	<label for="firstName">First Name<label><input name="first_name">
	<label for="lastName">Last Name<label><input name="last_name">
	<button type="submit">Submit</button>
</form>
<?php require('partials/footer.php'); ?>