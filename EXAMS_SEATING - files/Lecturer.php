<!DOCTYPE html>
<html>

<head>
	<title>Lecturer details </title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "admin_database");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Id_Number = $_REQUEST['Id_Number'];
		$Name = $_REQUEST['Name'];
        $Email =$_REQUEST['Email'];
        $Mobile_No =$_REQUEST['Mobile_No'];

		
		// Performing insert query execution
		// here our table name is college
        $sql = "INSERT INTO `lecturer`
		 VALUES ('$Id_Number','$Name','$Email','$Mobile_No')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Records inserted</h3>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center> 
</body>

</html>
