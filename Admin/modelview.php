<?php
  include("Header.php");
  ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Bike Model View </h3>
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
                  <a href="modelregform.php">
                  <button type="submit" style="margin-bottom: 3%;" class="btn btn-social-icon-text btn-linkedin">
                        <i class="mdi mdi-plus" ></i>
                       <label> Add New</label>
                  </button>
                </a>
                  <br>
                  <div class="form-group"> 
                    <select name="biketypeid" id="biketypeid" class="form-control form-control-lg"  style="width:500px;" >
                      <option value="0">--Select Bike Type--</option>
                      <?php
                        include("companyconfig.php");
                          $sql=mysqli_query($con,"SELECT * FROM `tblbikelancebiketype`");
                          while($display=mysqli_fetch_array($sql))
                          {
                      ?>
                      <option value="<?php echo $display["type_id"] ?>"><?php echo $display["bike_typename"] ?></option> 
                      <?php
                        }
                      ?>    
                    </select>
                  </div>
                  <div class="form-group"> 
                     <select name="company_id" id="companyid" onchange="this.form.submit()" class="form-control form-control-lg"  style="width:500px;" >
                        <option value="0">--Select Company--</option>
                        
                        <?php
                          $sql=mysqli_query($con,"SELECT * FROM `tblbikelancecompany`");
                          while($display=mysqli_fetch_array($sql))
                          {
                        ?>
                        <option value="<?php echo $display["company_id"] ?>">
                          <?php echo $display["bike_companyname"] ?>
                        </option> 
                          <?php
                            }
                          ?>    
                  </select>
                  </div>  
                                               
                    </form>
                  <?php
                        if(isset($_POST["company_id"]))
                        {
                            $bikecompanyid=$_POST["company_id"];
                            $biketypeid=$_POST["biketypeid"];
                            $_SESSION['company_id']=$bikecompanyid;
                            $_SESSION['biketypeid']=$biketypeid;
                            // $_SESSION['tdate']=$todate;
                            $s=1;
                        ?>
                        <script>
                        document.getElementById("companyid").value =<?php echo "$bikecompanyid"; ?>;
                        document.getElementById("biketypeid").value =<?php echo "$biketypeid"; ?>;
                         </script>
                    <table class="table table-striped">
                        <thead style="background-color: #78e137">
                        <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Model Name</th> 
                                                <th scope="col">CC</th>
                                                <th scope="col">Rent amount</th> 
                                                <th scope="col">Model image</th> 
                                                <th scope="col"></th> 
                                            </tr>
                        </thead>
 <tbody>
 <?php                                  
                                            include("companyconfig.php");
                                            $s=1;
                                            $sql=mysqli_query($con,"SELECT * FROM `tblbikelancebikemodel` WHERE `type_id`='$biketypeid' and `company_id`='$bikecompanyid'");
                                            while($display=mysqli_fetch_array($sql))
                                            {
                                            ?>
                                            <tr>
                                            <td><?php echo $s++; ?></td>
                                            <td><?php echo $display["bike_modelname"] ?></td>
                                            <td><?php echo $display["bike_modelcc"] ?></td> 
                                            <td><?php echo $display["bike_rentamount"] ?></td> 
                                            <td><img src=./assets/images/<?php echo $display["bike_modelimages"]?> width="200" height="200"></td>  
                                  <td>          
                          <div class="btn-group dropup">
                        <button type="button" class="btn btn-danger">Choose Action</button>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dropupMenuSplitButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropupMenuSplitButton2">
                          <a class="dropdown-item" href="modeledit.php?cid=<?php echo $display["model_id"];?>">Edit</a>
                          <a class="dropdown-item" onclick="return confirm('Are u sure?')" 
                           href="modeldelete.php?modelid=<?php echo $display["model_id"]; ?>">Delete</a>
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
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
         
  <?php
  include("Footer.php");
  ?>
