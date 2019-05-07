<?php
$connect = mysqli_connect('localhost', 'root', ""); // Establishing Connection with Server
mysqli_select_db($connect,'placement'); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$usn = $_POST['usn'];
echo "$usn";
$name = $_POST['sname'];
$comname = $_POST['comname'];
$date = $_POST['Date'];
$attend = $_POST['Attendance'];
$wt = $_POST['WrittenTest'];
$gd = $_POST['GD'];
$tech = $_POST['Tech'];
$placed = $_POST['Placed'];
if($query = mysqli_query($connect,"INSERT INTO updatedrive(USN, Name, CompanyName, Date, Attendence, WT, GD, Techical, Placed)
		VALUES('$usn', '$name', '$comname', '$date', '$attend', '$wt', '$gd', '$tech', '$placed')"))
        {
                      echo "<center>Data Inserted successfully...!!</center>";
		}
		else
		{ 
	       echo "<center>FAILED</center>";
	    }
}
?>