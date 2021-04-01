<?php
//connect to database
	$conn=mysqli_connect('localhost', 'root', '') or die(mysqli_error());
	
	//select database
	$select_db=mysqli_select_db($conn,'jwg_db') or die (mysqli_error());
?>