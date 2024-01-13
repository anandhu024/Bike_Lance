<?php
include("companyconfig.php");
if(isset($_POST["submit"]))
{
$companyname=$_POST["txt_companyname"];
$companyopeningdate=$_POST["txt_companyopeningdate"];
$companylocation=$_POST["txt_comapnylocation"];
$result=mysqli_query($con,"SELECT * FROM  tblbikelancecompany where bike_companyname='$companyname' ");
$row=mysqli_fetch_array($result);
if($row<=0)
{
$sql=mysqli_query($con,"insert into  tblbikelancecompany (	bike_companyname,bike_companyopeningdate,bike_companylocation) VALUES ('$companyname', '$companyopeningdate','$companylocation')");
echo "<script>
        alert('Bike company details saved  successfully..');
        window.location='companyregistrationview.php'
    </script>"; 
}

else
{
    echo "<script>
       alert('Bike company details already exist..');
        window.location='companyregistrationview.php'
    </script>"; 
}
}
if(isset($_POST['cancel']))
{
    header("location:companyregistrationview.php");
}
?>