<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
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
?>

    <?php
     include("config.php");
     $sql=mysqli_query($con,"SELECT * FROM `tblbikelancebiketype` ");
     while($display=mysqli_fetch_array($sql))
     {
    ?>
      <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">What we offer</span>       
                    <h2 class="mb-2"><?php echo $display["bike_typename"] ?></h2>
                </div>
            </div>
            <div class="row"> 
                <div class="col-md-12">
                        <?php
                                    include("config.php");
                                    $type_id=$display["type_id"] ;
                                    $sql1=mysqli_query($con,"SELECT * FROM `tblbikelancebikemodel`m inner join `tblbikelancebike` b on b.`model_id`= m.`model_id` WHERE m.`type_id`=$type_id ");
                                    while($display1=mysqli_fetch_array($sql1))
                                    {
                                    //$display1=mysqli_fetch_array($sql1);
                                ?>
                            <div class="item"> 
                                <div class="carousel-car owl-carousel"> 
                                    <div class="car-wrap rounded ftco-animate">
                                        <div class="img rounded d-flex align-items-end" style="background-image;">
                                            <img src=../Admin/assets/images/<?php echo $display1["bike_images"]?>>
                                        </div>
                                        <div class="text">
                                            <h2 class="mb-0"><a href="#"><?php echo $display1["bike_modelname"] ?>  <?php echo $display1["bike_registrationnumber"] ?></a></h2>
                                            <div class="d-flex mb-3">
                                                <span class="cat">CC <?php echo $display1["bike_modelcc"] ?> Year <?php echo $display1["bike_year"] ?></span>
                                                <p class="price ml-auto"><span><?php echo $display1["bike_rentamount"] ?>/day</span></p>
                                            </div>
                                                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="bikedetails.php?bike_id=<?php echo $display1['bike_id']; ?>" class="btn theme_btn button_hover">Details</a></p>
                                        </div>
                                    </div>
                                </div>   
                            </div> 
                            <?php
                                }
                            ?>                            
                </div>
    		</div> 
    	</div>
    </section>
    <?php
     }
    ?>

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