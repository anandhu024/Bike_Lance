<?php
session_start();      
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bike Lance</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
  
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <!--<a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a> -->
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-xl-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
              </div>
            </form>
          </div>
          <!-- <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item  dropdown d-none d-md-block">
              <a class="nav-link dropdown-toggle" id="reportDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> Reports </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="reportDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-pdf mr-2"></i>PDF </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-excel mr-2"></i>Excel </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-word mr-2"></i>doc </a>
              </div>
            </li>
          </ul> -->
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">
              
                <a class="nav-link" href="Index.php">
                <span class="menu-title"><h2>Dashboard</h2></span>
              </a>
            
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li> -->

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#reg" aria-expanded="false" aria-controls="reg">
                <span class="icon-bg"><i class="mdi mdi-view-list menu-icon"></i></span>
                <span class="menu-title">Registration</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="reg">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="biketypeview.php">BikeType</a></li>
                <li class="nav-item"> <a class="nav-link" href="companyregistrationview.php">Company</a></li>
                  <li class="nav-item"> <a class="nav-link" href="modelview.php">Bikemodel</a></li>
                  <li class="nav-item"> <a class="nav-link" href="bikeview.php">Bike</a></li>
                </ul>
              </div>
            </li>

           <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li> -->
            
            <li class="nav-item">
              <a class="nav-link" href="rentrequestview.php">
                <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                <span class="menu-title">Rent Requests</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rentreturn.php">
                <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                <span class="menu-title">Rent Return</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="false" aria-controls="report">
                <span class="icon-bg"><i class="mdi mdi-view-list menu-icon"></i></span>
                <span class="menu-title">Reports</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="report">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="report_customer.php">Customer List</a></li>
                    <li class="nav-item"> <a class="nav-link" href="customer_pie.php">Gender-wise customercount</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pie_typewisecount.php">Type-wise bikecount</a></li>
                    <li class="nav-item"> <a class="nav-link" href="locationcount_pie.php">Company location</a></li>
                    <li class="nav-item"> <a class="nav-link" href="report_companycount.php">Company-wise bikecount</a></li>
                    <li class="nav-item"> <a class="nav-link" href="report_model.php">Bikemodel</a></li>                
                    <li class="nav-item"> <a class="nav-link" href="report_rejected.php">Rejected</a></li>
                  </ul>
              </div>
            </li> 
            <!--<li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="false" aria-controls="report">
                <span class="icon-bg"><i class="mdi mdi-view-list menu-icon"></i></span>
                <span class="menu-title">Reports</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="report">
                <ul class="nav flex-column sub-menu">
                  
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#customerreport" aria-expanded="false" >
                      <span class="menu-title">Customer</span>
                      <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="customerreport">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="report_customer.php">Customers</a></li>
                        <li class="nav-item"> <a class="nav-link" href="report_income.php">Income</a></li>
                      </ul>
                    </div>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#rentreport" aria-expanded="false" aria-controls="rentreport">
                      <span class="menu-title">Rent</span>
                      <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="rentreport">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="report_rented.php">Rent completed</a></li>
                        <li class="nav-item"> <a class="nav-link" href="report_model.php">Bikemodel</a></li>
                        <li class="nav-item"> <a class="nav-link" href="report_onrent.php">On rent</a></li>
                        </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li> -->
            <!--<li class="nav-item">
              <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                <span class="menu-title">Charts</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                <span class="menu-title">Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li>
            
            
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                  <span class="menu-title">Settings</span>
                </a>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>
                  <span class="menu-title">Take Tour</span></a>
              </div>
            </li> -->
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="../Guest/" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
              </div>
            </li>
          </ul>
        </nav>