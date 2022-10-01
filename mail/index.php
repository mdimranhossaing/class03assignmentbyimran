<?PHP

if (isset($_REQUEST['recipient'])) {
	$recipient = $_REQUEST['recipient'];
}

if (isset($_REQUEST['sender'])) {
	$sender = 'mdimranhossainseo@gmail.com';
}

if (isset($_REQUEST['subject'])) {
	$subject = $_REQUEST['subject'];
}

if (isset($_REQUEST['message'])) {
	$message = $_REQUEST['message'];
}

if (isset($_REQUEST['sender'])) {
	$headers = 'From:' . $sender;
}

if (isset($_REQUEST['submit'])) {
	mail($recipient, $subject, $message, $headers);

	function thankyou() {
		return 'Thank you for Submit';
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Testing PHP mail Function</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="mail">
				<h1>Checkout Mailserver</h1>
				<form action="" method="POST">

					<label for="to">To</label><br>
					<input type="email"	name="recipient" id="to" placeholder="Recipient Email Address" required="required"><br>
					
					<label for="sender">From</label><br>
					<input type="email"	name="sender" id="sender" placeholder="Sender Email Address" value="mdimranhossainseo@gmail.com" required="required"><br>
					
					<label for="subject">Subject</label><br>
					<input type="text"	name="subject" id="subject" placeholder="Your Subject" required="required"><br>
					
					<label for="message">Message</label><br>
					<input type="textarea"	name="message" id="message" placeholder="Write a message" required="required"><br>

					<input type="submit" name="submit" value="Submit">

				</form>

				<h2>
					<?php 
						if (isset($_REQUEST['submit'])) {
							echo thankyou();
						} 
					?>		
				</h2>

			</div>
		</div>
	</header>
</body>
</html>