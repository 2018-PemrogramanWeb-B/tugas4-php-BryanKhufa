<?php 
	session_start();

	$error = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		if($_POST['username']!="user" || $_POST['password']!="pass"){
			$_SESSION['login'] = false;
			header("Location: index.php");
		}

		else{
			$_SESSION['login'] = $_POST['username'];
			header('Location: masook.php');
		}
	}
?>