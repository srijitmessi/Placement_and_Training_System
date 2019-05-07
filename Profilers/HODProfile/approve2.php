<?php
  session_start();
 if (isset($_SESSION['husername']) ){
  }
   else {
	   header("location: index.php");
   }
?>
<style>
body
  {
    background-image: url(images/bg.jpg);
    background-size: cover;
    background-position: center;
  }

  label
  {
    font-family: times new roman;
    font-size: 20px;

  }
  .well
  {
    margin-top: 100px;

  }
</style>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
  <div class="container">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
      <div class="well">
        <form action="approve.php" method="post">
          <div class="row">
            <div class="col-lg-6">
              <label>Enter the VTU:</label>
            </div>
             <div class="col-lg-6">
               <input type="text" name="id" class="form-control" required=""><br> 
             </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <label>Enter the DOB:</label>
            </div>
             <div class="col-lg-6">
               <input type="date" name="DOB" class="form-control" id="DOB" placeholder="DD/MM/YYYY" required=""><br> 
             </div>
          </div>


<input type="submit" class="btn btn-info btn-block" value="Approve">

</form>
      </div>
    </div>
    <div class="col-lg-3"></div>
  </div>
</div>
</body>
</html>