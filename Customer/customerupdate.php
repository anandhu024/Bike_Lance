<?php
        session_start();
        $customer_id=$_SESSION['customer_id'];
        ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <?php
        include("config.php");
        $sql=mysqli_query($con,"SELECT * FROM `tblbikelancecustomer` WHERE `customer_id`='$customer_id'");
        while($display=mysqli_fetch_array($sql))
        {
?>
  <body>
    
  <?php
include("header.php");
?>
   
   <div class="hero-wrap ftco-degree-bg" style="background-image: url('https://cdn.99images.com/photos/wallpapers/bikes/bikes%20android-iphone-desktop-hd-backgrounds-wallpapers-1080p-4k-egq5e.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
         
          	
      </div>
        
      </div>
    </div>

     <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-6 d-flex align-items-center">
	  						<form action="customerupdateaction.php" method="POST" class="request-form ftco-animate bg-primary" style="margin-top:-481px; height:800px;">
		          		<h2>My details</h2>
			    				<div class="form-group">
			    					<label for="" class="label">Name</label>
			    					<input type="text" class="form-control" placeholder="Name" value="<?php echo $display["customer_name"] ?>" name="txtname">
			    				</div>
			    				<div class="form-group">
			    					<label for="" class="label">Address</label>
			    					<input type="text" class="form-control" placeholder="address" value="<?php echo $display["customer_address"] ?>" name="txtaddress">
			    				</div>
			    				<div class="d-flex">
			    					<div class="form-group mr-2">
			                <label for="" class="label">E-mail</label>
			                <input type="text" class="form-control"  placeholder="email" value="<?php echo $display["customer_email"] ?>" name="txtemail">
			              </div>
			              <div class="form-group ml-2">
			                <label for="" class="label">Gender</label>
			                <input type="text" class="form-control" placeholder="gender" value="<?php echo $display["customer_gender"] ?>"  name="txtgender">
			              </div>
		              </div>
		              <div class="form-group">
		                <label for="" class="label">Phone number</label>
		                <input type="number" class="form-control"placeholder="Time" value="<?php echo $display["customer_phonenumber"] ?>" name="txtphno">
		              </div>
                      <div class="form-group">
			    					<label for="" class="label">licence Number</label>
			    					<input type="text" class="form-control" placeholder="address" value="<?php echo $display["customer_licencenumber"] ?>" name="txtlicenceno">
			    				</div>
                                <div class="form-group">
			    					<label for="" class="label">Aadhar Number</label>
			    					<input type="text" class="form-control" placeholder="address" value="<?php echo $display["customer_aadharnumber"] ?>" name="txtaadharno">
			    				</div>
                                <div class="form-group">
			    					<label for="" class="label">password</label>
			    					<input type="text" class="form-control" placeholder="address" value="<?php echo $display["customer_password"] ?>"  name="txtpassword">
			    				</div>
			            <div class="form-group">
			              <input type="submit" value="Update" class="btn btn-secondary py-3 px-4" name="submit">
			            </div>
			    			</form>
	  					</div>
                          <?php
        }
        ?>
                        
  

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>