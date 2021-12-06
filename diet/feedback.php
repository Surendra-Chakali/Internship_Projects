<?php
session_start();
error_reporting(0);
$email = $_SESSION['login'];
include('includes/db_connection.php');

$sql = $conn->prepare("SELECT * FROM tblstudents WHERE EmailId = ?");  
$sql->bind_param("s",$email);
$sql->execute();    
$res =$sql->get_result();
$row = $res->fetch_assoc();
$sid = $row['StudentId'];

if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}


    ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BMI online Calculator | User Dash Board</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        
</head>
<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>
	<body>
       <div class="container">
            
               <!--Faculty model-->
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="faculty_login" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="mt-4 mb-3">
          <h3 class="modal-title text-center text-success">Faculty login</h3>
        </div>
        <div class="modal-body">
          <form method="post">
        <div class="">
          <label for="name">Name</label>
          <input type="text" placeholder="Your Name" id="name" name="name" style="text-indent: 10px;">
          <p class="text-danger"><?php echo $nameerror;?></p>
        </div>
        <div class="">
          <label for="pwd">Password</label>
          <input type="password" placeholder="Your Password" id="pwd" name="newpasswrd" style="text-indent: 10px;">
      <span>
              <i class="fa fa-eye float-right" aria-hidden="true" id="show" onclick="toggle()"></i>
              <i class="fa fa-eye fa-eye-slash float-right" aria-hidden="true" id="hide" onclick="toggle()"></i>
          </span>
          <p class="text-danger"><?php echo $passwrderror;?></p>
        </div>
        <button type="submit" class="btn text-white" name="fsubmit" id="loginsubmit">Login</button>
    </form>
    <p class="text-center mt-4">Lost your password lets! &nbsp; <a href="faculty_forgot_password.php" class="text-danger">Forgot Password</a></p>
        </div>
        <div class="text-center mb-3">
      <hr>Don't have an account then click here to <a href="faculty_registration.php">Register</a>
        </div>
      </div>
      
    </div>
  </div>
</div>

       </div>
	</body>
     <!-- CONTENT-WRAPPER SECTION END-->
 <?php include('includes/footer.php');?>
   
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
  
</body>
</html>
