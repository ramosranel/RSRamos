<?php
	//get data from user - form
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	session_start();
	
	$_SESSION["user"]=$_POST['username'];	

	//connect to database
	$conn=mysqli_connect('localhost', 'root', '') or die(mysqli_error());
	
	//select database
	$select_db=mysqli_select_db($conn,'jwg_db') or die (mysqli_error());
	
	//query to insert data to table
	$sql="SELECT * FROM tbluser WHERE username='$username' AND password='$password'";
	
	$result=mysqli_query($conn, $sql) or die(mysqli_error());
	$rows=mysqli_num_rows($result);
	if ($rows==1){
		header('location:dashboard.php');
		$_SESSION["logout"]="loggedin";
	}
	else
	{
		$_SESSION["error"]="Invalid username or password.";
		header('location:login.php');
	}
	mysqli_close($conn);
?>