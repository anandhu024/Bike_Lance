<?php
include("Header.php");
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper"> 
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Bike Type Edit</h4>
                    <form class="forms-sample" method="POST" action="">
                      <div class="form-group">
                   <?php
                   if(isset($_GET["cid"]))
                   {
                    $type_id=$_GET["cid"];
                    include("companyconfig.php");
                    $s=1;
                    $sql=mysqli_query($con,"select * from tblbikelancebiketype where type_id=$type_id");
                    $display=mysqli_fetch_array($sql);
                   }
                   ?>
                        <label>Bike Name</label>
                        <input type="text" class="form-control" name="txt_bikename" value="<?php echo $display["bike_typename"] ?>">
                      </div>
                      <div class="form-group">
                        <label>Bike Type Discription</label>
                        <input type="text" class="form-control" name="txt_biketypedescription"  value="<?php echo $display["bike_typediscription"]?>" required>
                        <input type="hidden" class="form-control" name="id"  value="<?php echo $display["type_id"]?>" required>
                      </div>
                      
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>
                    </form>
                  </div>
                </div>
              </div>
              </div>

         <?php
          if (isset($_POST["submit"]))
          {            
              $typename=$_POST["txt_bikename"];
              $des=$_POST["txt_biketypedescription"]; 
              $type_id=$_POST["id"];  
              
              //echo "UPDATE tblbikelancebiketype SET bike_typename='$typename',bike_typediscription='$des' WHERE type_id='$type_id' ";
             $sql=mysqli_query($con,"UPDATE tblbikelancebiketype SET bike_typename='$typename',bike_typediscription='$des' WHERE type_id='$type_id' ");
              if($sql)
              {
                  echo "<script>
                    alert('Type updated sucsessfullly!!!');
                    window.location='biketypeview.php'; </script>";
              }
              
          }
include("Footer.php");
?>