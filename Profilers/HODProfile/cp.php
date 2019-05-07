<?php
session_start();
$connect = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
mysqli_select_db($connect,"placement"); // Selecting Database from Server

	$Username = $_SESSION['husername'];
	$Password = $_POST['Password'];
	$repassword = $_POST['repassword'];
	$cur = $_POST['curpassword'];
	if($Password && $repassword && $cur) 
	{
		if($Password == $repassword)
		{
			$sql = mysqli_query($connect,"SELECT * FROM `placement`.`hlogin` WHERE `Username`='$Username'");
			if(mysqli_num_rows($sql) == 1)
			{
				$row = mysqli_fetch_assoc($sql);
				$dbpassword = $row['Password'];
			    
				if($cur == $dbpassword)
				{
					if($query = mysqli_query($connect,"UPDATE `placement`.`hlogin` SET `Password` = '$Password' WHERE `hlogin`.`Username` = '$Username'"))
					{
						echo "<center>Password Changed Successfully</center>";
					} else {
						echo "<center>Can't Be Changed! Try Again</center>";
					}
				} else {
					die("<center>Error! Please Check ur Password</center>");
				}
			} else {
				die("<center>Username not Found</center>");
			}
		} else{
			die("<center>Passwords Donot Match</center>");
		}
	} else {
		die ("<center>Enter All Fields</center>");
	}
