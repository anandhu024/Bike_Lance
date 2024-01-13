<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php
    include("../Guest/config.php");
    include("Header.php");  
if(isset($_GET["rent_id"]))
{
$rent_id=$_GET["rent_id"];
$sql=mysqli_query($con,"SELECT *,b.bike_rentamount as 'brentamount' FROM `tblbikelancerent` re 
inner join `tblbikelancerequest` r on r.`request_id`=re.`request_id`
inner join `tblbikelancecustomer` c on r.`customer_id`=c.`customer_id`
inner join `tblbikelancebike` b on re.`bike_id`=b.`model_id`
WHERE re.`rent_id`='$rent_id'");
$display=mysqli_fetch_array($sql); 
}
$_SESSION['ad_amount']=$display["advanceamount"];
$_SESSION['rent_amount']=$display["brentamount"];
$_SESSION['rent_date']=$display["bike_rentdate"];

?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="row">
              
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <center><h1 class="card-title">Rent Return Details</h1></center>
                  <br>
                  <h1 class="card-title">Customer Details</h1>
                      <div class="form-group"> 
                        <label for="exampleInputName1">Consumer Name</label>
                        <input type="text" name="typename" class="form-control" id="exampleInputName1" value="<?php echo $display["customer_name"]?>">
                      </div>
             
                    
                  <h1 class="card-title">Bike Details</h1> 
                  
                  
<form method="POST" enctype="multipart/form-data">
<div class="form-group"> 
                        <label for="exampleInputCity1">Registration Number</label>
                        <input type="text" name="registrationnumber" class="form-control" id="exampleInputCity1"  value="<?php echo $display["bike_registrationnumber"]?>">
                      </div>

<div class="form-group">
                        <label for="exampleInputCity1">Advance Amount</label>
                        <input type="text" name="advamount" id="advamount"  class="form-control" id="exampleInputCity1" value="<?php echo $display["advanceamount"]?>">
                         </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Rent Amount</label>
                         <input type="text" name="rentamount" id="rentamount"  class="form-control" id="exampleInputCity1" value="<?php echo $display["brentamount"]?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Current Kilometer</label>
                        <input type="text" name="currentkilomer" id="currentkilomer" class="form-control" id="exampleInputCity1" value="<?php echo $display["bike_currentkm"]?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Rent date</label>
                        <input type="text" name="fdate"  id="fdate"class="form-control" id="exampleInputCity1" value="<?php echo $display["bike_rentdate"]?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Return date</label>
                        <input type="date" name="tdate" id="tdate" class="form-control" id="exampleInputCity1" onChange="getamount()" >
                      </div>
                      <div id="amount">
                      <div class="form-group">
                        <label for="exampleInputCity1">Balance Amount</label>
                        <input type="text" name="balanceamount" id="balanceamount" class="form-control" id="exampleInputCity1" >
                      </div>
</div>


<form method="POST" enctype="multipart/form-data">
<input type="hidden" name="requestid" class="form-control" id="requestid" value="<?php echo $display["request_id"]?>">

                      <button type="submit"  id="submit" name="submit" class="btn btn-primary mr-2">Rent Return</button>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
<script>
function getamount()
{ 
var tdate=document.getElementById('tdate').value; 


$.ajax({
			type: "POST",
			url: "getamount.php",
			data: "tdate="+tdate,
			
			success: function(data){

				$("#amount").html(data);
			}
		})
  
document.getElementById('balanceamount').value=rentamount;
}
</script>
          <?php 
if (isset($_POST["submit"]))
{   
  
  $rentamount=$_POST["balanceamount"];
  $requestid=$_POST["requestid"];
  $rentreturndate=date("y-m-d"); 
  $rentstatus="Rent Completed";
  $sql=mysqli_query($con,"UPDATE `tblbikelancerequest` SET `bike_status`='$rentstatus' WHERE `request_id`='$requestid'");
   $sql=mysqli_query($con,"UPDATE `tblbikelancerent` SET `rentstatus`='$rentstatus',`rentreturndate`='$rentreturndate',`rentamount`='$rentamount' WHERE `rent_id`='$rent_id'");
   echo "UPDATE `tblbikelancerent` SET `rentstatus`='$rentstatus',`rentreturndate`='$rentreturndate',`rentamount`='$rentamount' WHERE `rent_id`='$rent_id'";

     echo "<script>alert('Rent Completed!!');window.location='rentreturn.php';</script>";
 
}
include("Footer.php");
?>
          