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
                    <h4 class="card-title"> Bike Company Edit</h4>
                    <form class="forms-sample" method="POST" action="">
                      <div class="form-group">
                      <?php
                   if(isset($_GET["cid"]))
                   {
                    $company_id=$_GET["cid"];
                    include("companyconfig.php");
                    $s=1;
                    $sql=mysqli_query($con,"select * from tblbikelancecompany where company_id=$company_id");
                    $display=mysqli_fetch_array($sql);
                   }
                   ?>
                        <label >Company Name</label>
                        <input type="text" class="form-control" name="txt_companyname" value="<?php echo $display["bike_companyname"] ?>">
                      </div>
                      <div class="form-group">
                        <label for="companyopeningdate">Company Opening Date</label>
                        <input type="date" class="form-control" name="txt_companyopeningdate" value="<?php echo $display["bike_companyopeningdate"] ?>">
                      </div>
                      <div class="form-group">
                        <label for="companylocation">Company Location</label>
                        <input type="text" class="form-control" name="txt_comapnylocation" value="<?php echo $display["bike_companylocation"] ?>">
</div>
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>
                    </form>
                  </div>
                </div>
              </div>
              </div>

          <?php
include("Footer.php");
?>