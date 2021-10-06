<?php
   session_start();
   include('connection.php');
   error_reporting(0);
   
   
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
<script>
function getEmails()
{
  alert('welcome to order details');
}
</script>
<body onload="getEmails()">
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
         
         
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <h1 class="welcome-text" style="font-size: 22px;"> <span class="text-black fw-bold">Order Details</span></h1>
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
                   
                    <th style="color:#17bce6">Request ID</th>
                    <th style="color:#17bce6">From</th>
                    <th style="color:#17bce6">Lot No.</th>
                    <th style="color:#17bce6">Date</th>
                    <!-- <th style="color:#17bce6">Time</th> -->
                  </tr>
                </thead>
                <?php
         //Establishing connection
         $url = "{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX";
         $id = "salessectionnerljn@gmail.com";
         $pwd = "sales@#@#";
         $imap = imap_open($url, $id, $pwd);
         $emails = imap_search($imap, 'ALL');


         if ($emails) {
            $output = '';

            rsort($emails);

            foreach ($emails as $email_number) {
               $header = imap_headerinfo($imap, $email_number);

               $from = $header->from[0]->mailbox . "@" . $header->from[0]->host;
               $toaddress = $header->toaddress;
               $replyto = $header->reply_to[0]->mailbox . "@" . $header->reply_to[0]->host;
               //$datetime = date("Y-m-d H:i:s", $header->udate);
               //  $subject = $header->subject;
               $body = imap_qprint(imap_body($imap, $email_number));

               //remove the " from the $toaddress
               $toaddress = str_replace('"', '', $toaddress);

               //get message body
               $message = (imap_fetchbody($imap, $email_number, 1.1));
               if ($message == '') {
                  $message = (imap_fetchbody($imap, $email_number, 1));
                  $lotno = (int) filter_var($message, FILTER_SANITIZE_NUMBER_INT);
                  $query1 = "select * from request where lotno='$lotno'";
                  //echo $query1;
                  $res = mysqli_query($conn, $query1);
                  $row = mysqli_fetch_assoc($res);
                  //print_r($row);
                  if ($row['lotno'] != $lotno) {
                     $query = "insert into request(`from`,`to`,`lotno`) values('$from','$toaddress','$lotno')";
                     mysqli_query($conn, $query);
                  }
               }
            }

            $a = 1;
            $select = "select * from request LIMIT 20";
            $result = mysqli_query($conn, $select);
            while ($response = mysqli_fetch_assoc($result)) {
              $id=$response['id'];
              $status = 'status';
               echo '<tbody>';
               echo '<tr>';
               echo '<td>' . $a . '</td>';
              echo '<td>' . $response['from'] . '</td>';
               // echo '<td>' . $response['to'] . '</td>';
               // echo '<td>' . $response['subject'] . '</td>';
               echo '<td>' . $response['lotno'] . '</td>';
               echo '<td>' . $response['date'] . '</td>';
               echo '</tr>';
               echo '</tbody>';
               $a++;
            }
         }
         ?>
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


  
 