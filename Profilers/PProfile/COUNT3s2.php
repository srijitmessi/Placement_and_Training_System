 
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>QUERIES</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <style>
      body
      {
        background-image: url(images/bg.jpg);      }
    .well 
    {
      background-color: white;
      margin-top: 50px;
      font-size: 16px;

    }
    </style>

  <div class="bg">
    <div class="container">
      <div class="row">
         <div class="col-lg-3"></div>
         
       <div class="col-lg-6">
          <div class="well">
             <div class="templatemo-content-container">
  <div class="templatemo-content-widget no-padding">
<?php
$connect=mysqli_connect('localhost','root','');
mysqli_select_db($connect,'placement');
if(isset($_POST['s2']))
{ 
$Susn = $_POST['susn'];
$RESULT = mysqli_query($connect,"SELECT * FROM basicdetails WHERE USN='$Susn'");
$row = mysqli_fetch_assoc($RESULT);
echo "<br><h3 style='text-align:center;'><b>Details of VTU $Susn &nbsp:&nbsp</b>";
echo "</h3>";
            print "<center><tr>"; 
  print "<br><td>First Name :";
    echo $row['FirstName'];
  print "<br></td><td>Last Name :"; 
  echo $row['LastName'];  
  print "<br></td><td>VTU :"; 
  echo $row['USN'];
  print "<br></td><td>Mobile :"; 
  echo $row['Mobile'];
  print "<br></td><td>Email :";
    echo $row['Email']; 
  print "<br></td><td>DOB :"; 
  echo $row['DOB'];
  print "<br></td><td>Semister :"; 
  echo $row['Sem'];
  print "<br></td><td>Branch :"; 
  echo $row['Branch'];  
  print "<br></td><td>SSLC Percentage :";
  echo $row['SSLC'];
  print "<br></td><td>PU/Diploma Percentage :";
  echo $row['PU/Dip'];
  print "<br></td><td>BE Aggregate :";
  echo $row['BE'];
  print "<br></td><td>Current Backlogs :";
  echo $row['Backlogs'];
  print "<br></td><td>History of Backlogs :";
  echo $row['HofBacklogs'];
  print "<br></td><td>Detain Years :";
  echo $row['DetainYears'];
print "</td></tr></center>"; 
}
?>
        
        </div>

      </div>
          </div>
        </div>
        
       
         <div class="col-lg-3"></div>
      </div>
    </div>
   
    </div>
    <footer class="text-right">
             <p>Copyright &copy; 2019 VT-PMS | Developed by
              <a href="#" target="_parent">Veltech Synergy Technologies</a>
            </p>
          </footer>     
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
	</body>
	</html>