<?php
	session_start();
	$branch = ($_POST['Branch']);
	$husername = ($_POST['username']);
	$password  = ($_POST['password']);
	
	
	if ($husername&&$password&&$branch)
	{
		$connect = mysqli_connect("localhost","root","") or die("Couldn't Connect");
		mysqli_select_db($connect,"placement") or die("Cant find DB");
		
		$query = mysqli_query($connect,"SELECT * FROM hlogin WHERE Username='$husername'");
		
		$numrows = mysqli_num_rows($query);
		
		if ($numrows!=0)
		{
			while($row = mysqli_fetch_assoc($query))
			{
				$dbbranch = $row['Branch'];
				$dbusername = $row['Username'];
				$dbpassword = $row['Password'];
				
			}
			if ($branch==$dbbranch&&$husername==$dbusername&&$password==$dbpassword)
			{
				  echo "<center>Login Successfull..!! <br/>Redirecting you to HomePage! </br>If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='3; url=index.php'>";
				$_SESSION['husername'] = $husername;
				$_SESSION['department'] = $branch;
			} 
			else {
				$message = "Username and/or Password and/or Department are/is incorrect.";
  			echo "<script type='text/javascript'>alert('$message');</script>";
			  echo "<center>Redirecting you back to Login Page! If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=index.php'>";
			}
			  } else
			   die("User not exist");
	}
	else {
	$message = "Feild Can't be Left Blank";
  			echo "<script type='text/javascript'>alert('$message');</script>";
			  echo "<center>Redirecting you back to Login Page! If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=index.php'>";
			  }
		?>