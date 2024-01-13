<?php
    include("../Guest/config.php");
    include("Header.php");        
if(isset($_GET["requestid"]))
{
  $requestid=$_GET["requestid"];
  $sql=mysqli_query($con,"SELECT *
  FROM `tblbikelancerequest` r
  INNER JOIN `tblbikelancecustomer` c ON r.`customer_id` = c.`customer_id`
  INNER JOIN `tblbikelancebikemodel` m ON r.`bike_id` = m.`model_id`
  WHERE r.`request_id` = '$requestid'
  LIMIT 0 , 30");
  $display=mysqli_fetch_array($sql);
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
                    <h1 class="card-title">Bike Details</h1>                   
                      <form method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="requestid" class="form-control" id="requestid" value="<?php echo $requestid?>">
                        <input type="hidden" name="modelid" class="form-control" id="modelid" value="<?php echo $display["model_id"]?>">
                          
                        <div class="form-group"> 
                          <select name="registrationnumber" class="form-control" style="width:500px;" >
                            <option class="form-control" value="0">--Select Bike--</option>
                            <?php
                              include("companyconfig.php");
                              $modelid=$display["model_id"];
                              $sql3=mysqli_query($con,"SELECT DISTINCT (
                                `bike_registrationnumber`
                                )
                                FROM `tblbikelancebike` b
                                LEFT JOIN `tblbikelancebikemodel` m ON b.`model_id` = m.`model_id`
                                LEFT JOIN tblbikelancerequest r ON m.model_id = r.bike_id
                                WHERE r.bike_status != 'On Rent'
                                AND m.model_id = '10'
                                UNION
                                SELECT DISTINCT (
                                `bike_registrationnumber`
                                )
                                FROM `tblbikelancebike` b
                                LEFT JOIN `tblbikelancebikemodel` m ON b.`model_id` = m.`model_id`
                                WHERE m.model_id = '10'
                                LIMIT 0 , 30
                                ");
                              while($display3=mysqli_fetch_array($sql3))
                              {
                            ?>
                            <option class="form-control" value="<?php echo $display3["bike_registrationnumber"] ?>"><?php echo $display3["bike_registrationnumber"] ?></option> 
                            <?php
                              }
                            ?>    
                          </select>            
                              <!--<label for="exampleInputCity1">Registration Number</label>
                              <input type="text" name="registrationnumber" class="form-control" id="exampleInputCity1" placeholder="Registration Number"> -->
                          </div>
                          <div class="form-group">  
                            <label for="exampleInputCity1">Current Km</label>
                            <input type="text" name="currentkm" class="form-control" id="currentkm" placeholder="Current Km">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputCity1">Advace Amount</label>
                            <input type="text" name="advamount" class="form-control" id="advamount" placeholder="Advace Amount">
                          </div>
                          <div class="form-group">
                            <label for="" class="label">To Date :</label>
                            <input type="date" class="form-control" min="<?php echo date('Y-m-d') ?>"  value="<?php echo $display["bike_requesttodate"]?>" name="tdate">
                          </div>  
                  </div>   
                    <!-- <button type="submit"  id="Accept" name="Accept" class="btn btn-primary mr-2">Accept</button> -->
                    <button type="submit"  id="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
          <?php 
  if(isset($_POST["submit"]))
  {   
  

      $currentkm=$_POST["currentkm"];
      $advamount=$_POST["advamount"];
      $registrationnumber=$_POST["registrationnumber"];
      $modelid=$_POST["modelid"];
      $bike_id=$_POST["bike_id"];
      $tdate=$_POST["tdate"];
      $rentdate=date("y-m-d");
      $rentstatus="On Rent";

    $sql=mysqli_query($con,"INSERT INTO `tblbikelancerent`(`request_id`, `bike_id`, `bike_currentkm`, `bike_rentdate`,bike_renttodate,advanceamount,rentstatus,bike_registrationnumber) VALUES('$requestid','$bike_id','$currentkm','$rentdate','$tdate','$advamount','$rentstatus','$registrationnumber')");
    $sql=mysqli_query($con,"UPDATE `tblbikelancerequest` SET `bike_status`='$rentstatus'  WHERE `request_id`='$requestid'");
      echo "<script>alert('Request Accepted!');
      window.location='rentrequestview.php';
      </script>";
  
  }
}
include("Footer.php");
?>
          