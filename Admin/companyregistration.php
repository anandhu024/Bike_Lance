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
                    <h4 class="card-title"> Bike Company Registration</h4>
                    <form class="forms-sample" method="POST" action="companyregistrationaction.php">
                      <div class="form-group">
                        <label for="companyname">Company Name</label>
                        <input type="text" class="form-control" name="txt_companyname" placeholder="Company name" required>
                      </div>
                      <div class="form-group">
                        <label for="companyopeningdate">Company Opening Date</label>
                        <input type="date" class="form-control" name="txt_companyopeningdate" placeholder="Date" required>
                      </div>
                      <div class="form-group">
                        <label for="companylocation">Company Location</label>
                        <input type="text" class="form-control" name="txt_comapnylocation" placeholder="Location" required>
</div>
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                    </form>
                    <button class="btn btn-light" ><a href="http://localhost/Bike%20Lance/Admin/companyregistrationview.php">Cancel</a></button>
                  </div>
                </div>
              </div>
              </div>

          <?php
include("Footer.php");
?>