<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php
    include("../Guest/config.php");
    include("Header.php");  
if(isset($_GET["rent_id"]))
{
$rent_id=$_GET["rent_id"];
$sql=mysqli_query($con,"SELECT * , m.bike_rentamount AS 'brentamount', re.rentamount AS 'amount'
FROM `tblbikelancerent` re
INNER JOIN `tblbikelancerequest` r ON r.`request_id` = re.`request_id`
INNER JOIN `tblbikelancecustomer` c ON r.`customer_id` = c.`customer_id`
INNER JOIN `tblbikelancebike` b ON re.`bike_id` = b.`model_id`
INNER JOIN `tblbikelancebikemodel` m ON m.`model_id` = b.`model_id`
WHERE re.`rent_id` = '2'
LIMIT 0 , 30
");
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
                  <center><h1 class="card-title">Completed Rent Details</h1></center>
                  <br>
                  <h1 class="card-title">Customer Details</h1>
                      <div class="form-group"> 
                        <label for="exampleInputName1">Consumer Name</label>
                        <input type="text" name="typename" class="form-control" readonly value="<?php echo $display["customer_name"]?>">
                      </div>
             
                    
                  <h1 class="card-title">Bike Details</h1> 
                  
                   
<div class="form-group"> 
                        <label for="exampleInputCity1">Registration Number</label>
                        <input type="text" name="registrationnumber" class="form-control" id="exampleInputCity1" readonly value="<?php echo $display["bike_registrationnumber"]?>">
                      </div>

<div class="form-group">
                        <label for="exampleInputCity1">Advance Amount</label>
                        <input type="text" name="advamount" id="advamount"  class="form-control" id="exampleInputCity1" readonly value="<?php echo $display["advanceamount"]?>">
                         </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Rent Amount</label>
                         <input type="text" name="rentamount" id="rentamount"  class="form-control" id="exampleInputCity1" readonly value="<?php echo $display["brentamount"]?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Current Kilometer</label>
                        <input type="text" name="currentkilomer" id="currentkilomer" class="form-control" id="exampleInputCity1" readonly value="<?php echo $display["bike_currentkm"]?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Rent date</label>
                        <input type="text" name="fdate"  id="fdate"class="form-control" id="exampleInputCity1" readonly value="<?php echo $display["bike_rentdate"]?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Return date</label>
                        <input type="date" name="tdate" id="tdate" class="form-control" id="exampleInputCity1" readonly value="<?php echo $display["rentreturndate"]?>" >
                      </div>
                      <div id="amount">
                      <div class="form-group">
                        <label for="exampleInputCity1">Balance Amount</label>
                        <input type="text" name="balanceamount" id="balanceamount" class="form-control" readonly value="<?php echo $display["amount"]?>" id="exampleInputCity1" >
                      </div>
</div>

 
                  </div>
                </div>
              </div>
            </div>
          </div>
 
          <?php 

include("Footer.php");
?>
          