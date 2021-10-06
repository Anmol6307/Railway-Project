<?php
session_start();
include('connection.php');

if(isset($_POST['submit']))
{
   
   $email=$_POST['email'];
   $password=$_POST['password'];
   $sql="select * from tbl_user where email='$email' and password='$password'";
   // echo $sql;
   // exit();
   $res=mysqli_query($conn,$sql);
   $count=mysqli_num_rows($res);
   if($count>0)
   {
      $row=mysqli_fetch_assoc($res);
      $_SESSION['ROLE']=$row['role'];
      $_SESSION['IS_LOGIN']='yes';
      if($row['role']==1)
      {
         header('location:adrm.php');
         die();
      }
      if($row['role']==2)
      {
         header('location:finance.php');
         die();
      }
      if($row['role']==3)
      {
         header('location:custodium.php');
         die();
      }
      if($row['role']==4)
      {
         header('location:security.php');
         die();
      }
      if($row['role']==5)
      {
         header('location:seniordmm.php');
         die();
      }
      if($row['role']==6)
      {
         header('location:sectionincharge.php');
         die();
      }

   }
}
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

  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="images/favicon.png" /> -->
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo" style="text-align: center;">
                <img src="images/railway.jpg" alt="logo">
              </div>
          
              <form class="pt-3" method="POST">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email"  placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password"  placeholder="Password">
                </div>
                <div class="mt-3">
                  <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" style="text-align: center;" href="" name="submit">
                </div>
               
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
