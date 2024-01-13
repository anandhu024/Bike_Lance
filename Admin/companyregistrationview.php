<?php
  include("Header.php");
  ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Company Details </h3>
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
                  <a href="companyregistration.php">
                    <button type="submit" style="margin-bottom: 3%;" class="btn btn-social-icon-text btn-linkedin">
                        <i class="mdi mdi-plus" ></i>
                        Add New
                    </button>
                </a>
                  <br>

                    <table class="table table-striped">
                        <thead style="background-color: #78e137">
                            <tr>
                                <th>#</th>
                                <th>Company Name</th>
                                <th>Opening Date</th>
                                <th>Location</th>
                                <th></th>
                            </tr>
                        </thead>
 <tbody>
        <?php
           include("companyconfig.php");
           $s=1;
           $sql=mysqli_query($con,"SELECT * FROM tblbikelancecompany");
           while($display=mysqli_fetch_array($sql))
           { 
        ?> 
        <tr>
            <td><?php echo $s++ ?></td>
            <td><?php echo $display["bike_companyname"] ?></td>
            <td><?php echo $display["bike_companyopeningdate"] ?></td>
            <td><?php echo $display["bike_companylocation"] ?></td>
            <td> 
                          <div class="btn-group dropup">
                        <button type="button" class="btn btn-danger">Choose Action</button>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dropupMenuSplitButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropupMenuSplitButton2">
                          
                          <a class="dropdown-item" href="companyregistrationedit.php?cid=<?php echo $display["company_id"];?>">Edit</a>
                          <a class="dropdown-item" onclick="return confirm('Are u sure?')" 
                           href="companydelete.php?companyid=<?php echo $display["company_id"]; ?>">Delete</a>
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
         
  <?php
  include("Footer.php");
  ?>