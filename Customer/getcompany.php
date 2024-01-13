<?php
$typeid=$_POST['id'];
?>

<div class="form-group"> 
              <select name="companyid" class="form-control form-control-lg" onchange="this.form.submit()" style="width:500px;" >
                <option value="0">--Select Bike Company--</option>
                  <?php
                    include("../Guest/config.php");
                    $sql=mysqli_query($con,"SELECT DISTINCT (
                        `bike_companyname`
                        ),c.company_id
                        FROM `tblbikelancecompany` c
                        INNER JOIN tblbikelancebikemodel m ON c.company_id = m.company_id
                        INNER JOIN tblbikelancebiketype t ON t.type_id = m.type_id
                        WHERE t.type_id = '$typeid'
                        ");
                    while($display=mysqli_fetch_array($sql))
                    {
                  ?>
                  <option value="<?php echo $display["company_id"] ?>"><?php echo $display["bike_companyname"] ?></option> 
                    <?php
                      }
                    ?>    
              </select>
            </div>
