<?php
include("companyconfig.php");
session_start();
if(isset($_POST['submit']))
{
    $regno=$_POST["txt_regno"];
    $bikeyr=$_POST["txt_year"];
  //  $rentamount=$_POST["txt_ramount"];

    $modelid=$_SESSION["model_id"];
    //$typeid=$_SESSION["typeid"];

    $loc="./assets/images/";
    $img=$_FILES['txt_image']['name'];
    move_uploaded_file($_FILES['txt_image']['tmp_name'],$loc.$img);

    $result=mysqli_query($con,"SELECT * FROM tblbikelancebike where bike_registrationnumber='$regno' ");
    $display=mysqli_fetch_array($result);         
    if($display>0)
    {
        echo "<script>
            alert('Bike details already exist..');
            window.location='bikeview.php'
            </script>";   
    }
    else
    {
     /*echo "insert into tblbikelancebike (bike_registrationnumber,model_id,bike_year,bike_images,bike_rentamount) 
     VALUES ('$regno', '$modelid', '$bikeyr','$img','$rentamount')";
      */
     $sql=mysqli_query($con,"insert into tblbikelancebike (bike_registrationnumber,model_id,bike_year,bike_images) 
        VALUES ('$regno', '$modelid', '$bikeyr','$img')");
        echo "<script>
            alert('Bike details saved  successfully..');
            window.location='bikeview.php'
            </script>"; 
           
    }
}
?>