
	<?php 
	// $con=mysqli_connect('localhost','root','root','login_db')
	$con=mysqli_connect('localhost','root','','login_db');
	//echo "Testing for error";

	//To input data from user

	$Name=$_POST['Name'];
	$UserName=$_POST['UserName'];
	$Password=$_POST['Password'];
	$Email=$_POST['Email'];
	$Mobile=$_POST['Mobile'];
	$Gender=$_POST['Gender'];
	$Message=$_POST['Message'];

	//write data to database

	$sql = "INSERT INTO 'login`(`id`, `fullname`, `usrname`, `pswd`, `emalid`, `mobno`, `gender`, `msg`) VALUES ('0','$Name','$UserName','$Password','$Email','$Mobile','$Gender','$Message')";
	//die($sql);

		// INSERT INTO DATABASE


	    $r= mysqli_query($con,$sql);

		if($r)
		{
			echo "Connection Sucess";
		}
		
	?>

