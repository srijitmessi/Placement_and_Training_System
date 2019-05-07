﻿
<!DOCTYPE html>
<html lang="en">
	<head>
		<!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
      <!-- Footer -->
        <link type="text/css" rel="stylesheet" href="css/style.css">
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>Placement-Reset Password</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">
        <!-- Footer -->
        <link type="text/css" rel="stylesheet" href="../../Homepage/css/style.css">
	    
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<style>
		.light-gray-bg
		{
			background-image: url(images/bg.jpg);
		}
	</style>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>Reset Password</h1>
	        </header>
	        <form action="rs.php" class="templatemo-login-form" method="POST">
			<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" name="Username" class="form-control" placeholder="Username" >           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<select type="text" name="Question" class="form-control" placeholder="Security Question" > 
								<option value="What is your nickname?">What is your nickname?</option>
								<option value="What is your fav spot?">What is your fav spot?</option>
							<option value="What is your fav dish?">What is your fav dish?</option>
							<option value="What is your dream land address?">What is your dream land address?</option>							
		          	<option value="What is your first mobile number?">What is your first mobile number?</option>	
						<option value="What is your one truth which ohers donot know?">What is your one truth which ohers donot know?</option>
								<option value="What is your detained years in life?">What is your detained years in life?</option>
						<option value="What is your enemy name?">What is your enemy name?</option>
						<option value="What is your pet's name?">What is your pet's name?</option>
					</div>	
	        	</div>
				<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" name="Answer" class="form-control" placeholder="Answer" >           
		          	</div>	
	        	</div>
				<div class="form-group">
					<button type="submit" class="templatemo-blue-button width-100">Send Request</button>
				</div>
	        </form>
		</div>
		
        <div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
			<p>Remembered Password? <strong><a href="index.php" class="blue-text">Sign in!</a></strong></p>
		</div>
		
			<!--footer-->
		<div class="footer">
			<div class="container">
				<div class="col-md-3 ftr_navi ftr">
					<h3>NAVIGATION</h3>
					<ul>
						<li>
							<a href="../../Homepage/index.php">Home</a>
						</li>
						<li>
							<a href="../SProfile/login.php">Student Login</a>
						</li>
						<li>
							<a href="../PProfile/login.php">Placement Login</a>
						</li>
						<li>
							<a href="../HODProfile/login.php">HOD Login</a>
						</li>
						<li>
							<a href="../PriProfile/login.php">Administrative Login</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3 ftr_navi ftr">
					 
				</div>
					<div class="col-md-3 get_in_touch ftr">
					<h3>GET IN TOUCH</h3>
					<p>Veltech University</p>
					<p>Avadi, Chennai, India</p>
					<p>03658-25478/558585</p>
					<a href="mailto:veltech@gmail.com">veltech@gmail.com</a>
				</div>
				<div class="col-md-3 ftr-logo">
					<p>Copyright &copy; 2019 VT-PMS | Developed by
              <a href="#" target="_parent">Veltech Synergy Technologies</a>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
					<style>
    .footer
    {
        background-color:#2E4053 ;
        padding-top: 20px; 
    }
</style>
	</body>
</html>