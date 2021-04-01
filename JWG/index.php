<!DOCTYPE html>
<!-- This website is created by: Ranel Ramos -->
<html lang="en">
<head><title>JWG Cleaning Services</title>
<meta charset="utf-8">
<link href="css/style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Karla|Roboto|Glegoo' rel='stylesheet'>
</head>

<body>

	<div class="header">
		<a href="index.php" class="logo">JWG Cleaning Services</a>
		<div class="header-right">
			<a href="pages/book.php"> Book Now&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; </a>
			<a href="tel:+61424042220"> Call Now: 0404040040 </a>
		</div>
	</div>

	<div class="topnav" id="myTopnav">
		<a href="index.php">Home</a>

		<div class="dropdown">
			<button class="dropbtn">Services&nbsp;<i class="fa fa-caret-down"></i></button>
			<div class="dropdown-content">
				<a href="pages/office.php">Office Cleaning</a>
				<a href="pages/childcare.php">Child Care/School Cleaning</a>
				<a href="pages/sports.php">Sports/Leisure Cleaning</a>
				<a href="pages/store.php">Retail Store Cleaning</a>
				<a href="pages/agedcare.php">Aged Care Facility Cleaning</a>
				<a href="pages/showroom.php">Show Room Cleaning</a>
				<a href="pages/residential.php">Residential Cleaning</a>
			</div>
		</div>

		<div class="dropdown">
			<button class="dropbtn">Why Choose Us&nbsp;<i class="fa fa-caret-down"></i></button>
			<div class="dropdown-content">
				<a href="pages/howwework.php">How We Work</a>
				<a href="pages/promise.php">Our Promise</a>
			</div>
		</div>

        <div class="dropdown">
			<button class="dropbtn">About&nbsp;<i class="fa fa-caret-down"></i></button>
			<div class="dropdown-content">
				<a href="pages/missionvision.php">Mission / Vision</a>
				<a href="pages/history.php">History</a>
				<a href="pages/faq.php">FAQ</a>
			</div>
		</div>

		<a href="pages/contact.php">Contact</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
		<a id="alignlogin" href="pages/login.php">Login</a>
	</div>
    
    <div class="mainwrapper">
		<div class="maincontent">
			<p style="padding-top: 3em; padding-bottom: 2em; line-height:200%;">We are happy to serve you.<br/><br/>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
			standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
			a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
			remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
			Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
			of Lorem Ipsum.</p><br>
			
			<a href="pages/book.php" style="font-size: 1.5em;">Book online to request for a quote.</a><br/><br/><br/><br/>
			
			<hr><br/><br/><br/>
			
			<p style="font-size: 2em; padding-bottom: 1em;">S E R V I C E S </p>

			<ul>
				<li>Office Cleaning</li><br/>
				<li>School Cleaning</li><br/>
				<li>Gym/Sports Facility Cleaning</li><br/>
				<li>Retail Store Cleaning</li><br/>
				<li>Warehouse Cleaning</li><br/>
				<li>Showroom Cleaning</li><br/>
				<li>Residential Cleaning</li>
			</ul>
			
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
