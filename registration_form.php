<?php

if(isset($_POST['submit'])){

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	// Post Data
	$fullname	= filter_var($_POST["fullname"], FILTER_SANITIZE_STRING);
	$country	= filter_var($_POST["country"], FILTER_SANITIZE_STRING);
	$gender		= filter_var($_POST["gender"], FILTER_SANITIZE_STRING);

	$checkbox = $_POST['member'];  
	$chk_member="";  
	foreach($checkbox as $chk1)  
	{  
		$chk_member .= $chk1.",";  
	} 

	// Insert Data
	$sql = "INSERT INTO user(fullname, country, family, gender)
	VALUES ('".$fullname."', '".$country."', '".$chk_member."', '".$gender."' )";

	// Result
	if ($conn->query($sql) === TRUE) {
		
		// Get Last insert id to fetch foreign table
		$last_id = $conn->insert_id;

	    echo "New User details submitted successfully! ";

	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}


	// file upload here

	$file = basename( $_FILES['myFile']['name']);   

	$open = fopen($file,'r');
 
		while (!feof($open)) 
		{
			$getTextLineEscape = fgets($open);

			$getTextLine  = mysqli_real_escape_string($conn, $getTextLineEscape);

			$explodeLine = explode(",",$getTextLine);
				
			list($name,$city,$postcode,$job_title) = $explodeLine;
	
			$qry = "insert into userdetails (name, city, postcode, job_title, userid) 
			values('".$name."','".$city."','".$postcode."','".$job_title."','".$last_id."')";

			$conn->query($qry);
		}

	$conn->close();

}

?>