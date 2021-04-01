 <?php
	//get data from customer - form
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$telephone=$_POST['telephone'];
	$address=$_POST['address'];
	$datebooked=date("Y-m-d H:i:s");
	$datechosen=date("Y-m-d");
	
	//connect to database
	$conn=mysqli_connect('localhost', 'root', '') or die(mysqli_error());
	
	//select database
	$select_db=mysqli_select_db($conn,'jwg_db') or die (mysqli_error());
	
	//query to insert data to table
	$sql="INSERT INTO booking SET firstname=' $fname',
								lastname=' $lname',
								email=' $email',
								telephone=' $telephone',
								address=' $address',
								datebooked=' $datebooked',
								datechosen=' $datechosen'";
	$result=mysqli_query($conn, $sql) or die(mysqli_error());
	
	if ($result==true){
		header('location:successful.php');
	}
?>