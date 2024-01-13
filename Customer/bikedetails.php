<?php
include("config.php");
include("header.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BikeLance</title>
</head>
<body>
<form  method="post" enctype="multipart/form-data">
<?php
if(isset($_GET["bike_id"]))
{
    $bike_id=$_GET["bike_id"];

        
        $sql=mysqli_query($con,"sELECT * FROM `tblbikelancebike`m inner join `tblbikelancebikemodel` b on b.`model_id`= m.`model_id` inner join `tblbikelancecompany` c on b.`company_id`= c.`company_id` WHERE m.`bike_id`='$bike_id'");
        while($display=mysqli_fetch_array($sql))
        {
        ?>
<div class="logo">
<a href="./index.php">
<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
</div>
<div class="container" style="margin-left:300px; margin-bottom:10%;padding-left:120px; box-shadow: 2px 2px 10px #1b93e1; border-radius: 4px; top: 14px; 
margin-top:5%;"><br>
<a class="nav-link " href="index.php">back</a>
<h2 style="text-align: center;margin-top: 6%;">Bike View More</h2>
<br>
<div class="row">
<div class="col-md-3" style="text-align:left">
<label>Bike Model Name</label>
</div>
<div class="col-md-6">
<input type="text" class="form-control" name="txtbikename"
style="width:500px;"value="<?php echo $display["bike_modelname"] ?>" readonly>
</div>
</div>
<br>
<div class="row">
<div class="col-md-3" style="text-align:left">
<label>Bike Company Name</label>
</div>
<div class="col-md-3">
<input type="text" class="form-control" name="txtcustomername"
style="width:500px;"value="<?php echo $display["bike_companyname"] ?>" readonly>
</div>
</div>
<br>
<div class="row">
<div class="col-md-3" style="text-align:left">
<label>Bike Registration Number</label>
</div>
<div class="col-md-3">
<input type="text" class="form-control" name="txtcustomername"
style="width:500px;"value="<?php echo $display["bike_registrationnumber"] ?>" readonly>
</div>
</div>
<br>
<div class="row">
<div class="col-md-3" style="text-align:left">
<label>Bike year</label>
</div>
<div class="col-md-6">
<input type="text" class="form-control" name="txtlocation"
style="width:500px;"value="<?php echo $display["bike_year"] ?>" readonly>
</div>
</div>
<br>
<div class="row">
<div class="col-md-3" style="text-align:left">
<label>Bike Image</label>
</div>
<div class="col-md-6">
<img src="../Admin/assets/images/<?php echo $display["bike_images"] ?>" width="350" height="200">
</div>
</div>
<br>
<!-- <div class="row">
<div class="col-md-3" style="text-align:left">
<label>Bike ModelImage</label>
</div>
<div class="col-md-6">
<img src="../Admin/assets/images/<?php echo $display["bike_modelimages"] ?>" width="350" height="200">
</div>
</div>
<br> -->
<div class="row">
<div class="col-md-3" style="text-align:left">
<label>Bike Rental Amount</label>
</div>
<div class="col-md-6">
<input type="text" class="form-control" name="txtrentalamount"
style="width:500px;"value="<?php echo $display["bike_rentamount"] ?>" readonly>
</div>
</div>
<br> 
<div class="row">
<div class="col-md-5" style="text-align:right">
<p><a href="bikeviewmore.php?modelid=<?php echo $display["model_id"] ?>" class="btn btn-primary">Book Now</a></p>
<?php
}
}
?>

<br>
<br>
</div>
</div>
</div>
</form>
</body>
</html>
<?php
include("footer.php");
// include("config.php");
?>
