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
                    <h4 class="card-title"> Bike Registration</h4>
                    <form class="forms-sample" method="POST" action="bikeaction.php" enctype="multipart/form-data">
                      <div class="form-group">
                      <label>Bike Registration Number</label>
                      <input type="text" class="form-control" name="txt_regno"
                       style="width:500px;" placeholder="Enter Registration number" required>
                      </div>
                      <div class="form-group">
                      <label>Bike Year</label>
                      <input type="number" class="form-control" name="txt_year"
                        style="width:500px;" placeholder="Bike year" required>
                      </div>
                      <div class="form-group">
                      <label>Bike image</label>
                      <input type="file" class="form-control" name="txt_image"
                       style="width:500px;" placeholder="Add image" required>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                      
                    </form>
                    <button class="btn btn-light"> <a href="bikeview.php">Cancel</button></a>
                  </div>
                </div>
              </div>
              </div>

          <?php
include("Footer.php");
?>