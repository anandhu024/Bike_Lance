<?php
session_start();
include 'excel_controller.php';
$db_handle = new DBController();
$productResult = $db_handle->runQuery("SELECT bike_companyname, COUNT( bike_id ) AS bike_count
FROM `tblbikelancebike` b
INNER JOIN tblbikelancebikemodel m ON b.model_id = m.model_id
INNER JOIN tblbikelancecompany c ON c.company_id = m.company_id
GROUP BY bike_companyname");

    $filename = "Companycount_excel.xls";
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
