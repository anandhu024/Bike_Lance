<?php
include("companyconfig.php");
if(isset($_GET["companyid"]))
{
    $companyid=$_GET["companyid"];
    // sql to delete a record
    mysqli_query ($con,"delete from tblbikelancecompany where company_id= $companyid");
    
        echo "<script>window.location='companyregistrationview.php'</script>";	
			
}
?>