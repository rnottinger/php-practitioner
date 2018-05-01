<?php require('partials/header.php'); ?>
<h1>Submit your name</h1>
<?php
	// Submit
	// Trigger a controller 
	// & fetch that data
	// retool our router and request class in the process
	// make sure you set the name attribute for any form field that you want to submit to your server
	// because it is a GET request, any form data will be passed through in the query string
?>
<!-- <form method="GET" action="/name"> -->
<form method="POST" action="/name">
	<label for="firstName">First Name<label><input name="first_name">
	<label for="lastName">Last Name<label><input name="last_name">
	<button type="submit">Submit</button>
</form>
<?php require('partials/footer.php'); ?>