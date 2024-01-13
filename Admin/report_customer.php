<?php
  include("Header.php");
  ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            <h3 class="page-title"> Customer Report </h3>
            <form action="Excel\excel_customerreport.php" method="POST" enctype="multipart/form-data">
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
                    <a href="C:\wamp\www\Bike Lance\Admin\Excel\excel_customerreport.php">
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
                            <th scope="col">Gender</th> 
                            <th scope="col">Address</th> 
                            <th scope="col">Email</th> 
                            <th scope="col">Phonenumber</th>
                            <th scope="col">Liscencenumber</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("companyconfig.php");
                        $s=1;
                        $sql=mysqli_query($con,"SELECT `customer_name` , `customer_address` , `customer_email` , `customer_gender` , `customer_phonenumber` , `customer_licencenumber` 
                        FROM `tblbikelancecustomer`");
                        while($display=mysqli_fetch_array($sql))
                        {
                        ?>
                        <tr>
                            <td><?php echo $s++; ?></td>
                            <td><?php echo $display["customer_name"] ?></td>
                            <td><?php echo $display["customer_gender"] ?></td> 
                            <td><?php echo $display["customer_address"] ?></td> 
                            <td><?php echo $display["customer_email"] ?></td> 
                            <td><?php echo $display["customer_phonenumber"] ?></td> 
                            <td><?php echo $display["customer_licencenumber"] ?></td> 
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
