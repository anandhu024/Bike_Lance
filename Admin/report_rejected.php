<?php
  include("Header.php");
  ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            <h3 class="page-title"> On-Rent Report </h3>
            <form action="Excel\excel_rejected.php" method="POST" enctype="multipart/form-data">
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
                    <a href="C:\wamp\www\Bike Lance\Admin\Excel\excel_onrentreport.php">
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
                            <th scope="col">Customer Name</th> 
                            <th scope="col">Request date</th> 
                            <th scope="col">Bike model</th> 
                            <th scope="col">Rent from</th> 
                            <th scope="col">Purpose</th> 
                            <th scope="col">Rent To</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("companyconfig.php");
                        $s=1;
                        $sql=mysqli_query($con,"SELECT customer_name, `bike_requestdate` , bike_modelname, `bike_requestfromdate` , `bike_purpose` , `bike_requesttodate`
                        FROM `tblbikelancerequest` r
                        INNER JOIN tblbikelancecustomer c ON r.`customer_id` = c.customer_id
                        INNER JOIN tblbikelancebikemodel m ON r.`bike_id` = m.model_id
                        WHERE r.bike_status = 'Rejected'
                        LIMIT 0 , 30");
                        while($display=mysqli_fetch_array($sql))
                        {
                        ?>
                        <tr>
                            <td><?php echo $s++; ?></td>
                            <td><?php echo $display["customer_name"] ?></td>
                            <td><?php echo $display["bike_requestdate"] ?></td> 
                            <td><?php echo $display["bike_modelname"] ?></td> 
                            <td><?php echo $display["bike_requestfromdate"] ?></td> 
                            <td><?php echo $display["bike_purpose"] ?></td> 
                            <td><?php echo $display["bike_requesttodate"] ?></td> 
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
