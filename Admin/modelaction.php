<?php
session_start();

include("companyconfig.php"); 
if(isset($_POST['submit']))
{

$bikemodelname=$_POST["txt_modelname"];
$bikemodelcc=$_POST["txt_cc"];
$rentamount=$_POST['txt_ramount'];

$biketypeid=$_SESSION['biketypeid'];
$bikecompanyid=$_SESSION['company_id']; 


echo $bikecompanyid;
echo $biketypeid;

$loc= "./assets/images/";
$img=$_FILES['txt_image'] ['name'];
move_uploaded_file($_FILES['txt_image']['tmp_name'],$loc.$img);
 
 
$sql=mysqli_query($con,"SELECT count(*) as count FROM tblbikelancebikemodel WHERE bike_modelname='$bikemodelname'"); 

        $display=mysqli_fetch_array($sql);         
        if($display['count']>0) 
        {              
        echo "<script>alert('Already exist');window.location='modelregform.php';</script>";     
        }         
        else  
        { 
          $sql =( "INSERT INTO `tblbikelancebikemodel`(`bike_modelname`, `type_id`, `company_id`, `bike_modelcc`, `bike_modelimages`,bike_rentamount) 
          VALUES ('$bikemodelname','$biketypeid','$bikecompanyid','$bikemodelcc','$img','$rentamount')");
          $result = mysqli_query($con,$sql); 
          
        echo"<script>alert('registration successfully');window.location='modelview.php';</script>";  
            
        } 
} 

  
?>