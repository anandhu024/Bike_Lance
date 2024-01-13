<?php
 include("config.php");
 session_start();
 if (isset($_POST["submit"]))
 {         
                $name=$_POST["txtname"];
                $address=$_POST["txtaddress"];
                $email=$_POST["txtemail"];
                $gender=$_POST["txtgender"];
                $number=$_POST["txtphno"];
                $licencenumber=$_POST["txtlicenceno"];
                $aadharnumber=$_POST["txtaadharno"];
                $password=$_POST["txtpassword"];
                $customerid=$_SESSION['customer_id'];
                $sql=mysqli_query($con,"UPDATE `tblbikelancecustomer` SET `customer_name`='$name',`customer_address`='$address',`customer_email`='$email',`customer_gender`='$gender',`customer_phonenumber`='$number',`customer_licencenumber`='$licencenumber',`customer_aadharnumber`='$aadharnumber',`customer_password`='$password' WHERE customer_id='$customerid'");
              // echo "UPDATE `tblbikelancecustomer` SET `customer_name`='$name',`customer_address`='$address',`customer_email`='$email',`customer_gender`='$gender',`customer_phonenumber`='$number',`customer_licencenumber`='$licencenumber',`customer_aadharnumber`='$aadharnumber',`customer_password`='$password' WHERE customer_id='$customerid'";
 
                if($sql)
               {
                    echo "<script>
                        alert('Details updated sucsessfullly!!!');
                        window.location='customer'; </script>";
               }
            }                 
           
 ?>