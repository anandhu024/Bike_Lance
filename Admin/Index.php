<?php
include("Header.php")
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!--<div class="row" id="proBanner">
              <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                  <p>Like what you see? Check out our premium version for more.</p>
                  <a href="https://github.com/BootstrapDash/ConnectPlusAdmin-Free-Bootstrap-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a>
                  <a href="http://www.bootstrapdash.com/demo/connect-plus/jquery/template/" target="_blank" class="btn purchase-button">Upgrade To Pro</a>
                  <i class="mdi mdi-close" id="bannerClose"></i>
                </span>
              </div>
            </div> -->
            <div class="d-xl-flex justify-content-between align-items-start">
              <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
              <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
                <!-- <div class="btn-group bg-white p-3" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-link text-light py-0 border-right">7 Days</button>
                  <button type="button" class="btn btn-link text-dark py-0 border-right">1 Month</button>
                  <button type="button" class="btn btn-link text-light py-0">3 Month</button>
                </div>
                <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
                  <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-calendar mr-1"></i>24 Mar 2019 - 24 Mar 2019 </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                    <h6 class="dropdown-header">Settings</h6>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
               <!-- <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                  <ul class="nav nav-tabs tab-transparent" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link" id="home-tab" data-toggle="tab" href="#" role="tab" aria-selected="true">Users</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business-1" role="tab" aria-selected="false">Business</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="performance-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Performance</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="conversion-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Conversion</a>
                    </li>
                  </ul>
                  <div class="d-md-block d-none">
                    <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                    <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                  </div>
                </div> -->
                <div class="tab-content tab-transparent-content">
                  <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Orders</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">
                            <?php
                                include("companyconfig.php");
                                $s=1;
                                $sql=mysqli_query($con,"SELECT COUNT( * ) as requestcomplete
                                FROM `tblbikelancerequest`
                                WHERE `bike_status` = 'Rent Completed' ");
                                while($display=mysqli_fetch_array($sql))
                                {
                                   echo $display["requestcomplete"];
                                } 
                              ?>
                            </h2>
                            <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent">
                              <i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">Completed</p>
                            <!-- <h3 class="mb-0 font-weight-bold mt-2 text-dark">
                            </h3> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Request</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">
                            <?php
                                include("companyconfig.php");
                                $s=1;
                                $sql=mysqli_query($con,"SELECT COUNT( * ) as requestpending
                                FROM `tblbikelancerequest`
                                WHERE `bike_status` = 'Pending' ");
                                while($display=mysqli_fetch_array($sql))
                                {
                                echo $display["requestpending"] ;
                                } 
                              ?>
                            </h2>
                            <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent">
                              <i class="mdi mdi-alert-box icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">pending</p>
                            <!-- <h3 class="mb-0 font-weight-bold mt-2 text-dark"></h3> -->
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Bike</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">
                            <?php
                                include("companyconfig.php");
                                $s=1;
                                $sql=mysqli_query($con,"SELECT COUNT( * ) AS onrent
                                FROM `tblbikelancerequest`
                                WHERE `bike_status` = 'On Rent'");
                                while($display=mysqli_fetch_array($sql))
                                {
                                echo $display["onrent"] ;
                                } 
                              ?>
                            </h2>
                            <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent">
                            <i class="mdi mdi-bike icon-md absolute-center text-dark"></i>
                            </div>
                            <p class="mt-4 mb-0">On rent</p>
                            <!-- <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3> -->
                          </div> 
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Income</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">
                              <?php
                                include("companyconfig.php");
                                $s=1;
                                $sql=mysqli_query($con,"SELECT SUM( `rentamount` ) AS 'Income', CURDATE( ) AS 'Date'
                                FROM `tblbikelancerent`");
                                while($display=mysqli_fetch_array($sql))
                                {
                               echo $display["Income"] ;
                               ?>
                              
                            </h2>
                            <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent">
                              <i class="mdi mdi-bank icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">
                             <?php echo $display["Date"] ?>
                             <?php 
                                } 
                              ?>
                            </p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark"></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-14 grid-margin">
                        <div class="card">
                          <div class="card-body">
                            <div class="row">
                              <?php
                              $query ="SELECT `bike_status` AS
                              Bikestatus , COUNT( * ) AS BikeCount
                              FROM `tblbikelancerequest`
                              GROUP BY `bike_status`";  
                              $result = mysqli_query($con, $query);  
                              ?>  
                              <!DOCTYPE html>  
                              <html>  
                                  <head>    
                                      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
                                      <script type="text/javascript">  
                                      google.charts.load('current', {'packages':['corechart']});  
                                      google.charts.setOnLoadCallback(drawChart);   
                                      function drawChart()  
                                      {  
                                            var data = google.visualization.arrayToDataTable([  
                                                      ['Bikestatus', 'BikeCount'],  
                                                      <?php  
                                                      while($row = mysqli_fetch_array($result))  
                                                      { 
                                      echo "['".$row["Bikestatus"]."', ".$row["BikeCount"]."],";  
                                                      }  
                                                      ?>  
                                                ]);  
                                            var options = {  
                                                  title: 'Percentage ',  
                                                  //is3D:true,  
                                                  pieHole: 0.4  
                                                };  
                                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                                            chart.draw(data, options);  
                                      }  
                                      </script>  
                                  </head>  
                                  <body>  
                                      <div class="logo">
                                          <a href="./index.php">
                                            <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
                                            </div> 
                                      <div style="width:900px; margin-top:6%">  
                                            <h3 align="center">Bike Status Count</h3>  
                                            <br />  
                                            <div id="piechart" style="width: 900px; height: 500px;"></div>  
                                      </div>  
                                      </div>
                                  </body>  
                              </html>  
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                   <!-- <div class="row">
                      <div class="col-sm-1 grid-margin stretch-card">
                        <div class="card card-danger-gradient">
                          <div class="card-body mb-1">
                            <h4 class="card-title text-white"></h4>
                            <canvas id="account-retension" width="400px" height ="10px"></canvas>
                          </div>
                           <div class="card-body bg-white pt-4">
                            <div class="row pt-4">
                              <div class="col-sm-6">
                                <div class="text-center border-right border-md-0">
                                   <h4>Conversion</h4>
                                  <h1 class="text-dark font-weight-bold mb-md-3">$306</h1>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="text-center">
                                  <h4>Cancellation</h4>
                                  <h1 class="text-dark font-weight-bold">$1,520</h1>
                                </div>
                              </div>
                            </div>
                          </div> -->
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-14 grid-margin">
                        <div class="card">
                          <div class="card-body">
                            <div class="row">
                            <?php
                                  include("companyconfig.php");    
                                  $query ="SELECT COUNT( `bike_modelname` ) AS requestcount, `bike_modelname`
                                  FROM `tblbikelancebikemodel` m
                                  INNER JOIN tblbikelancerequest r ON r.bike_id = m.model_id
                                  GROUP BY `bike_modelname`
                                  LIMIT 0 , 30"; 
                                  $result = mysqli_query($con, $query);  
                                ?>  
                                <!DOCTYPE html>  
                                <html>  
                                        <head>    
                                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
                                            <script type="text/javascript">  
                                            google.charts.load('current', {'packages':['corechart']});  
                                            google.charts.setOnLoadCallback(drawChart);   
                                            function drawChart()  
                                            {  
                                                  var data = google.visualization.arrayToDataTable([  
                                                            ['bike_modelname', 'requestcount'],  
                                                            <?php  
                                                            while($row = mysqli_fetch_array($result))  
                                                            { 
                                                              echo "['".$row["bike_modelname"]."', ".$row["requestcount"]."],";  
                                                            }  
                                                            ?>  
                                                      ]);  
                                                  var options = {  
                                                        title: 'Percentage ',  
                                                        //is3D:true,  
                                                        pieHole: 0.4  
                                                      };  
                                                  var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
                                                  chart.draw(data, options);  
                                            }  
                                            </script>  
                                        </head>  
                                        <body>  
                                            <div class="logo">
                                                <a href="./index.php">
                                                  <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                  <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
                                                  </div> 
                                            <div style="width:900px; margin-top:6%">  
                                                  <h3 align="center">Pie Chart Showing the Rentrequest Count in Modelwise</h3>  
                                                  <br />  
                                                  <div id="piechart2" style="width: 900px; height: 500px;"></div>  
                                            </div>  
                                            </div>
                                        </body>  
                                </html>  
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>  
                      
                    

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <?php
include("Footer.php")
?>
          