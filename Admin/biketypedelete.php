<?php
include("companyconfig.php");
if(isset($_GET["typeid"]))
{
    $typeid=$_GET["typeid"];
    // sql to delete a record
    mysqli_query ($con,"delete from tblbikelancebiketype where type_id= $typeid");
    
        echo "<script>window.location='biketypeview.php'</script>";	
			
}
