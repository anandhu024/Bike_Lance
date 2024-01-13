<?php 
session_start();
$tdate=$_POST['tdate'];  
$bikerent=$_SESSION['rent_amount'];
$fdate=$_SESSION['rent_date'];
$adamount=$_SESSION['ad_amount'];
$now = strtotime($fdate);
$your_date = strtotime($tdate);
$datediff = $your_date-$now;
$amount = round($datediff / (60 * 60 * 24))*$bikerent;
$balanceamount=$amount-$adamount;
     ?>
  
  <div class="form-group">
                        <label for="exampleInputCity1">Balance Amount</label>
                        <input type="text" name="balanceamount" id="balanceamount" class="form-control" value="<?php echo $balanceamount?>" id="exampleInputCity1" >
                      </div>  