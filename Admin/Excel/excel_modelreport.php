<?php
session_start();
include 'excel_controller.php';
$db_handle = new DBController();
$productResult = $db_handle->runQuery("SELECT `bike_modelname` , bike_typename, bike_companyname, `bike_modelcc` ,bike_rentamount, `bike_modelimages` , COUNT( bike_id ) AS model_count
FROM `tblbikelancebikemodel` m
INNER JOIN tblbikelancebiketype t ON m.type_id = t.type_id
INNER JOIN tblbikelancecompany c ON m.company_id = c.company_id
INNER JOIN tblbikelancebike b ON b.model_id = m.model_id
GROUP BY `bike_modelname`");

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
e
?>
