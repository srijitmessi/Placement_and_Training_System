 
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
<html lang="en">
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
                     <form action="COUNT1.php" class="templatemo-login-form" method="POST" enctype="multipart/form-data">
      
                              
        <div class="row">
          <div class="col-lg-6"> <label for="sslc">Company Name : </label></div>
           <div class="col-lg-6"> <input type="text" name="cname" class="form-control" id="sslc" placeholder="" required=""></div>
        </div>
        <hr />
        <div class="row">
          <div class="col-lg-6">
             <div class="form-group text-right">
                <button type="submit" name="submit" class="btn btn-info btn-block">Submit</button>
              </div>
          </div>
            <div class="col-lg-6">
              <div class="form-group text-right">
                <button type="reset" name="submit" class="btn btn-danger btn-block">Reset</button>
              </div>
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
            </p>
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