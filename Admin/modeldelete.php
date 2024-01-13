<?php
include("companyconfig.php");
if(isset($_GET["modelid"]))
{
    $modelid=$_GET["modelid"];
    // sql to delete a record
    mysqli_query ($con,"delete from tblbikelancebikemodel where bike_modelnumber= $modelid");
    
       echo "<script>window.location='modelview.php'</script>";	
			
}