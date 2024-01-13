<?php
session_start();
include 'excel_controller.php';
$db_handle = new DBController();
$productResult = $db_handle->runQuery("SELECT bike_modelname, COUNT( bike_id ) AS model_count
FROM `tblbikelancebike` b
INNER JOIN tblbikelancebikemodel m ON m.model_id = b.model_id
GROUP BY bike_modelname");

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
