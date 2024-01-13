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
                    <h4 class="card-title"> Bike model Edit</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                   <?php
                   if(isset($_GET["cid"]))
                   {
                    $model_id=$_GET["cid"];
                    include("companyconfig.php");
                    $s=1;
                    $sql=mysqli_query($con,"select * from tblbikelancebikemodel where model_id=$model_id");
                    $display=mysqli_fetch_array($sql);
                   }
                   ?>
                        <label>Model Name</label>
                        <input type="text" class="form-control" name="txt_modelname"
                         value="<?php echo $display["bike_modelname"] ?>">
                      </div>
                      <div class="form-group">
                        <label>Model CC</label>
                        <input type="number" class="form-control" name="txt_cc"  value="<?php echo $display["bike_modelcc"]?>" required>
                        
                      </div>
                      <div class="form-group">
                        <label>Bike Model images</label><br>
                        <img src=./assets/images/<?php echo $display["bike_modelimages"]?> width="80" height="80">
                        <input type="file" class="form-control" name="modelimage" id="image" value="./assets/images/<?php echo $display["bike_modelimages"]?>">          
                      </div>
                      <input type="submit" class="btn btn-primary mr-2" id="submit" name="submit">
                    </form>
                  </div>
                </div>
              </div>
              </div>
              </div>
</div>

         <?php
          if (isset($_POST["submit"]))
          {            
              $typename=$_POST["txt_modelname"];
              $des=$_POST["txt_cc"]; 
              $img=$_FILES['modelimage']['name'];
              $loc= "./assets/images/";
              move_uploaded_file($_FILES['modelimage']['tmp_name'],$loc.$img);    

              if($img=="")
              {

                $sql1=mysqli_query($con,"UPDATE tblbikelancebikemodel SET bike_modelname='$typename',bike_modelcc='$des' WHERE model_id='$model_id' ");
               //echo "UPDATE tblbikelancebikemodel SET bike_modelname='$typename',bike_modelcc='$des' WHERE bike_modelid='$model_id' ";
                if($sql1)
                {
                    echo "<script>
                      alert('Model updated sucsessfullly without image!!!');
                      window.location='modelview.php'; </script>";
                }
              }
              else
              {
            //echo "UPDATE tblbikelancebiketype SET bike_typename='$typename',bike_typediscription='$des' WHERE type_id='$type_id' ";
             $sql1=mysqli_query($con,"UPDATE tblbikelancebikemodel SET bike_modelname='$typename',bike_modelcc='$des',bike_modelimages='$img' WHERE model_id='$model_id' ");
                               // echo "UPDATE tblbikelancebikemodel SET bike_modelname='$typename',bike_modelcc='$des',bike_modelimages='$img' WHERE model_id='$model_id' ";
              
             if($sql1)
              {
                  echo "<script>
                    alert('Model updated sucsessfullly with image!!!');
                     window.location='modelview.php'; 
                     </script>";
              }
            }
              
          }
include("Footer.php");
?>