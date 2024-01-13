<?php
session_start();
include 'excel_controller.php';
$db_handle = new DBController();
$productResult = $db_handle->runQuery("SELECT customer_name, `bike_requestdate` , bike_registrationnumber, bike_modelname
FROM `tblbikelancerequest` r
INNER JOIN tblbikelancecustomer c ON r.`customer_id` = c.customer_id
INNER JOIN tblbikelancebike b ON r.`bike_id` = b.bike_id
INNER JOIN tblbikelancebikemodel m ON b.`model_id` = m.model_id
WHERE r.bike_status = 'Rent Completed'");

    $filename = "Booking_excel.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult)) 
    {
        foreach ($productResult as $row) 
        {
            if (! $isPrintHeader) 
            {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }
    exit();

?>
