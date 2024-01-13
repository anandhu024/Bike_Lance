<?php
  include("Header.php");
  ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Rent Requests </h3>
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
                  <a href="rentrequestview.php">
                  <button type="submit" style="margin-bottom: 3%;" class="btn btn-social-icon-text btn-linkedin">
                        <i class="mdi mdi-plus" ></i>
                        Back
                    </button>
                </a>
                  <br>

                    <table class="table table-striped">
                        <thead style="background-color: #78e137">
                            <tr>
                                <th>#</th>
                                <th>Customer Name</th> 
                                <th>Model</th> 
                                <th></th>
                                <th>Request Date</th>
                                <th>Purpose</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
 <tbody>
        <?php
           include("companyconfig.php");
           $s=1;
           $sql=mysqli_query($con,"SELECT * FROM `tblbikelancerequest` r 
           inner join `tblbikelancecustomer` c on r.`customer_id`=c.`customer_id` 
           inner join `tblbikelancebikemodel` m on r.`bike_id`=m.`model_id`
           WHERE r.`bike_status`='Accepted'");
           while($display=mysqli_fetch_array($sql))
           { 
        ?> 
        <tr>
            <td><?php echo $s++ ?></td>
            <td><?php echo $display["customer_name"] ?></td> 
            <td><?php echo $display["bike_modelname"] ?></td> 
            <td><img src="./assets/images/<?php echo $display["bike_modelimages"]?>"  width="200" height="200"></td> 
            <td><?php echo $display["bike_requestdate"] ?></td>
            <td><?php echo $display["bike_purpose"] ?></td>
                                            
            <td> 
                          <div class="btn-group dropup">
                        <button type="button" class="btn btn-danger">Choose Action</button>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dropupMenuSplitButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropupMenuSplitButton2">
                          <a class="dropdown-item" href="acceptedrequestviewmore.php?requestid=<?php echo $display["request_id"];?>">View More</a> 
                        </div>
                      </div>
                             </td>
        </tr>
        <?php
           }
        ?>
            </tbody>
        </table>  
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
         
          </div>
            </div>
            </div>
            </div>
  <?php
  include("Footer.php");
  ?>
  