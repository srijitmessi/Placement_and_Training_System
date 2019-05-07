 
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
</head>
<body>
	<style>
	body{
		background-image: url(images/bg.jpg);
		background-position: center;
		background-size: cover;
	}
		.well{
			margin-top: 100px;
			text-align:center;
			background-color: #E5E0DF  ;
			font-size: 16px;
			line-height: 30px;
		}
		.well h2
		{
			text-align: center;
			font-family: times new roman;
		}
	</style>
	<div class="container">
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="well">
					<h2>DRIVE DETAILS</h2>

<?php
			
$connect=mysqli_connect('localhost','root','');
mysqli_select_db($connect,'placement');
if(isset($_POST['submit']))
{ 
$cname = $_POST['cname'];

$RESULT=mysqli_query($connect,"SELECT count(Attendence) from updatedrive where Attendence=1 and CompanyName='$cname'");
$data=mysqli_fetch_assoc($RESULT);
echo "<br>Number of Students Attended&nbsp:&nbsp";
echo $data['count(Attendence)'];

$RESULT=mysqli_query($connect,"SELECT count(WT) from updatedrive where WT=1 and CompanyName='$cname'");
$data=mysqli_fetch_assoc($RESULT);
echo "<br>Number of Students Cleared WT&nbsp:&nbsp";
echo $data['count(WT)'];

echo "<br>Number of Students Cleared GD&nbsp:&nbsp";
$RESULT1=mysqli_query($connect,"SELECT count(GD) from updatedrive where GD=1 and CompanyName='$cname'");
$data1=mysqli_fetch_assoc($RESULT1);
echo $data1['count(GD)'];

echo "<br>Number of Students Cleared Technical&nbsp:&nbsp";
$RESULT1=mysqli_query($connect,"SELECT count(Techical) from updatedrive where Techical=1 and CompanyName='$cname'");
$data1=mysqli_fetch_assoc($RESULT1);
echo $data1['count(Techical)'];

echo "<br>Number of Students Placed&nbsp:&nbsp";
$RESULT1=mysqli_query($connect,"SELECT count(Placed) from updatedrive where Placed=1 and CompanyName='$cname'");
$data1=mysqli_fetch_assoc($RESULT1);
echo $data1['count(Placed)'];
}
?>
</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>
</center>
</body>
</html>