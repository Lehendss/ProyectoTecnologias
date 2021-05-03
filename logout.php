<?php
	session_start();

	session_unset();

	session_destroy();
	
	header("location:autenticacion.php");
	
	die("Session Ended!");
?>