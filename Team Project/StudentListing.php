<?php
/********** CONNECT TO THE DATABASE **********/
$servername="localhost";
$username="root";
$password= "root";
$connect=mysqli_connect($servername,$username,$password);
if(!$connect)  die("Error"); //else echo "connected";
/********** CREATE QUERY **********/
$sql = "SELECT * FROM termproject.student";
$result = mysqli_query($connect, $sql); 	// Send the query to the database
if (mysqli_num_rows($result) > 0) 			// If there are rows present
{
		echo "<table border='1'><tr><td>EMAIL</td><td>PASSWORD</td><td>FIRSTNAME</td><td>LASTNAME</td></tr>";
		while($row = mysqli_fetch_assoc($result)) 									// fetch next row
		{ 																			// display the data
			echo "<tr> <td>".$row["StudentEMail"]." </td><td>".
            $row["StudentPassword"]."</td><td>".
            $row["StudentFname"]."</td><td>".
            $row["StudentLname"]."</td></tr>"; // output data of that row
		}
		echo "</table>";
}

?>
