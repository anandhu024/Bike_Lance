<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bike Lance</title>
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
  <body>

<?php
include("header.php");
session_start();
//$customer_id=$_SESSION['customer_id'];
?>
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('https://wallpapercave.com/wp/wp3647905.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Fast &amp; Easy Way To Rent A Bike</h1>
	            <p style="font-size: 18px;">Reserve your favourtie bike online for your dream ride from anywhere at anytime from a wide range of choices.</p>
	            <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
	            	<!-- <div class="icon d-flex align-items-center justify-content-center">
	            		<span class="ion-ios-play"></span>
	            	</div>
	            	<div class="heading-title ml-5">
		            	<span>Easy steps for renting a car</span>
	            	</div> -->
	            </a>
            </div>
          </div>
        </div>
      </div>
    </div>

     <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-4 d-flex align-items-center">
              <form enctype="multipart/form-data" action="http://localhost/Bike%20Lance/Customer/bikeview.php" class="request-form ftco-animate bg-primary" method="POST">
		          		<h2>Make your trip</h2>
                  <div class="d-flex">
			    					<div class="form-group mr-2">
			                <label for="" class="label">Pick-up date</label>
			                <input type="date" onchange="getfdate()" min="<?php echo date('Y-m-d') ?>" class="form-control" id="pick_date" name="pick_date">
			              </div> 
                  </div>
                  <script> 
                   function getfdate()
	                {
                 var fdate=document.getElementById('pick_date').value;
                 document.getElementById("off_date").min=fdate; 
                  }
                  </script>
                  <div class="d-flex"> 
			             <div class="form-group ml-2">
                          <label for="" class="label">Drop-off date</label>
                          <input type="date" min="" class="form-control" id="off_date" name="off_date">
                    </div> 
                  </div>
			            <div class="form-group">
			              <input type="submit" value="Rent Now" class="btn btn-secondary py-3 px-4">
			            </div> 
			    			</form> 
	  					</div>
              <?php
              // session_start();
              // $_SESSION['fdate']=$_POST['pick_date'];
              // $_SESSION['tdate']=$_POST['off_date'];
              ?>
	  					<div class="col-md-8 d-flex align-items-center">
	  						<div class="services-wrap rounded-right w-100">
	  							<h3 class="heading-section mb-4">Better Way to Rent Your Perfect Bikes</h3>
	  							<div class="row d-flex mb-4">
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					             <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center">
                          <span class="flaticon-route"></span>
                        </div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Choose Your Pickup Date</h3>
				                </div>
					            </div>      
					          </div> 
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center">
                          <span class="flaticon-handshake"></span></div>
				              	  <div class="text w-100">
					                <h3 class="heading mb-2">Select the Best Deal</h3>
					              </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-key"></span></div>
				              	    <div class="text w-100">
					                  <h3 class="heading mb-2">Reserve Your Bike</h3>
					              </div>
					            </div>      
					          </div>
					        </div>
					        <p><a href="http://localhost/Bike%20Lance/customer/bikeview.php" class="btn btn-primary py-3 px-4">Reserve Your Perfect Bike</a></p>

	  						</div>  
	  					</div>
	  				</div>
          </div>
				
  		</div>
    </section>

    <section class="ftco-section ftco-no-pt bg-light">
      <div class="container">
        <?php
          include("config.php");
          $sql=mysqli_query($con,"SELECT * FROM `tblbikelancebiketype` ");
          while($display=mysqli_fetch_array($sql))
          {
        ?>
          <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                  <span class="subheading">What we offer</span>       
                    <h2 class="mb-2"><?php echo $display["bike_typename"] ?></h2>
            </div>
          </div>
          <div class="row"> 
            <div class="col-md-12">
              <div class="carousel-car owl-carousel">
              <?php
                              include("config.php");
                              $type_id=$display["type_id"] ;
                              $sql1=mysqli_query($con,"SELECT * FROM `tblbikelancebikemodel`m inner join `tblbikelancebike` b on b.`model_id`= m.`model_id` WHERE m.`type_id`=$type_id ");
                              while($display1=mysqli_fetch_array($sql1))
                              {
                            // $display1=mysqli_fetch_array($sql1)
                ?>  
                  <div class="item"> 
                    <div class="car-wrap rounded ftco-animate">                 
                      <div class="img rounded d-flex align-items-end">
                        <img src=../Admin/assets/images/<?php echo $display1["bike_images"]?> style="background-image;">
                      </div>
                      <div class="text">
                        <h2 class="mb-0"><a href="#"><?php echo $display1["bike_modelname"] ?>  <?php echo $display1["bike_registrationnumber"] ?></a></h2>
                          <div class="d-flex mb-3">
                            <span class="cat">CC <?php echo $display1["bike_modelcc"] ?> Year <?php echo $display1["bike_year"] ?></span>
                            <p class="price ml-auto"><span><?php echo $display1["bike_rentamount"] ?>/day</span></p>
                          </div>
                        <p class="d-flex mb-0 d-block">
                          <a href="bikeviewmore.php?modelid=<?php echo $display1["model_id"]; ?>" class="btn btn-primary py-2 mr-1">Book now</a> 
                          <a href="bikedetails.php?bike_id=<?php echo $display1['bike_id']; ?>" class="btn theme_btn button_hover">Details</a>
                        </p>
                      </div>
                    </div> 
                  </div>
                <?php
                  }
                ?>
              </div>
            </div>            
          </div> 
          <?php
          }
        ?>      
    </div> 
    </section>


		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-3">Our Latest Services</h2>
          </div>
        </div>
				<div class="row">
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Wedding Ceremony</h3>
                <p>Reserve your favourtie bike online for your dream wedding entry from anywhere at anytime from a wide range of choices.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Trip</h3>
                <p>Reserve your favourtie bike online for your dream trip from anywhere at anytime from a wide range of choices.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Airport Transfer</h3>
                <p>Reserve your favourtie bike online for your dream ride from anywhere at anytime from a wide range of choices.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Whole City Tour</h3>
                <p>Reserve your favourtie bike online for your dream ride around the city from anywhere at anytime from a wide range of choices.</p>
              </div>
            </div>
					</div>
				</div>
			</div>
		</section>
<!--
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 29, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 29, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 29, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>	
	
   -->
    <?php
include("footer.php");
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