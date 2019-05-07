<?php
  /*$subject = $_POST['Subject'];
  $message = $_POST['Message'];

  if(isset($_POST['submit']))
  {
	  $connect = mysqli_connect("localhost","root","") or die("Couldn't Connect");
		mysqli_select_db("placement") or die("Cant find DB");
		
		if($query = mysqli_query($connect,"INSERT into prim('Subject','Message') VALUES('$subject','$message')"))
			echo "Message has been Posted";
		else
			echo "Message Posting Unsuccessfull! Try Again";
  }
 
  */
  $connect=mysqli_connect("localhost","root","");
  mysqli_select_db($connect,"placement");
  

  $sub = $_POST['Subject'];
  $msg = $_POST['Message'];
  
      if(!$insert = mysqli_query($connect,"INSERT INTO `placement`.`prim` (`Id`, `Subject`, `Message`) VALUES (NULL, \'$sub\', \'$msg\')"))
        echo "Problem Uploading Data";
       else
       echo"Message Posted Successfully";

/*  $connect = mysqli_connect("localhost","root","") or die("Couldn't Connect");
		mysqli_select_db($connect,"placement") or die("Cant find DB");
    if(isset($_POST['submit'])){
  $sub = $_POST['Subject'];
  $msg = $_POST['Message'];
  
    if($query = mysqli_query($connect,"INSERT INTO prim(Subject,Message) VALUES ('$sub','$msg')")){
      echo "<center>Message Posted Successfully</center>";
    }
    else 
    echo "<center>Failed</center>";
  }
   */
  
   ?>
   
   