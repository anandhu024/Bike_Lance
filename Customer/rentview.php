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
  </head>
  <body>
    
  <?php
        session_start();
        $customer_id=$_SESSION['customer_id'];
include("header1.php");
include("config.php");
?> 
   
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-11">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<!-- <span class="subheading">Blog</span> -->
            <h2>Rent Details</h2>
             
          </div>
        </div>

        <div class="container">
        <div class="row justify-content-center mb-5">
                <div class="col-md-9 heading-section text-center ftco-animate">
                    <h4>Requested Bikes</h4> 
                    <div class="row d-flex">
                        <?php 
                            $sql1=mysqli_query($con,"SELECT *
                            FROM `tblbikelancerequest` r
                            INNER JOIN `tblbikelancebikemodel` m ON r.`bike_id` = m.`model_id`
                            WHERE r.`customer_id` = '$customer_id'
                            AND bike_status = 'Pending'");
                            while($display=mysqli_fetch_array($sql1))
                            {
                                         
                        ?>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry justify-content-end">
                                <a href="blog-single.html" class="block-20" style="background-image: url('../admin/assets/images/<?php echo $display["bike_modelimages"]?>');">
                                </a>
                                <div class="text pt-4">
                                    <div class="meta mb-3">
                                        <div> Model Name:-<a href="#"><?php echo $display["bike_modelname"] ?></a></div>
                                        <!-- <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
                                    </div> 
                                    <h3 class="heading mt-2">CC-<a href="#"><?php echo $display["bike_modelcc"] ?></a></h3>
                                    <h3 class="heading mt-2"><div>Rent Amount:-<a href="#"><?php echo $display["bike_rentamount"] ?></a></div></h3>
                                    <p><a href="rentviewmore.php?requestid=<?php echo $display["request_id"] ?>" class="btn btn-primary">Read more</a></p>
                                </div>
                            </div>
                        </div>     
                        <?php
                            }  
                            // $row=mysqli_fetch_row($sql1);
                            // if($row<=0)
                            // {
                            //     echo "No Request was made..";
                            // } 
                        ?>           
                    </div>
            </div>
            </div>
            <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-9 heading-section text-center ftco-animate">
                    <h4>Accepted</h4> 
                    <div class="row d-flex">
                        <?php 
                            $sql2=mysqli_query($con,"SELECT * FROM `tblbikelancerequest` r 
                            inner join tblbikelancebike b on b.model_id=r.bike_id  
                            inner join `tblbikelancebikemodel` m on r.`bike_id`=m.`model_id` 
                            WHERE r.`customer_id`='$customer_id' and bike_status='Accepted' ");
                            while($display=mysqli_fetch_array($sql2))
                            {
                                         
                        ?>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry justify-content-end">
                                <a href="blog-single.html" class="block-20" style="background-image: url('../admin/assets/images/<?php echo $display["bike_modelimages"]?>');">
                                </a>
                                <div class="text pt-4">
                                    <div class="meta mb-3">
                                        <div> Model Name:-<a href="#"><?php echo $display["bike_modelname"] ?></a></div>
                                        <!-- <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
                                    </div> 
                                    <h3 class="heading mt-2">CC-<a href="#"><?php echo $display["bike_modelcc"] ?></a></h3>
                                    <h3 class="heading mt-2"><div>Rent Amount:-<a href="#"><?php echo $display["bike_rentamount"] ?></a></div></h3>
                                    <p><a href="rentviewmore.php?requestid=<?php echo $display["request_id"] ?>" class="btn btn-primary">Read more</a></p>
                                </div>
                            </div>
                        </div>     
                        <?php
                            } 
                            // $row=mysqli_fetch_row($sql2);
                            // if($row<=0)
                            // {
                            //     echo "No Request was accepted yet..";
                            // }  
                        ?>           
                    </div>
                </div>
            </div>
            <div class="container">
        <div class="row justify-content-center mb-5">
                <div class="col-md-9 heading-section text-center ftco-animate">
                    <h4>On Rent</h4> 
                    <div class="row d-flex">
                        <?php 
                            $sql3=mysqli_query($con,"SELECT *
                            FROM `tblbikelancerequest` r
                            INNER JOIN `tblbikelancebikemodel` m ON r.`bike_id` = m.`model_id`
                            WHERE r.`customer_id` = '$customer_id'
                            AND bike_status = 'On Rent'");
                            while($display=mysqli_fetch_array($sql3))
                            {
                                         
                        ?>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry justify-content-end">
                                <a href="blog-single.html" class="block-20" style="background-image: url('../admin/assets/images/<?php echo $display["bike_modelimages"]?>');">
                                </a>
                                <div class="text pt-4">
                                    <div class="meta mb-3">
                                        <div> Model Name:-<a href="#"><?php echo $display["bike_modelname"] ?></a></div>
                                        <!-- <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
                                    </div> 
                                    <h3 class="heading mt-2">CC-<a href="#"><?php echo $display["bike_modelcc"] ?></a></h3>
                                    <h3 class="heading mt-2"><div>Rent Amount:-<a href="#"><?php echo $display["bike_rentamount"] ?></a></div></h3>
                                    <p><a href="rentviewmore.php?requestid=<?php echo $display["request_id"] ?>" class="btn btn-primary">Read more</a></p>
                                </div>
                            </div>
                        </div>     
                        <?php
                            }  
                            // $row=mysqli_fetch_row($sql3);
                            // if($row<=0)
                            // {
                            //     echo "No bike is on rent..";
                            // } 
                        ?>           
                    </div>
            </div>
            </div>
            <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-9 heading-section text-center ftco-animate">
                    <h4>Rent Completed Bike</h4> 
                    <div class="row d-flex">
                        <?php 
                            $sql5=mysqli_query($con,"SELECT * FROM `tblbikelancerequest` r 
                            inner join tblbikelancebike b on b.model_id=r.bike_id  
                            inner join `tblbikelancebikemodel` m on r.`bike_id`=m.`model_id` 
                            WHERE r.`customer_id`='$customer_id' and bike_status='Rent Completed' ");
                            while($display=mysqli_fetch_array($sql5))
                            {
                                         
                        ?>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry justify-content-end">
                                <a href="blog-single.html" class="block-20" style="background-image: url('../admin/assets/images/<?php echo $display["bike_modelimages"]?>');">
                                </a>
                                <div class="text pt-4">
                                    <div class="meta mb-3">
                                        <div> Model Name:-<a href="#"><?php echo $display["bike_modelname"] ?></a></div>
                                        <!-- <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
                                    </div> 
                                    <h3 class="heading mt-2">CC-<a href="#"><?php echo $display["bike_modelcc"] ?></a></h3>
                                    <h3 class="heading mt-2"><div>Rent Amount:-<a href="#"><?php echo $display["bike_rentamount"] ?></a></div></h3>
                                    <p><a href="rentviewmore.php?requestid=<?php echo $display["request_id"] ?>" class="btn btn-primary">Read more</a></p>
                                </div>
                            </div>
                        </div>     
                        <?php
                            } 
                            // $row5=mysqli_fetch_row($sql5);
                            // if($row<=0)
                            // {
                            //     echo "No Rents was completed..";
                            // }  
                        ?>           
                    </div>
                </div>
            </div>
            <div class="container">
        <div class="row justify-content-center mb-5">
                <div class="col-md-9 heading-section text-center ftco-animate">
                    <h4>Rejected Requests</h4> 
                    <div class="row d-flex">
                        <?php 
                            $sql4=mysqli_query($con,"SELECT *
                            FROM `tblbikelancerequest` r
                            INNER JOIN `tblbikelancebikemodel` m ON r.`bike_id` = m.`model_id`
                            WHERE r.`customer_id` = '$customer_id'
                            AND bike_status = 'Rejected'");
                            if (empty($sql4)) {
                                echo "No Request was rejected yet..";
                                
                            }
                            while($display=mysqli_fetch_array($sql4))
                            {
                                         
                        ?>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry justify-content-end">
                                <a href="blog-single.html" class="block-20" style="background-image: url('../admin/assets/images/<?php echo $display["bike_modelimages"]?>');">
                                </a>
                                <div class="text pt-4">
                                    <div class="meta mb-3">
                                        <div> Model Name:-<a href="#"><?php echo $display["bike_modelname"] ?></a></div>
                                        <!-- <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
                                    </div> 
                                    <h3 class="heading mt-2">CC-<a href="#"><?php echo $display["bike_modelcc"] ?></a></h3>
                                    <h3 class="heading mt-2"><div>Rent Amount:-<a href="#"><?php echo $display["bike_rentamount"] ?></a></div></h3>
                                    <p><a href="rentviewmore.php?requestid=<?php echo $display["request_id"] ?>" class="btn btn-primary">Read more</a></p>
                                </div>
                            </div>
                        </div>     
                        <?php
                            } 
                            // $row=mysqli_fetch_row($sql4);
                            // if($row==0)
                            // {
                            //     echo "No Request was rejected yet..";
                            // } 
                        ?>           
                    </div>
            </div>
            </div>


     
     </section>	
</div>
</div>
</div>
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


 