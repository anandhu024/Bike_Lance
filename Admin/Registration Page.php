<?php
include("Header.php");
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper"> 
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card"></div>
              <div class="col-md-6 grid-margin stretch-card"></div>
              <div class="col-12 grid-margin stretch-card"></div>
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Company form</h4>
                    <p class="card-description"> Bike Company Form </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Company Name</label>
                        <input type="text" class="form-control" id="txtcompanyname" placeholder="Company name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Company Opening Date</label>
                        <input type="date" class="form-control" id="txtcompanyopeningdate" placeholder="Date">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Company Location</label>
                        <input type="text" class="form-control" id="txtcomapnylocation" placeholder="Location">
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Remember me <i class="input-helper"></i></label>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

          <?php
include("Footer.php");
?>
          