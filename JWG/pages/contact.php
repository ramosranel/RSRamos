<!DOCTYPE html>
<!-- This website is created by: Ranel Ramos -->
<html lang="en">
<head><title>JWG Cleaning Services</title>
<meta charset="utf-8">
<link href="../css/style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Karla|Roboto|Glegoo' rel='stylesheet'></head>

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

	<div class="header">
		<a href="../index.php" class="logo">JWG Cleaning Services</a>
		<div class="header-right">
			<a href="book.php"> Book Now&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; </a>
			<a href="tel:+61424042220"> Call Now: 0404040040 </a>
		</div>
	</div>

	<div class="topnav" id="myTopnav">
		<a href="../index.php">Home</a>

		<div class="dropdown">
			<button class="dropbtn">Services&nbsp;<i class="fa fa-caret-down"></i></button>
			<div class="dropdown-content">
				<a href="office.php">Office Cleaning</a>
				<a href="childcare.php">Child Care/School Cleaning</a>
				<a href="sports.php">Sports/Leisure Cleaning</a>
				<a href="store.php">Retail Store Cleaning</a>
				<a href="agedcare.php">Aged Care Facility Cleaning</a>
				<a href="showroom.php">Show Room Cleaning</a>
				<a href="residential.php">Residential Cleaning</a>
			</div>
		</div>

		<div class="dropdown">
			<button class="dropbtn">Why Choose Us&nbsp;<i class="fa fa-caret-down"></i></button>
			<div class="dropdown-content">
				<a href="howwework.php">How We Work</a>
				<a href="promise.php">Our Promise</a>
			</div>
		</div>

        <div class="dropdown">
			<button class="dropbtn">About&nbsp;<i class="fa fa-caret-down"></i></button>
			<div class="dropdown-content">
				<a href="missionvision.php">Mission / Vision</a>
				<a href="history.php">History</a>
				<a href="faq.php">FAQ</a>
			</div>
		</div>

		<a href="contact.php">Contact</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
		<a id="alignlogin" href="login.php">Login</a>
	</div>

    <div class="mainwrapper">
		<div class="maincontent">
			<h2 style="padding-top: 2em;padding-bottom: 2em;">Get in Touch</h2>
			<hr><br/><br/>

			<p>Talk to us.</p><br/>
			<p>We will be happy to assist you and answer your enquiry.</p><br/>
			<!--<p><img src="../images/phone.png" width="10%" height="10%"></p><br/>-->

			<p><a href="tel:+614040400404">Call us at 04040400404 or</a></p><br/>
			<p><a href="mailto:jwgcleaningservices.gmail.com">E-mail us at jwgcleaningservices.gmail.com</a></p><br/><br/>

			<!--<p><img src="../images/email.png" width="12%" height="12%"></p><br><br/>-->
			<hr><br/><br/>
			<p>Fill-out the form below.</p><br><br>

			<form name="MyForm" action="contact_action.php" onsubmit="return validateForm()" method="post">
				<label for="lname">Last name</label>
				<input type="text" id="lname" name="lname" placeholder="Your last name" required>
				<label for="fname">First name</label>
				<input type="text" id="fname" name="fname" placeholder="Your first name" required>
				<label for="email">E-mail address</label>
				<input type="text" id="email" name="email" placeholder="Your e-mail address" required>
				<label for="telephone">Contact number</label>
				<input type="text" id="telephone" name="telephone" placeholder="Your contact number" required>
				<label for="message">Message/Enquiry</label>
				<textarea id="message" name="message" placeholder="Your enquiry" style="height:170px" required></textarea>

				<p>&nbsp; </p>

				<input type="submit" value="Submit" class="btn">

				<p>&nbsp; </p>
			</form>

			<br/><br/><br/><hr>

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
