<?php
session_start();
include 'excel_controller.php';
$db_handle = new DBController();
$productResult = $db_handle->runQuery("SELECT bike_registrationnumber, `bike_modelname` , bike_rentamount
FROM `tblbikelancebikemodel` m
INNER JOIN tblbikelancebike b ON b.model_id = m.model_id");

    $filename = "Rentamount_excel.xls";
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
