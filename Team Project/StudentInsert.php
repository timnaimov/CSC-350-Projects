<?php
	$servername="localhost";
	$username="root";
	$password= "root";
	$connect=mysqli_connect($servername,$username,$password);
	if(!$connect)  die("Error"); //else echo "connected";
		$sql = 
		"INSERT INTO termproject.student (StudentEMail, StudentPassword, StudentFname, StudentLname)
		VALUES ('".$_REQUEST['EMAIL']."','".$_REQUEST['PASSWORD']."','".$_REQUEST['FIRSTNAME']."','".$_REQUEST['LASTNAME']."')";
		$result = mysqli_query($connect, $sql); 	// Send the query to the database
		if($result)
			echo "STUDENT INSERTED";
		else
			echo "STUDENT NOT INSERTED";
?>
