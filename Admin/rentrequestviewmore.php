<?php
    include("../Guest/config.php");
    include("Header.php");        
if(isset($_GET["requestid"]))
{
$requestid=$_GET["requestid"];
$sql=mysqli_query($con,"SELECT * FROM `tblbikelancerequest` r 
inner join `tblbikelancecustomer` c on r.`customer_id`=c.`customer_id`
inner join `tblbikelancebike` b on r.`bike_id`=b.`bike_id`
WHERE r.`request_id`='$requestid'");
$display=mysqli_fetch_array($sql); 
}
?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="row">
              
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <center><h1 class="card-title">Rent Request Details</h1></center>
                  <br>
                  <h1 class="card-title">Customer Details</h1>
                      <div class="form-group"> 
                        <label for="exampleInputName1">Consumer Name</label>
                        <input type="text" name="typename" class="form-control" readonly id="exampleInputName1" value="<?php echo $display["customer_name"]?>">
                      </div>
             
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input type="text" name="typeamount" class="form-control" readonly id="exampleInputEmail3" value="<?php echo $display["customer_email"]?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Contact Number</label>
                        <input type="text" name="literamount" class="form-control" readonly id="exampleInputPassword4" value="<?php echo $display["customer_phonenumber"]?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Licence Number</label>
                        <input type="text" name="literlimit" class="form-control" readonly id="exampleInputPassword4" value="<?php echo $display["customer_licencenumber"]?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Aadharnumbe Number</label>
                        <input type="text" name="fineamount" class="form-control" readonly id="exampleInputCity1" value="<?php echo $display["customer_aadharnumber"]?>">
                      </div> 
                      <div class="form-group">
                        <label for="exampleInputCity1">Address</label>
                        <input type="text" name="fineamount" class="form-control" readonly id="exampleInputCity1" value="<?php echo $display["customer_address"]?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Gender</label>
                        <input type="text" name="fineamount" class="form-control" readonly id="exampleInputCity1" value="<?php echo $display["customer_gender"]?>">
                      </div>
                      <br>
                      <br>
                  <br>
                   
                  <div class="form-group">
			    					<label for="" class="label">From date :</label>
			    					<input type="date" class="form-control" value="<?php echo $display["bike_requestfromdate"] ?>"   name="fdate">
			    					<!-- <input type="hidden" class="form-control"  name="ramount"> -->
			    				</div>  
                                <div class="form-group">
			    					<label for="" class="label">To date :</label>
			    					<input type="date" class="form-control"value="<?php echo $display["bike_requesttodate"] ?>"   name="tdate">
			    				</div> 
<form method="POST" enctype="multipart/form-data">
<!-- <input type="hidden" name="requestid" class="form-control" id="requestid" value="<?php echo $requestid?>"> -->

                      <button type="submit"  id="Accept" name="Accept" class="btn btn-primary mr-2">Accept</button>
                      <button type="submit"  id="Reject" name="Reject" class="btn btn-primary mr-2">Reject</button>
</form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php 
if (isset($_POST["Accept"]))
{   
 

   $sql=mysqli_query($con,"UPDATE `tblbikelancerequest` SET `bike_status`='Accepted' WHERE `request_id`='$requestid'");
 
     echo "<script>alert('Request Accepted!!');window.location='rentrequestview.php';</script>";
 
}
if (isset($_POST["Reject"]))
{ 
    $sql=mysqli_query($con,"UPDATE `tblbikelancerequest` SET `bike_status`='Rejected' WHERE `request_id`='$requestid'");
 
     //  echo "UPDATE `tblgasfirmnewconnection` SET `connectionstatus`='Rejected' WHERE `connectionid`='$connectionid'";
        if($sql)
        {
            echo "<script>alert('Request Rejected!!');window.location='rentrequestview.php';</script>";
        }
}
include("Footer.php");
?>
          