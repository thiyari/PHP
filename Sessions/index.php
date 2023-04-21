<?php
// Start Session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sessions - PHP</title>
</head>
<body>
<?php
	// Set Session Vars
	$_SESSION['username'] = 'devuser';
	$_SESSION['email'] = 'devuser@gmail.com';
	echo 'Session vars set';
?>
</body>
</html>