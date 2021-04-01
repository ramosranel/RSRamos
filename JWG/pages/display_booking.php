<!DOCTYPE html>
<!-- This website is created by: Ranel Ramos -->
<html lang="en">
<head><title>JWG Cleaning Services</title>
<meta charset="utf-8">
<link href="../css/style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Karla|Roboto|Glegoo' rel='stylesheet'></head>

<style>
table, th, td {
	border:1px solid;
	text-align:left;
	margin:auto;
}

td, th {
	padding: 3px;
}

</style>

<body>
	<?php include "header-menu.php";?>

    <div class="mainwrapper">
		<div class="maincontent">
			<p style="padding-top: 3em; padding-bottom: 2em; line-height:200%;">
			
			<p style="font-size: 1.5em; padding-bottom: 1em;">List of bookings at JWG Cleaning Services</p>
			
			<br/><br/><hr>
			<br/><br/>

			<?php
				//connect to database
				$conn=mysqli_connect('localhost', 'root', '') or die(mysqli_error());
				
				//select database
				$select_db=mysqli_select_db($conn,'jwg_db') or die (mysqli_error());
				
				//query to insert data to table
				$sql="SELECT * FROM booking";
				$result=mysqli_query($conn, $sql) or die(mysqli_error());
				$sn=0;
				
				if($result==true){
					echo "<table>
						<tr>
							<th>No.</th>
							<th>Name</th>
							<th>Telephone</th>
							<th>E-mail</th>
							<th>Address</th>
						</tr>";
						
					while($row=mysqli_fetch_assoc($result))
					{
						$fname=strtoupper($row['firstname']);
						$lname=strtoupper($row['lastname']);
						$email=strtoupper($row['email']);
						$telephone=strtoupper($row['telephone']);
						$address=strtoupper($row['address']);
						$sn++;
						echo "<tr>
							<td>$sn</td>
							<td>$fname $lname</td>
							<td>$telephone</td>
							<td>$email</td>
							<td>$address</td>
						</tr>";
					}
					echo "</table>";
				}
			?>
			
			<br/><br/><hr>

			<p style="padding-top: 4em;padding-bottom: 2em;">Want to know more?<br/><br/>
			Talk to us to discuss details on services offered by JWG Cleaning Services.  Just call on
				<a href="tel:0404040040" style="text-decoration:none;"><b>0404040040</b></a> or <a href="contact.php" style="text-decoration:none;"><b>contact us.</b></a></p>
			
			<ul style="text-align:center;">
				<li>
					<a href="#">Follow us on &nbsp;&nbsp;</a> <a href="https://www.fb.com" class="headersocial"><i class="fa fa-facebook">&nbsp;</i></a>
					<a href="https://www.twitter.com"><i class="fa fa-twitter">&nbsp;</i></a>
					<a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
				</li>
			</ul>
			<a href="pages/sitemap.php"><p style="text-align:center;">Sitemap</p></a>
			<a href="pages/privacy.php"><p style="text-align:center;">Privacy Policy</p></a>
			<a href="pages/tc.php"><p style="text-align:center;">Terms & Conditions</p></a><br/><br/>
		</div>
    </div>

<!-- Javascript for dropdown menu-->
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
