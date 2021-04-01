<?php
	session_start();
	unset($_SESSION["user"]);
	unset($_SESSION["error"]);
	$_SESSION["logout"]="loggedout";
	header("location:login.php");
?>