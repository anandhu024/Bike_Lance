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
include("header1.php");
include("config.php");
session_start();
$customer_id=$_SESSION['customer_id'];
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
            <h2>View Bikes</h2>

            <form method="POST" enctype="multipart/form-data">
            <div class="form-group">  
              <select name="typeid" id="typeid" class="form-control form-control-lg" onchange="getcompany()"  style="width:500px;" >
                <option value="0">--Select Bike Type--</option>
                  <?php                    
                    //$_SESSION['pick_date']=$_POST['pick_date'];                            
                   // $_SESSION['off_date']=$_POST['off_date']; 
                    $pick_date=$_POST['pick_date'];                            
                    $off_date=$_POST['off_date'];                              
                    $sql=mysqli_query($con,"SELECT * FROM `tblbikelancebiketype`");
                    while($display=mysqli_fetch_array($sql))
                    {
                  ?>
                  <option value="<?php echo $display["type_id"] ?>"><?php echo $display["bike_typename"] ?></option> 
                    <?php
                      }
                    ?>    
              </select>
              <input type="date" hidden class="form-control" id="pick_date" min="" name="pick_date" value="<?php echo $pick_date ?>">
              <input type="date" hidden class="form-control" id="off_date" min="" name="off_date" value="<?php echo $off_date ?>">
            </div>  
            <?php
           // echo $pick_date;
            ?>
            <div id="company">    
            <div class="form-group"> 
              <select name="companyid" id="companyid" class="form-control form-control-lg" onchange="this.form.submit()" style="width:500px;" >
                <option value="0">--Select Bike Company--</option>
                  <?php
                    include("../Guest/config.php");
                    $sql=mysqli_query($con,"SELECT * FROM `tblbikelancecompany`");
                    while($display=mysqli_fetch_array($sql))
                    {
                  ?>
                  <option value="<?php echo $display["company_id"] ?>"><?php echo $display["bike_companyname"] ?></option> 
                    <?php
                      }
                    ?>    
              </select>
            </div>
            </div>
          </form>             
        </div>          
               
        </div>      
        <div class="row d-flex">        
            <?php
              if(isset($_POST["companyid"]))
                {
                  $companyid=$_POST["companyid"]; 
                  $typeid=$_POST["typeid"]; 
                              // $_SESSION['model_id']=$bikemodelid;
                              //$_SESSION['tdate']=$todate;
                              $sql=mysqli_query($con,"SELECT * FROM `tblbikelancebikemodel` m 
                              WHERE m.`type_id`='$typeid'  and m.`company_id`='$companyid' ");
                 /* echo  "SELECT * FROM `tblbikelancebikemodel` m 
                  inner join tblbikelancebike b on b.model_id=m.model_id
                  WHERE m.`type_id`='$typeid'  and m.`company_id`='$companyid'  ";  */          
                  while($display=mysqli_fetch_array($sql))
                  {                                          
            ?> 
              <script>document.getElementById('typeid').value=<?php echo $typeid; ?>;</script>
              <script>document.getElementById('companyid').value=<?php echo $companyid; ?>;</script>
                    
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
                  <p>
                    
                  <form method="POST" enctype="multipart/form-data" action="bikeviewmore.php?modelid=<?php echo $display["model_id"] ?>">
                    <input type="date" class="form-control" hidden id="pick_date" min="" name="pick_date" value="<?php echo $_POST['pick_date'] ?>">
                    <input type="date" class="form-control" hidden id="off_date" min="" name="off_date" value="<?php echo $off_date ?>">
                    <input type="submit" value="Rent Now " class="btn btn-primary">
                   </form>
                    <!-- <a href="bikeviewmore.php?modelid=<?php echo $display["model_id"] ?>" class="btn btn-primary">Read more</a> -->
                  </p>
                </div>
              </div>
            </div> 
            <?php
            }
           }
          ?> 
        </div>           
      </section> 
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
  function getcompany()
	{
		var val=document.getElementById('typeid').value;
		//alert(val);
		$.ajax({
			type: "POST",
			url: "getcompany.php",
			data: "id="+val,
			
			success: function(data)
      {
				$("#company").html(data);
			}
		})
	}
    </script>   
  </body>
</html>


 