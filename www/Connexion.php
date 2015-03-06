<?php
	session_start ();
	$login = $_POST['login'];
	$password = $_POST['password'];

	if($login=="admin" && $password=="admin")
	{
		$_SESSION['Login'] = "Admin";
		echo "Oo".$_SESSION['Login'];
		header("Location: index.php");
	}
	else 
	{

		header("Location: Erreur.php");
	}
?>