<?php
   session_start();
   include('connection.php');
   
   
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Railway</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  
</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="">
            <img src="images/railway.jpg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="">
            <img src="images/railway.jpg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Hello, <span class="text-black fw-bold">ADRM</span></h1>
            <!-- <h3 class="welcome-sub-text">Your performance summary this week </h3> -->
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
        
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
          
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">ADRM</p>
                <p class="fw-light text-muted mb-0">adrm@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile </a>
        
              <a href="logout.php" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
     
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="adrm.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
       <li class="nav-item">
            <a class="nav-link" href="vendor_details.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Vendors Details</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="department_details.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Department Details</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order_details.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Order Details</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse"  href="vendor_details.php">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Vendors Details</span>
              <i class="menu-arrow"></i>
            </a> -->
            <!-- <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">Countries</a></li>
                <li class="nav-item"> <a class="nav-link" href="">States</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Cities</a></li>
                 <li class="nav-item"> <a class="nav-link" href="">Areas</a></li>
                <li class="nav-item"> <a class="nav-link" href="delivery_area.html">Delivery Areas</a></li>
              </ul>
            </div> -->
         
          <!-- </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Master Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="scraptype.html">Scrap Type</a></li>
                <li class="nav-item"> <a class="nav-link" href="scrap.html">Scrap</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Order Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="orders.html">Orders</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">User Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="customer.html">Customer</a></li>
                <li class="nav-item"> <a class="nav-link" href="dealer.html">Dealer</a></li>
                <li class="nav-item"> <a class="nav-link" href="dealer_missing_details.html">Dealer Missing Details</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Content Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="dynamic_web_page.html">Dynamic Web Page</a></li>
                <li class="nav-item"> <a class="nav-link" href="faq.html">FAQ</a></li>
                <li class="nav-item"> <a class="nav-link" href="broadcast.html">Broadcast Push Notification</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="dealer_dues.html">Dealer Dues</a></li>
              </ul>
            </div>
          </li> -->
         <!--  <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Setting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu"> -->
               <!--  <li class="nav-item"> <a class="nav-link" href="general_setting.html">General Setting</a></li> -->
               <!--  <li class="nav-item"> <a class="nav-link" href="change_password.html">Change Password</a></li>
              </ul>
            </div>
          </li> -->
           <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Logs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="api_logs.html">API Logs</a></li>
                <li class="nav-item"> <a class="nav-link" href="sms_logs.html">SMS Logs</a></li>
                <li class="nav-item"> <a class="nav-link" href="feedback.html">Feedback</a></li>
                <li class="nav-item"> <a class="nav-link" href="notification.html">Notification</a></li>
              </ul>
            </div>
          </li> -->
         
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <h1 class="welcome-text" style="font-size: 22px;"> <span class="text-black fw-bold">Department Details</span></h1>
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <!-- <ul class="nav nav-tabs" role="tablist"> -->
           
                  <!-- <div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark align-items-center"> + Create Delivery Area</a>
                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a> -->
                      <!-- <a href="export_dealer.php" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a> -->
                    <!-- </div> -->
                  </div>
</div>
<br>
                </div>
                <br>
                <br>
                <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                   
                    <th style="color:#17bce6">S.No</th>
                    <th style="color:#17bce6">Department Name</th>
                    <th style="color:#17bce6">Mobile</th>
                    <th style="color:#17bce6">Email</th>
                  </tr>
                </thead>
                <tbody id="load-dealer">
                 <tr>
                   <td>1</td>
                 <td>Finance</td>
                 <td>9856473745</td>
                 <td>finance@gmail.com</td>
                 </tr>
                 <tr>
                   <td>2</td>
                 <td>Custodium</td>
                 <td>8746748363</td>
                 <td>custodium@gmail.com</td>
                 </tr>
                 <tr>
                   <td>3</td>
                 <td>Security</td>
                 <td>9856473745</td>
                 <td>security@gmail.com</td>
                 </tr>
                 <tr>
                   <td>4</td>
                 <td>Senior DMM</td>
                 <td>8746748363</td>
                 <td>seniordmm@gmail.com</td>
                 </tr>
                 <tr>
                   <td>5</td>
                 <td>Section Incharge</td>
                 <td>8746748363</td>
                 <td>sectionincharge@gmail.com</td>
                 </tr>
                </tbody>
                
              </table>
              
            </div>
            
          </div>
          
        </div>
        
      </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
       <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
    
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved. </span>
          </div>
        </footer>
      
      </div>
     
    </div>
 
  </div>
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- <script src="vendors/progressbar.js/progressbar.min.js"></script> -->

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <script src="js/code.js"></script>
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>


  
 