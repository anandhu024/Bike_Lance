<?php
include("config.php");
$name=$_POST["txtname"];
$address=$_POST["txtaddress"];
$email=$_POST["txtemail"];
$gender=$_POST["txtgender"];
$number=$_POST["txtphno"];
$licencenumber=$_POST["txtlicenceno"];
$aadharnumber=$_POST["txtaadharno"];
$sql=mysqli_query($con,"SELECT ifnull(count(*),0)+11 as count FROM
tblbikelancecustomer");
$display=mysqli_fetch_array($sql);
$id=$display['count'];
$pass="bikelance$id#@0";

//echo "insert into tblbikelancecustomer (customer_name,customer_password,customer_address,customer_licencenumber,customer_aadharnumber,customer_email,customer_phonenumber,customer_gender) VALUES ('$name', '$password','$address','$licencenumber', '$aadharnumber','$email','$number','$gender')";
$sql2=mysqli_query($con,"select * from tblbikelancecustomer where customer_licencenumber='$licencenumber' OR `customer_aadharnumber`='$aadharnumber'");
$display2=mysqli_fetch_row($sql2);  
if($display2>0)
//if($sql2)
{
  echo "<script>
      alert('Already signed in...Please Check Your Mailbox and login ');
      window.location='http://localhost/Bike%20Lance/Guest/customerlogin.php'; 
      </script>";
}
else
{
$sql1=mysqli_query($con,"insert into tblbikelancecustomer (customer_name,customer_password,customer_address,customer_licencenumber,customer_aadharnumber,customer_email,customer_phonenumber,customer_gender) VALUES ('$name', '$pass','$address','$licencenumber', '$aadharnumber','$email','$number','$gender')");   
$bodyContent="Dear $name, Your account has been successfully created, Please 
login using the username $email and Password $pass";
$mailtoaddress=$email;
//require('Mailtemplate.php'); 
echo "<script> alert('Please Wait For The Mail!!!');window.location='http://localhost/Bike%20Lance/Guest/customerlogin.php'; </script>";
}

?>