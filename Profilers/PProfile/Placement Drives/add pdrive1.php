<?php
$connect = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
mysqli_select_db($connect,"details"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$cname = $_POST['compny'];
$date = $_POST['date'];
$campool = $_POST['campool'];
$poolven = $_POST['pcv'];
$per = $_POST['sslc'];
$puagg = $_POST['puagg'];
$beaggregate = $_POST['beagg'];
$back = $_POST['curback'];
$hisofbk = $_POST['hob'];
$breakstud = $_POST['break'];
$otherdet = $_POST['odetails'];
if($cname !=''||$date !='')
{
    if($query = mysqli_query($connect,"INSERT INTO `placement`.`addpdrive`(`CompanyName`,`Date`,`C/P`,`PVenue`,`SSLC`,`PU/Dip`,`BE`,`Backlogs`,`HofBacklogs`,`DetainYears`,`ODetails`)
		VALUES ('$cname', '$date', '$campool', '$poolven', '$per', '$puagg', '$beaggregate', '$back', '$hisofbk', '$breakstud', '$otherdet')")){
                      echo "<center>Drive Inserted successfully</center>";
		}
		else die("FAILED");
} else
	die("Field Canniot be left blank");
} else
	die("You don't have Privilages");
?>