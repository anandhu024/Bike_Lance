<?php
  include("Header.php");
  ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            <h3 class="page-title"> Bike Model Report </h3>
            <form action="Excel\excel_modelreport.php" method="POST" enctype="multipart/form-data">
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
                    <a href="C:\wamp\www\Bike Lance\Admin\Excel\excel_modelreport.php">
                        <button type="submit" style="margin-bottom: 3%;" class="btn btn-social-icon-text btn-linkedin">
                            <i class="mdi mdi-plus" ></i>
                            <label>Export</label>
                        </button>
                    </a>
                    <br>                  
            </form>
                 
                <table class="table table-striped">
                    <thead style="background-color: #78e137">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Model Name</th> 
                            <th scope="col">Typename</th> 
                            <th scope="col">Companyname</th> 
                            <th scope="col">Model CC</th> 
                            <th scope="col">Rent amount</th> 
                            <th scope="col">Model image</th> 
                            <th scope="col">Bike count</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("companyconfig.php");
                        $s=1;
                        $sql=mysqli_query($con,"SELECT `bike_modelname` , bike_typename, bike_companyname, `bike_modelcc` ,bike_rentamount, `bike_modelimages` , COUNT( bike_id ) AS model_count
                        FROM `tblbikelancebikemodel` m
                        INNER JOIN tblbikelancebiketype t ON m.type_id = t.type_id
                        INNER JOIN tblbikelancecompany c ON m.company_id = c.company_id
                        INNER JOIN tblbikelancebike b ON b.model_id = m.model_id
                        GROUP BY `bike_modelname`");
                        while($display=mysqli_fetch_array($sql))
                        {
                        ?>
                        <tr>
                            <td><?php echo $s++; ?></td>
                            <td><?php echo $display["bike_modelname"] ?></td>
                            <td><?php echo $display["bike_typename"] ?></td> 
                            <td><?php echo $display["bike_companyname"] ?></td> 
                            <td><?php echo $display["bike_modelcc"] ?></td>
                            <td><?php echo $display["bike_rentamount"] ?></td> 
                            <td><img src=./assets/images/<?php echo $display["bike_modelimages"]?> width="200" height="200"></td> 
                            <td><?php echo $display["model_count"] ?></td> 
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
