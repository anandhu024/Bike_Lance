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
                    <h4 class="card-title"> Bike Type Registration</h4>
                    <form class="forms-sample" method="POST" action="biketypeaction.php">
                      <div class="form-group">
                        <label>Bike Name</label>
                        <input type="text" class="form-control" name="txt_bikename" placeholder="Bike Type"required>
                      </div>
                      <div class="form-group">
                        <label>Bike Type Description</label>
                        <input type="text" class="form-control" name="txt_biketypedescripition" placeholder="Description"required>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>                     
                    </form>
                    <br><button class="btn btn-light"> <a href="biketypeview.php">Cancel</button></a>
                  </div>
                </div>
              </div>
              </div>

          <?php
include("Footer.php");
?>