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
</head>

<body>
    <script>
        function validateForm() {
          if (fname == "") {
            alert("First Name must be filled out.");
            return false;
          }

          if (lname == "") {
            alert("Last Name must be filled out.");
            return false;
          }

          if (email == "") {
            alert("Country must be filled out.");
            return false;
          }
    </script>

	<?php include "header-menu.php";?>

    <div class="mainwrapper">
		<div class="maincontent">
			<h2 style="padding-top: 2em;padding-bottom: 2em;">Login to JWG Cleaning Services</h2>
			<hr><br/><br/>	
			
			<form name="frmLogin" action="login_action.php" method="post">
				<h2>Login</h2>
				<br/><hr><br/><br/>
				<label for="username">Username</label>
				<input type="text" id="username" name="username" required style="align:left;" autofocus>
				<label for="password">Password</label>
				<input type="password" id="password" name="password" required>
				<p>&nbsp; </p>

				<input type="submit" value="Submit" class="btn" name="submit"/>

				<p>&nbsp; </p>
				
				<?php
					if (isset($_SESSION["error"])) {
						echo $_SESSION["error"];
					}
				?>
				
			</form>

			<br/><br/><hr>
			
			<p style="padding-top: 4em;padding-bottom: 2em;">Want to know more?<br/><br/>
			Talk to us to discuss details on services offered by JWG Cleaning Services.  Just call on
				<a href="tel:0404040040" style="text-decoration:none;"><b>0404040040</b></a> or <a href="pages/contact.php" style="text-decoration:none;"><b>contact us.</b></a></p>
			
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
