
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
	body
	{
		background-image: url(images/bg.jpg);
		background-size: cover;
		background-position: center;
	}
		h2 
		{
			text-align: center;
			font-size: 26px;
			margin-bottom: 30px;
			color: white;
			text-transform: uppercase;
			font-family: times new roman;
		}
		.well
		{
			border-radius:0px;
				background-color:#E5E0DF  ;
		}
		.well label
		{
			text-align: left;
			color: black;
			font-family: times new roman;
			letter-spacing: 1px;
		}
		.well input
		{
			padding: 5px;
			margin-top: 1px;
		}
	</style>
<h2>Search By</h2>


		<div class="container">
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
						<div class="well">
					<form  action="COUNT3s1.php" method="POST">
						<div class="row">
							<div class="col-lg-5"><label>Student Name :</label></div>
							<div class="col-lg-7">
								<input type="text" name="sname">
						<button type="submit" name="s1" class="btn btn-info">Search</button>						
						<br><br>
							</div>
						</div>
					</form>	

					<form  action="COUNT3s2.php" method="POST">	
					<div class="row">
						<div class="col-lg-5"><label>Student VTU: </label></div>
						<div class="col-lg-7">
							<input type="text" name="susn">
						<button type="submit" name="s2" class="btn btn-info">Search</button>
						<br><br>
					</div>
					</div>				
						
						
					</form>	
					<form  action="COUNT3s3.php" method="POST">	
					<div class="row">
						<div class="col-lg-5"><label>Semister Wise : </label></div>
						<div class="col-lg-7">
							<input type="text" name="csem">
						<button type="submit" name="s3" class="btn btn-info">Search</button>
						<br><br>
						</div>
					</div>				
						
						
					</form>	
					<form  action="COUNT3s4.php" method="POST">	
							<div class="row">
						<div class="col-lg-5">
							<label>Branch :  </label>
						</div>
						<div class="col-lg-7">
							<input type="text" name="cbranch">
						<button type="submit" name="s4" class="btn btn-info">Search</button>
						<br><br>
						</div>
					</div>		
						
						
					</form>
					<form  action="COUNT3s5.php" method="POST">	
							<div class="row">
						<div class="col-lg-5">
							<label>10th :  </label>
						</div>
						<div class="col-lg-7">
							<input type="text" name="csslc">
						<button type="submit" name="s5" class="btn btn-info">search</button>
						<br><br>
						</div>
					</div>		
						
						
					</form>	
					<form  action="COUNT3s6.php" method="POST">	
							<div class="row">
						<div class="col-lg-5">
							<label>12th/Diploma : </label> 
						</div>
						<div class="col-lg-7">
							<input type="text" name="cpu">						
						<button type="submit" name="s6" class="btn btn-info">search</button>
						<br><br>
						</div>
					</div>		
						
						
					</form>	
					<form  action="COUNT3s7.php" method="POST">	
							<div class="row">
						<div class="col-lg-5">
							<label>Degree Aggregate :  </label>
						</div>
						<div class="col-lg-7">
							<input type="text" name="cbe">
						<button type="submit" name="s7" class="btn btn-info">search</button>
						<br><br>
						</div>
					</div>		
						
						
					</form>
					</div>		
				</div>
				<div class="col-lg-3"></div>
			</div>
		</div>
								
 
<footer class="text-right" style="color: white;">
            <p>Copyright &copy; 2019 VT-PMS | Developed by
              <a href="#" target="_parent">Veltech Synergy Technologies</a>
          </footer>         
        </div>
      </div>
    </div>    
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