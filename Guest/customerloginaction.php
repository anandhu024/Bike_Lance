<?php

include("config.php");
$email=$_POST["txtemail"];
$password=$_POST["txtpassword"];
$sql=mysqli_query($con,"select * from tblbikelancecustomer where customer_email='$email' and customer_password='$password'");
$row=mysqli_fetch_array($sql);
if($row>0)
{
   session_start();
    $_SESSION['customer_id']=$row['customer_id'];
    header("location:../customer/index.php");

 } 
   else
{
   echo"<script>alert('invalid username/password');window.location='customerlogin.php'</script>";
}
?>