<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Form</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/jquery-1.11.1.min.js"></script>
	<script src="js/vendor/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<h2>PHP Contact Form</h2>
		<br>
		<form name="contactform" action="sendmail.php" method="post">
			<label for="name">
				<p>Name:</p>
				<input type="text" name="name">
			</label>
			<br>
			<label for="email">
				<p>Email:</p>
				<input type="email" name="email">
			</label>
			<br>
			<label for="phoneno">
				<p>Phone Number:</p>
				<input type="number" name="phoneno">
			</label>
			<br>
			<label for="message">
				<p class="message">Message:</p>
				<textarea name="message" cols="30" ></textarea>
			</label>
			<br>
			<input type="submit" value="SEND" name="send">
		</form>
	</div>
</body>
</html>