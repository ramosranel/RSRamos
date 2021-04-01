<?php
	session_start();
?>

<!DOCTYPE html>
<!-- This website is created by: Ranel Ramos -->
<html lang="en">
<head><title>JWG Cleaning Services</title>
<meta charset="utf-8">
<link href="../css/style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Karla|Roboto|Glegoo' rel='stylesheet'>

<style>
	body {
	  height: 100%;
	  width: 100%;
	  margin: 0;
	}

	.main {
		border: 1px solid;
		height: 100vh;
		box-sizing: border-box;
		padding-left: 2%;
		width:100%;
		background-color:green;
		display:flex;
	}

	footer{
		bottom:0;
	}
</style>

</head>

<body>
	<div class="header">
		<a href="../index.php" class="logo">JWG Cleaning Services</a>
	</div>
	
		<?php
			//connect to databas
			$conn=mysqli_connect('localhost', 'root', '') or die(mysqli_error());
			
			//select database
			$select_db=mysqli_select_db($conn,'jwg_db') or die (mysqli_error());
			
			$sql="SELECT * FROM booking WHERE checked='no'";
			
			$result=mysqli_query($conn, $sql) or die(mysqli_error());
			$rows=mysqli_num_rows($result);
			
			echo '<div class="main">
					  <div class="sidebar">
							<form action="#">
								<h3>Dashboard</h3><br/>
								<a href="report.php">Report</a>
								<a href="#">Calendar</a>
								<a href="#">User Management</a>
								<a href="#">Preferences</a>
								<a href="logout.php">Logout</a>
							</form>
						</div>
						
						<div class="reportcontent">
						<h2>Report</h2>
						
						</div>
				</div>';
		?>

	<script>
		function myFunction() {
			var x = document.getElementById("myTopnav");

			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}
	</script>
	
	<!-- Use the footer area to add webpage footer content -->
	<footer>
		&copy; Copyright 2020 &nbsp;| &nbsp;JWG Cleaning Services
	</footer>
</body>
</html>
