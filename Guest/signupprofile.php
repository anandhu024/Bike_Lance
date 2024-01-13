<?php
include("header.php");
include("config.php");
?>

<!doctype html>
<html>

<?php
       $customerid=$_GET["customer_id"];
       include("config.php");
       $s=1;
       $sql=mysqli_query($con,"SELECT * FROM tblbikelancebike where customer_id=$customerid");
       $display=mysqli_fetch_array($sql);
        {
        ?>
<h3>Customer Registration Form</h3>
 <div class="form-wrapper">
 <label for="">Name</label>
 <input type="text" class="form-control"  placeholder="eg:john smith" name="txtname"  value="<?php echo $display["customer_name"] ?>"  readonly>
 </div>
 <div class="form-wrapper">
 <label for="">Address</label>
 <input type="text" class="form-control"  placeholder="eg:address" name="txtaddress"  value="<?php echo $display["customer_address"] ?>"  readonly>
 </div>
 <div class="form-wrapper">
 <label for="">Email</label>
 <input type="text" class="form-control" placeholder="eg:abc@gmail.com" name="txtemail"  value="<?php echo $display["customer_email"] ?>"  readonly>
 </div>
 <div class="form-wrapper">
 <label for="">Gender</label>
 <input type="text" class="form-control" placeholder="eg:gender" name="txtgender"  value="<?php echo $display["customer_gender"] ?>"  readonly>
 </div>
 <div class="form-wrapper">
 <label for="">Phone Number</label>
 <input type="number" class="form-control"  placeholder="eg:number" name="txtphno"  value="<?php echo $display["customer_phonenumber"] ?>"  readonly>
 </div>
 <div class="form-wrapper">
 <label for="">licence Number</label>
 <input type="text" class="form-control"  placeholder="eg:licence number" name="txtlicenceno"  value="<?php echo $display["customer_licencenumber"] ?>"  readonly>
 </div>
 <div class="form-wrapper">
 <label for="">Aadhar Number</label>
 <input type="number" class="form-control"  placeholder="eg:aadhar number" name="txtaadharno"  value="<?php echo $display["customer_aadharnumber"] ?>"  readonly>
 </div>
 <div class="form-wrapper">
 <label for="">Password</label>
 <input type="password" class="form-control"  placeholder="eg:abc12@" name="txtpassword"  value="<?php echo $display["customer_password"] ?>"  readonly>
 </div>
<?php
                                            }
                                            ?>    
<div class="row">
<div class="col-md-5" style="text-align:right">
<input type="submit" name="submit" value="Edit" class="btn btn-primary"
style="margin-left:63%"><br>
<br>
</div>
</div>
</div>

</html>
<?php

include("footer.php");
?>