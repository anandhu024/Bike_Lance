<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rent Details</title>
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

    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    
  <?php
  session_start();
        $customer_id=$_SESSION['customer_id'];
include("header1.php");
include("config.php");
?> 
 <!-- <div class="hero-wrap ftco-degree-bg" style="background-image: url('https://cdn.99images.com/photos/wallpapers/bikes/bikes%20android-iphone-desktop-hd-backgrounds-wallpapers-1080p-4k-egq5e.jpg');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
         
          	
      </div>
        
      </div>
    </div> -->
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<!-- <span class="subheading">Blog</span> -->
            <h2>Rent Details</h2>
             
        </div>
        <div class="row d-flex">
        <?php
                        if(isset($_GET["requestid"]))
                        {
                            $requestid=$_GET["requestid"];  
                            $sql=mysqli_query($con,"SELECT *,r.`bike_status` as 'status',r.rentamount as'amount'  FROM `tblbikelancerequest` r 
                            inner join `tblbikelancebikemodel` m on r.`bike_id`=m.`model_id`
                            WHERE r.`request_id`='$requestid'");

// echo "SELECT *,r.`bike_status` as 'status' FROM `tblbikelancerequest` r 
// inner join `tblbikelancebikemodel` m on r.`bike_id`=m.`model_id`
// WHERE r.`request_id`='$requestid'";

                                           $display=mysqli_fetch_array($sql); 
                                           if($display["status"]=="Pending" || $display["status"]=="Accepted")
                                           {
                        ?>
        
            <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
            <a href="blog-single.html" class="block-20" style="background-image: url('../admin/assets/images/<?php echo $display["bike_modelimages"]?>');">
            </a>
            <div class="text pt-4">
            <div class="meta mb-3">
            <div> Model Name :-<a href="#"><?php echo $display["bike_modelname"] ?></a></div>
                  <h3 class="heading mt-2"><div>CC :-<a href="#"><?php echo $display["bike_modelcc"] ?></a></div></h3>
                  <!-- <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
                </div> 
              
            <!-- <p><a href="bikeviewmore.php?bikeid=<?php echo $display["bike_id"] ?>" class="btn btn-primary">Read more</a></p> -->
            
                <div class="form-group">
                <label for="" class="label">Choose from date :</label> 
			    <input type="date" class="form-control" readonly value="<?php echo $display["bike_requestfromdate"] ?>"  name="ramount">
			    </div>  
                <div class="form-group">
			    <label for="" class="label">Choose to date :</label>
			    <input type="date" class="form-control" readonly placeholder="to date" value="<?php echo $display["bike_requesttodate"] ?>"  name="tdate">
			    </div>
                <div class="form-group">
			    <label for="" class="label">Purpose :</label>
                <textarea class="form-control" readonly name="purpose">  <?php echo $display["bike_purpose"] ?></textarea>
   				</div>  
           <h3 class="heading mt-2">Rent Amount :-<a href="#"><?php echo $display["amount"] ?></a></h3>
           
          <div class="form-group">
                                                <label for="" class="label">Status :</label>
                                                <input type="text" class="form-control"  value="<?php echo $display["status"] ?>" readonly name="tdate">
                                                </div>
            </div>
            </div>
          </div>    <?php 
                                        }
                                        else if($display["status"]=="On Rent")
                                        {

                                            $sql1=mysqli_query($con,"SELECT *,r.rentamount as'amount',re.bike_registrationnumber as 'registrationnumber' FROM `tblbikelancerent` re inner join `tblbikelancerequest` r on re.`request_id`=r.`request_id` 
                                            inner join `tblbikelancebike` b on re.`bike_id`=b.`model_id` 
                                            inner join `tblbikelancebikemodel` m on r.`bike_id`=m.`model_id` 
                                            WHERE re.`request_id`='$requestid'");

                                            $display1=mysqli_fetch_array($sql1);


                                            
                                            ?>
        
                                            <div class="col-md-4 d-flex ftco-animate">
                                            <div class="blog-entry justify-content-end">
                                            <a href="blog-single.html" class="block-20" style="background-image: url('../admin/assets/images/<?php echo $display["bike_modelimages"]?>');">
                                            </a>
                                            <div class="text pt-4">
                                            <div class="meta mb-3">
                                            <!-- <div> Year:-<a href="#"><?php echo $display1["bike_year"] ?></a></div> -->
                                            <!-- <div><a href="#">Admin</a></div>
                                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
                                            </div> 
                                            <h3 class="heading mt-2">Registration Number :-<a href="#"><?php echo $display1["registrationnumber"] ?></a></h3>
                                            <!-- <p><a href="bikeviewmore.php?bikeid=<?php echo $display1["bike_id"] ?>" class="btn btn-primary">Read more</a></p> -->
                                            <div class="form-group">
                                                <label for="" class="label">Purpose :</label>
                                                <textarea class="form-control border-0" name="purpose"> <?php echo $display1["bike_purpose"] ?></textarea>
                                                </div> 
                                                <div class="form-group">
                                                <label for="" class="label">Choose from date :</label>
                                                <!-- <input type="date" class="form-control" placeholder="from date"  name="fdate"> -->
                                                <input type="date" class="form-control" value="<?php echo $display1["bike_rentdate"] ?>"  name="ramount">
                                                </div>  
                                                
                                                <div class="form-group">
                                                <label for="" class="label">Choose to date :</label>
                                                <input type="date" class="form-control"  value="<?php echo $display1["bike_renttodate"] ?>"  name="tdate">
                                                </div>                             
                                                              <h3 class="heading mt-2"><div> Rent Amount:-<a href="#"><?php echo $display1["amount"] ?></a></div></h3>


                                                <div class="form-group">
                                                <label for="" class="label">Advance Amount :</label>
                                                <input type="number" class="form-control"  value="<?php echo $display1["advanceamount"] ?>"  name="tdate">
                                                </div>  
                                                <div class="form-group">
                                                <label for="" class="label">Current Km :</label>
                                                <input type="number" class="form-control"  value="<?php echo $display1["bike_currentkm"] ?>"  name="tdate">
                                                </div> 
                                                <div class="form-group">
                                                <label for="" class="label">Rent Status :</label>
                                                <input type="text" class="form-control"  value="<?php echo $display1["rentstatus"] ?>"  name="tdate">
                                                </div>  
                                                                 
                                              </div>
                                              </div>
                                            </div> 
                                        <?php  
                                        }
                                        else if($display["status"]=="Rent Completed")
                                        {

                                            $sql1=mysqli_query($con,"SELECT *,b.bike_rentamount as 'brentamount',re.rentamount as'amount' FROM `tblbikelancerent` re 
                                            inner join `tblbikelancerequest` r on r.`request_id`=re.`request_id`
                                            inner join `tblbikelancecustomer` c on r.`customer_id`=c.`customer_id`
                                            inner join `tblbikelancebike` b on re.`bike_id`=b.`model_id`
                                            WHERE re.`request_id`='$requestid'");
                                            $display1=mysqli_fetch_array($sql1);  
                                        ?>
        
                                            <div class="col-md-4 d-flex ftco-animate">
                                            <div class="blog-entry justify-content-end">
                                            <a href="blog-single.html" class="block-20" style="background-image: url('../admin/assets/images/<?php echo $display["bike_modelimages"]?>');">
                                            </a>
                                            <div class="text pt-4">
                                            <div class="meta mb-3">
                                            <!-- <div> Year:-<a href="#"><?php echo $display1["bike_year"] ?></a></div> -->
                                            <!-- <h3 class="heading mt-2"><div> Rent Amount:-<a href="#"><?php echo $display1["amount"] ?></a></div></h3> -->
                                            <!-- <div><a href="#">Admin</a></div>
                                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
                                            </div> 
                                            <h3 class="heading mt-2">Registration Number :-<a href="#"><?php echo $display1["bike_registrationnumber"] ?></a></h3>
                                            <!-- <p><a href="bikeviewmore.php?bikeid=<?php echo $display1["bike_id"] ?>" class="btn btn-primary">Read more</a></p> -->
                                                
                                                <div class="form-group">
                                                <label for="" class="label">Purpose :</label>
                                                <textarea class="form-control border-0" name="purpose"><?php echo $display1["bike_purpose"] ?></textarea>
                                                </div> 
                                                <div class="form-group">
                                                <label for="" class="label">Choose from date :</label>
                                                <input type="date" class="form-control"  value="<?php echo $display1["rentreturndate"] ?>"  name="tdate">
                                                </div>
                                                <div class="form-group">
                                                <label for="" class="label">Choose to date :</label>
                                                <input type="date" class="form-control"  value="<?php echo $display1["bike_renttodate"] ?>"  name="tdate">
                                                </div>
                                                <div class="form-group">
                                                <label for="" class="label">Advance Amount :</label>
                                                <input type="number" class="form-control"  value="<?php echo $display1["advanceamount"] ?>"  name="tdate">
                                                </div>  
                                                <div class="form-group">
                                                <label for="" class="label">Current Km :</label>
                                                <input type="number" class="form-control"  value="<?php echo $display1["bike_currentkm"] ?>"  name="tdate">
                                                </div> 
                                                <div class="form-group">
                                                <label for="" class="label">Amount Paied :</label>
                                                <input type="number" class="form-control"  value="<?php echo $display1["amount"] ?>"  name="tdate">
                                                </div>  
                                                <div class="form-group">
                                                <label for="" class="label">Rent Status :</label>
                                                <input type="text" class="form-control"  value="<?php echo $display1["rentstatus"] ?>"  name="tdate">
                                                </div>           
                                              </div>
                                              </div>
                                            </div> 
                                        <?php 
                                        }
                                        else if($display["status"]=="Rejected")
                                        {
                                        ?>
                                        <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center text-center error-page bg-info">
          <div class="row flex-grow">
            <div class="col-lg-14 mx-auto text-white">
              <div class="row align-items-center d-flex flex-row">
                <div class="col-lg-14 text-lg-right pr-lg-4">
                  <h1 class="display-1 mb-0"></h1>
                </div>
                <div class="col-lg-14 error-page-divider text-lg-left pl-lg-4">
                  <h2>SORRY!</h2>
                  <h4 class="font-weight-light">Your request was rejected..</h4>
                </div>
              </div>
              <!-- <div class="row mt-5">
                <div class="col-12 text-center mt-xl-2">
                  <a class="text-white font-weight-medium" href="../../index.html">Back to home</a>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-12 mt-xl-2">
                  <p class="text-white font-weight-medium text-center">Copyright &copy; 2020 All rights reserved.</p>
                </div>
              </div> -->
            </div>
          </div>
        </div>
                                        <?php
                                        } 
                                        else
                                        {

                                            $sql1=mysqli_query($con,"SELECT * FROM `tblbikelancerent` re inner join `tblbikelancerequest` r on re.`request_id`=r.`request_id` inner join `tblbikelancebike` b on re.`bike_id`=b.`bike_id` WHERE re.`request_id`='$requestid'");

                                            $display1=mysqli_fetch_array($sql1);  
                                            ?>
        
                                            <div class="col-md-4 d-flex ftco-animate">
                                            <div class="blog-entry justify-content-end">
                                            <a href="blog-single.html" class="block-20" style="background-image: url('../admin/assets/images/<?php echo $display["bike_images"]?>');">
                                            </a>
                                            <div class="text pt-4">
                                            <div class="meta mb-3">
                                            <!-- <div> Year:-<a href="#"><?php echo $display1["bike_year"] ?></a></div> -->
                                            <h3 class="heading mt-2"><div> Rent Amount:-<a href="#"><?php echo $display1["bike_rentamount"] ?></a></div></h3>
                                            <!-- <div><a href="#">Admin</a></div>
                                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
                                            </div> 
                                            <h3 class="heading mt-2"><a href="#"><?php echo $display1["bike_registrationnumber"] ?></a></h3>
                                            <!-- <p><a href="bikeviewmore.php?bikeid=<?php echo $display1["bike_id"] ?>" class="btn btn-primary">Read more</a></p> -->
                                                <div class="form-group">
                                                <label for="" class="label">Choose from date :</label>
                                                <input type="date" class="form-control" placeholder="from date"  name="fdate">
                                                <input type="hidden" class="form-control" value="<?php echo $display1["bike_requestfromdate"] ?>"  name="ramount">
                                                </div>  
                                                <div class="form-group">
                                                <label for="" class="label">Choose to date :</label>
                                                <input type="date" class="form-control"  value="<?php echo $display1["bike_requesttodate"] ?>"  name="tdate">
                                                </div>
                                                <div class="form-group">
                                                <label for="" class="label">Choose to date :</label>
                                                <input type="date" class="form-control"  value="<?php echo $display1["rentamount"] ?>"  name="tdate">
                                                </div>  
                                                <div class="form-group">
                                                <label for="" class="label">Purpose :</label>
                                                <textarea class="form-control border-0" name="purpose"> value="<?php echo $display1["bike_purpose"] ?>"</textarea>
                                                </div> 
                                                <div class="form-group">
                                                <label for="" class="label">Choose to date :</label>
                                                <input type="date" class="form-control"  value="<?php echo $display1["bike_status"] ?>"  name="tdate">
                                                </div>  
                                                                 
                                              </div>
                                              </div>
                                            </div> 
                                        <?php  
                                        }




                                    }
                                        include("Footer.php");
                                        ?>

</div>
</div>
</div>
    </section>	
         

  

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

  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    
  </body>
</html>


 