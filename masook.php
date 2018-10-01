<?php  
	session_start();
	if (!isset($_SESSION['login']) || $_SESSION['login'] == false){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Masook</title>
</head>
<body>
	<h1> You Have Logged In! </h1>
	<?php
			if (date("H")<3)echo "Selamat Malam!";
			elseif (date("H")<11) echo "Selamat Pagi!";
			elseif (date("H")<15) echo "Selamat Siang!";
			elseif (date("H")<18) echo "Selamat Sore!";
			else echo "Selamat Malam!";
			session_unset();
			session_destroy();
	?>
</body>
</html>
