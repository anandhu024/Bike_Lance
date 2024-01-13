<?php
include("config.php");
$username=$_POST["txtusername"];
$password=$_POST["txtpassword"];
$sql=mysqli_query($con,"select * from tblbikelanceadminlogin where admin_username='$username' and admin_password='$password'");
$row=mysqli_fetch_array($sql);
if($row>0)
{
    header("location:../Admin/index.php");

 } 
   else
{
    echo"<script>alert('invalid username/password');window.location='adminlogin.php'</script>";
}
?>