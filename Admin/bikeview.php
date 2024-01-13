<?php
  include("Header.php");
  ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Bike View </h3>
              <form method="POST" enctype="multipart/form-data">
                <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Tables</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                    </ol>
                  </nav>
                  -->
            </div>
            <div class="row">              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <a href="bikeregform.php">
                    <button type="submit" style="margin-bottom: 3%;" class="btn btn-social-icon-text btn-linkedin">
                    <i class="mdi mdi-plus" ></i>
                    <label> Add New</label>
                    </button>
                  </a>
                  <br>
                  <div class="form-group"> 
                    <select name="bikemodelid" id="bikemodelid" class="form-control form-control-lg" onchange="this.form.submit()" style="width:500px;" >
                      <option value="0">--Select Bike model--</option>
                          <?php
                            include("../Guest/config.php");
                            $sql=mysqli_query($con,"SELECT * FROM `tblbikelancebikemodel`");
                            while($display=mysqli_fetch_array($sql))
                            {
                          ?>
                          <option value="<?php echo $display["model_id"] ?>">
                              <?php echo $display["bike_modelname"] ?>
                          </option> 
                          <?php
                            }
                          ?>    
                    </select>
                  </div>      
              </form>
              <?php
                if(isset($_POST["bikemodelid"]))
                {
                  $bikemodelid=$_POST["bikemodelid"];
                  $_SESSION['model_id']=$bikemodelid;
                   // $_SESSION['tdate']=$todate;
                  $s=1;
              ?>
              <script>
              document.getElementById("bikemodelid").value =<?php echo "$bikemodelid"; ?>;
              </script>

              <table class="table table-striped">
                <thead style="background-color: #78e137">
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Registration Number</th> 
                      <th scope="col">Bike Year</th> 
                      <th scope="col">Bike image</th> 
                      <th scope="col">Rent Amount</th>
                      <th scope="col"></th> 
                      </tr>
                </thead>
                <tbody>
                <?php
                  include("companyconfig.php");
                  $s=1;
                  $sql=mysqli_query($con,"SELECT * FROM 
                  `tblbikelancebike` b inner join tblbikelancebikemodel m 
                   on m.model_id=b.model_id 
                   WHERE m.`model_id`='$bikemodelid' ");
                  //echo "SELECT * FROM `tblbikelancebike` b inner join tblbikelancebikemodel m on m.model_id=b.model_id WHERE `model_id`='$bikemodelid'";
                  while($display=mysqli_fetch_array($sql))
                  {
                ?>
                <tr>
                    <td><?php echo $s++; ?></td>
                                            <td><?php echo $display["bike_registrationnumber"] ?></td>
                                            <td><?php echo $display["bike_year"] ?></td> 
                                            <td><img src=./assets/images/<?php echo $display["bike_images"]?> width="200" height="200"></td> 
                                            <td><?php echo $display["bike_rentamount"] ?></td> 

                                  <td>          
                          <div class="btn-group dropup">
                        <button type="button" class="btn btn-danger">Choose Action</button>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dropupMenuSplitButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropupMenuSplitButton2">
                          <a class="dropdown-item" href="bikeedit.php?cid=<?php echo $display["bike_id"];?>">Edit</a>
                          <a class="dropdown-item" onclick="return confirm('Are u sure?')" 
                           href="bikedelete.php?bikeid=<?php echo $display["bike_id"]; ?>">Delete</a>
                        </div>
                      </div>
                             </td>
        </tr>
        <?php
                                            }
                                        }
                                            ?>
            </tbody>
        </table>
      </div>  
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
         
  <?php
  include("Footer.php");
  ?>
