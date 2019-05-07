<?php
   $connect = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
   mysqli_select_db($connect,"placement") or die("Cant Connect to database"); // Selecting Database from Server
   
   
if(isset($_POST['submit']))
{ 
  
 $Name = $_POST['Name'];
 $USN = $_POST['Username'];
 $branch = $_POST['Branch'];
 $password = $_POST['Password'];
 $repassword = $_POST['repassword'];
 $Email = $_POST['Email'];
  $Question = $_POST['Question'];
   $Answer = $_POST['Answer'];
  

 $check = mysqli_query($connect,"SELECT * FROM hlogin WHERE Username='".$USN."'") or die("Check Query");
 if(mysqli_num_rows($check) == 0) 
 {
  if($repassword == $password)
  {
    
    
    if($query = mysqli_query($connect,"INSERT INTO hlogin(Name, Username ,Branch,Password,Email,Question,Answer) VALUES ('$Name', '$USN','$branch', '$password','$Email','$Question','$Answer')"))
    {
                       echo "<center> You have registered successfully...!! Go back to  </center>";
					             echo "<center><a href='index.php'>Login here</a> </center>";
					   
    }
  }
   else
    {
       echo "<center>Your password do not match </center>";
       echo "<center><a href='Register.php'>Go Back</a></center>";
    }
   }
   else
   {
       echo "<center>This TTS already exists</center>"; 
  }
}
?>
 