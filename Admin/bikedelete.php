<?php
include("companyconfig.php");
if(isset($_GET["bikeid"]))
{
    $bikeid=$_GET["bikeid"];
    // sql to delete a record
    mysqli_query ($con,"delete from tblbikelancebike where bike_id= $bikeid");
    echo "<script>
    window.location='bikeview.php'
    </script>";	
			
}
?>