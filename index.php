<?php
	session_start();

	$username = "user";
	$password = "pass";

	if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
		header("Location: masook.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TUGAS 4 - PWEB B</title>
</head>
<body>
	<h2>Login</h2>
	<form method="post" action="valid.php">
		<p><span><?php $error; ?></span></p>
		Username:<br>
		<input type="text" name="username"><br>
		Password:<br>
		<input type="password" name="password"><br>
		<input type="submit" value="Submit">
		
</body>
</html>