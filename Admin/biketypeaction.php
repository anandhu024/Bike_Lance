<?php
include("companyconfig.php");
if(isset($_POST["submit"]))
{
$typename=$_POST["txt_bikename"];
$typedescription=$_POST["txt_biketypedescripition"];
$result=mysqli_query($con,"SELECT * FROM tblbikelancebiketype where bike_typename='$typename' ");
$row=mysqli_fetch_array($result);
if($row<=0)
{
$sql=mysqli_query($con,"insert into tblbikelancebiketype (bike_typename,bike_typediscription) VALUES ('$typename', '$typedescription')");
echo "<script>
        alert('Biketype details saved  successfully..');
        window.location='biketypeview.php'
    </script>"; 
}

else
{
    echo "<script>
       alert('Biketype details already exist..');
        window.location='biketypeview.php'
    </script>";   
}
}
if(isset($_POST['cancel']))
{
    header("location:biketypeview.php");
}
?>