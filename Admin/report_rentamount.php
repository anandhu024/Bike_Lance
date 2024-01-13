<?php
  include("Header.php");
  ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            <h3 class="page-title"> Bike Company-wise Count Report </h3>
            <form action="Excel\excel_rentamount.php" method="POST" enctype="multipart/form-data">
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
                    <a href="C:\wamp\www\Bike Lance\Admin\Excel\excel_rentamount.php">
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
                            <th scope="col">Bike Registration Number</th> 
                            <th scope="col">Bike Modelname</th> 
                            <th scope="col">Bike rentamount</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("companyconfig.php");
                        $s=1;
                        $sql=mysqli_query($con,"SELECT bike_registrationnumber, `bike_modelname` , bike_rentamount
                        FROM `tblbikelancebikemodel` m
                        INNER JOIN tblbikelancebike b ON b.model_id = m.model_id");
                        while($display=mysqli_fetch_array($sql))
                        {
                        ?>
                        <tr>
                            <td><?php echo $s++; ?></td>
                            <td><?php echo $display["bike_registrationnumber"] ?></td>
                            <td><?php echo $display["bike_modelname"] ?></td>
                            <td><?php echo $display["bike_rentamount"] ?></td> 

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
