<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bike View</title>
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
  session_start();
  $customer_id=$_SESSION['customer_id'];
 // echo $customer_id;
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
          	<span class="subheading"></span>
            <h2>Bike View</h2>
             
        </div>
        <div class="row d-flex">
        <?php
                        if(isset($_GET["modelid"]))
                        {
                            $modelid=$_GET["modelid"]; 
                            if(isset($_POST["pick_date"]))
                        {
                             $fdate=$_POST['pick_date'];
                             $tdate=$_POST['off_date'];
                        }
                           // echo $_POST['pick_date'] ;
                            //  $_SESSION['pick_date']=$pick_date;                            
                            // $_SESSION['off_date']=$off_date;
                           // echo $_SESSION['pick_date'] ;
                            // $_SESSION['model_id']=$bikemodelid;                            
                            // $_SESSION['tdate']=$todate;
                            $sql=mysqli_query($con,"SELECT * FROM `tblbikelancebikemodel` m 
                            inner join tblbikelancebike b on b.model_id=m.model_id
                             WHERE m.`model_id`='$modelid' ");
                            /* echo  "SELECT * FROM `tblbikelancebikemodel` m 
                            inner join tblbikelancebike b on b.model_id=m.model_id
                             WHERE m.`model_id`='$modelid' "; */
                             
                            $display=mysqli_fetch_array($sql);  
                            $_SESSION['$modelname']=$display["bike_modelname"];                           
                  ?>        
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('../admin/assets/images/<?php echo $display["bike_modelimages"]?>');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div> Model Name:-<a href="#"><?php echo $display["bike_modelname"] ?></a></div>
                  <h3 class="heading mt-2"><div>CC:-<a href="#"><?php echo $display["bike_modelcc"] ?></a></div></h3>
                  <h3 class="heading mt-2"><div>Rent Amount:-<a href="#"><?php echo $display["bike_rentamount"] ?></a></div></h3> 
                  
                  <?php
                            $modelid=$_GET["modelid"]; 
                            $modelname=$_SESSION['$modelname'];  
                            $date_now = new DateTime();        
                            $num=mysqli_query($con,"SELECT COUNT( bike_registrationnumber ) AS bikecount
                            FROM `tblbikelancebikemodel` m
                            INNER JOIN tblbikelancebike b ON b.model_id = m.model_id
                            WHERE `bike_modelname` = '$modelname'
                            GROUP BY `bike_modelname`"); 
                            $display2=mysqli_fetch_array($num); 
                  ?>
                  <h6><div> We have <?php echo $display2["bikecount"] ?> bikes of this model</div></h6>
                 
                  <!-- <div><a href="#">Admin</a></div>  
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
                </div> 
                <!-- <h3 class="heading mt-2"><a href="#">
                  <?php echo $display["bike_registrationnumber"] ?></a></h3> -->
                <!-- <p><a href="bikeviewmore.php?bikeid=
                <?php echo $display["bike_id"] ?>" class="btn btn-primary">Read more</a></p> -->
               
            	<form method="POST" enctype="multipart/form-data">
                <div class="form-group">
			    					<label for="" class="label">Choose from date :</label>
			    					<input type="date" class="form-control" onchange="getfdate()" id="pick_date" required min="<?php echo date('Y-m-d') ?>" name="fdate" value="<?php echo $fdate ?>">
			    					<input type="hidden" class="form-control" value="<?php echo $display["bike_rentamount"] ?>"  name="ramount">
			    				</div>  
                  <script> 
                   function getfdate()
	                {
                 var fdate=document.getElementById('pick_date').value;
                 document.getElementById("off_date").min=fdate; 
                  }
                  </script>
                  <div class="form-group">
			    					<label for="" class="label">Choose to date :</label>
			    					<input type="date" class="form-control" placeholder="to date" id="off_date" min="" required name="tdate" value="<?php echo $tdate ?>">
			    				</div> 
                  <div class="form-group">
			    					<label for="" class="label">Purpose :</label>
                    <textarea class="form-control border-1" required name="purpose"></textarea>
			    				</div> 
                  <div class="form-group">
			              <input type="submit" value="Submit" class="btn btn-secondary py-3 px-4" name="submit">
			            </div>

              </form>
            </div>
            </div>
          </div> 
      <?php 
                                        }
                                        if (isset($_POST["submit"]))
                                        { 

                                           $fdate=$_POST["fdate"];
                                           $tdate=$_POST["tdate"];

                                           /* $date_now = new DateTime();
                                            
                                            if ($date_now > $fdate || $tdate > $fdate) 
                                            {
                                              echo "<script> alert('Invalid date!!');
                                              window.location='http://localhost/Bike%20Lance/customer/bikeviewmore.php?modelid=$modelid';</script>";
                                            }
                                            else
                                            { */
                                            $purpose=$_POST["purpose"];
                                            $ramount=$_POST["ramount"];
                                            $requestdate=date("y-m-d");
                                            $now = strtotime($fdate);
                                            $your_date = strtotime($tdate);
                                            $datediff = $your_date-$now;
                                            $rentamount = round($datediff / (60 * 60 * 24))*$ramount;
 
                                            $sql=mysqli_query($con,"INSERT INTO `tblbikelancerequest`(`bike_requestdate`, `customer_id`, `bike_requestfromdate`, `bike_requesttodate`, `bike_status`, `bike_purpose`, `bike_id`,rentamount) VALUES('$requestdate','$customer_id','$fdate','$tdate','Pending','$purpose','$modelid','$rentamount')");
                                        
                                              // echo "INSERT INTO `tblbikelancerequest`(`bike_requestdate`, `customer_id`, `bike_requestfromdate`, `bike_requesttodate`, `bike_status`, `bike_purpose`, `bike_id`,rentamount) VALUES('$requestdate','$customer_id','$fdate','$tdate','Pending','$purpose','$modelid','$rentamount')";
                                                if($sql)
                                                {
                                                    echo "<script>alert('Request Send!!');window.location='rentview.php';</script>";
                                                }
                                            }
                                     // }
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
    
  </body>
</html>


 