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
                    <h4 class="card-title"> Bike </h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        <?php
                        if(isset($_GET["cid"]))
                        {
                            $bike_id=$_GET["cid"];
                            include("companyconfig.php");
                            $s=1;
                            $sql=mysqli_query($con,"SELECT * FROM tblbikelancebike b inner join tblbikelancebikemodel m on b.model_id=m.model_id where bike_id=$bike_id ");
                            $display=mysqli_fetch_array($sql);
                        }
                        ?>
                        <div class="form-group">
                            <label>Bike Registration number</label>
                            <input type="text" class="form-control" name="txt_regno" value="<?php echo $display["bike_registrationnumber"] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Bike Year</label>
                            <input type="text" class="form-control" name="txt_bikeyr" value="<?php echo $display["bike_year"] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Bike Images</label>
                        <br><img src=./assets/images/<?php echo $display["bike_images"]?> width="80" height="80">
                            <input type="file" class="form-control" name="bikeimg" value="<?php echo $display["bike_images"] ?>">
                            <input type="hidden" name="id" value="<?php echo $display["bike_id"] ?>" >
                        </div> 
                        <!-- <div class="form-group">
                            <label>Bike rentamount</label>
                            <input type="text" class="form-control" name="txt_rentamount" value="<?php echo $display["bike_rentamount"] ?>" required>
                        </div> -->
                        <button type="submit" class="btn btn-primary mr-2" name="update">Update</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          <?php
          if (isset($_POST["update"]))
          {            
              $regno=$_POST["txt_regno"];
              $bikeyr=$_POST["txt_bikeyr"]; 
              $bike_id=$_POST["id"]; 

              $img=$_FILES['bikeimg']['name'];
              $loc= "./assets/images/";
              
              if(!is_uploaded_file($_FILES['bikeimg']['tmp_name']))
              {

                $sql1=mysqli_query($con,"UPDATE tblbikelancebike SET bike_registrationnumber='$regno',bike_year='$bikeyr' WHERE bike_id='$bike_id' ");
              // echo "UPDATE tblbikelancebike SET bike_registrationnumber='$regno',bike_year='$bikeyr' WHERE bike_id='$bike_id'";
                if($sql1)
                {
                    echo "<script>
                      alert('Bike details updated sucsessfullly without img!!!');
                      window.location='bikeview.php'; </script>";
                }
              }
              else
              {
                move_uploaded_file($_FILES['bikeimg']['tmp_name'],$loc.$img);  

             $sql1=mysqli_query($con,"UPDATE tblbikelancebike SET bike_registrationnumber='$regno',bike_year='$bikeyr', bike_images='$img' WHERE bike_id='$bike_id'");
             //echo "UPDATE tblbikelancebike SET bike_registrationnumber='$regno',bike_year='$bikeyr', bike_images='$img' WHERE bike_id='$bike_id'";              
             if($sql1)
              {
                  echo "<script>
                    alert('Bike details updated sucsessfullly with img!!!');
                    window.location='bikeview.php'; 
                    </script>";
              }
            }

                                
              //$sql=mysqli_query($conn,"UPDATE tblbikelancebike SET bike_registrationnumber='$regno',bike_year='$bikeyr', bike_images='$img',bike_rentamount='$rentamount' WHERE bike_id='$bike_id'   ");
          }
include("Footer.php");
?>