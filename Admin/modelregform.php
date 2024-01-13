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
                    <h4 class="card-title"> Bike Model Registration</h4>
                    <form class="forms-sample" method="POST" action="modelaction.php" enctype="multipart/form-data">
                      <div class="form-group">
                      <label>Model name</label>
                      <input type="text" class="form-control" name="txt_modelname"
                       style="width:500px;" placeholder="Enter Model name" required>
                      </div>
                      <div class="form-group">
                      <label>Model CC</label>
                      <input type="number" class="form-control" name="txt_cc"
                        style="width:500px;" placeholder="Bike cc" required>
                      </div>
                      <div class="form-group">
                      <label>Rent Amount</label>
                      <input type="text" class="form-control" name="txt_ramount"
                        style="width:500px;" placeholder="Bike rent amount" required>
                      </div>
                      <div class="form-group">
                      <label>Image</label>
                      <input type="file" class="form-control" name="txt_image"
                       style="width:500px;" placeholder="Add image" required>
                      </div>

                      <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button> 
                    </form>
                    <br><button class="btn btn-light"> <a href="modelview.php">Cancel</button></a>
                  </div>
                </div>
              </div>
              </div>

          <?php
include("Footer.php");
?>