<?php
  include("Header.php");
  ?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <button type="button" style="margin-bottom: 3%;" class="btn btn-social-icon-text btn-linkedin"><i class="mdi mdi-plus" ></i>Add New</button>
                  <br>

                    <table class="table table-striped">
                      <thead style="background-color: #78e137">
                        <tr>
                          <th> # </th>
                          <th> First name </th>
                          <th> Amount </th>
                          <th> Deadline </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        
                        
                        <tr>
                          <td class="py-1">1</td>
                          <td> Peter Meggik </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                          <td> 
                          <div class="btn-group dropup">
                        <button type="button" class="btn btn-danger">Dropdown</button>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dropupMenuSplitButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropupMenuSplitButton2">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action 1</a>
                          <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                      </div>
                             </td>
                        </tr>
                        <tr>
                          <td class="py-1">2</td>
                          <td> Edward </td>
                          <td> $ 160.25 </td>
                          <td> May 03, 2015 </td>
                          <td> 
                          <div class="btn-group dropup">
                        <button type="button" class="btn btn-danger">Dropdown</button>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dropupMenuSplitButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropupMenuSplitButton2">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action 1</a>
                          <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                      </div>
                             </td>
                        </tr>
                        <tr>
                          <td class="py-1">3</td>
                          <td> John Doe </td>
                          <td> $ 123.21 </td>
                          <td> April 05, 2015 </td>
                          <td> 
                          <div class="btn-group dropup">
                        <button type="button" class="btn btn-danger">Dropdown</button>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dropupMenuSplitButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropupMenuSplitButton2">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action 1</a>
                          <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                      </div>
                             </td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              

            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
         
  <?php
  include("Footer.php");
  ?>