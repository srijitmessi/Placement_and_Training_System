<?php
  session_start();
 if (isset($_SESSION['priusername'])){
	   }
   else {
	   header("location: index.php");
   }
   
?>
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
					<h2>COMPANY DETAILS</h2>
					<?php
			
$connect=mysqli_connect('localhost','root','');
mysqli_select_db($connect,'placement');
if(isset($_POST['submit']))
{ 
$cname = $_POST['cname'];
$sql = mysqli_query($connect,"SELECT * FROM addpdrive WHERE `CompanyName`='$cname'");

while($row = mysqli_fetch_assoc($sql))
{
	            print "<tr>"; 
	print "<br><td>Date:";
    echo $row['Date'];
	print "<br></td><td>Campus/Pool:"; 
	echo $row['C/P'];
	print "<br></td><td>Pool Venue:"; 
	echo  $row['PVenue'];
	print "<br></td><td>10th:"; 
	echo $row['SSLC'];
	print "<br></td><td>12th/Diploma:"; 
	echo $row['PU/Dip'];
	print "<br></td><td>Degree Aggregate:";
    echo $row['BE'];	
	print "<br></td><td>Current Backlogs:"; 
	echo $row['Backlogs'];
	print "<br></td><td>History of Backlogs:"; 
	echo $row['HofBacklogs'];
	print "<br></td><td>Detain Years:"; 
	echo $row['DetainYears'];
	print "<br></td><td>Other Details:";
	echo $row['ODetails'];
print "</td></tr><br><br><br>"; 
}
}
?>
				</div>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>
 

<!--while ($row = mysqli_fetch_assoc($rs_result)) 
{ 

            print "<tr>"; 

print "<td>" . $row['FirstName'] . "</td>"; 
print "<td>" . $row['LastName'] . "</td>"; 
print "<td>" . $row['USN'] . "</td>"; 
print "<td>" . $row['Mobile'] . "</td>"; 
print "<td>" . $row['Email'] . "</td>"; 
print "<td>" . $row['DOB'] . "</td>"; 
print "<td>" . $row['Sem'] . "</td>"; 
print "<td>" . $row['Branch'] . "</td>"; 
print "<td>" . $row['SSLC'] . "</td>"; 
print "<td>" . $row['PU/Dip'] . "</td>"; 
print "<td>" . $row['BE'] . "</td>";
print "<td>" . $row['Backlogs'] . "</td>";
print "<td>" . $row['HofBacklogs'] . "</td>";
print "<td>" . $row['DetainYears'] . "</td>";




print "</tr>"; 

}-->
 
</body></html>