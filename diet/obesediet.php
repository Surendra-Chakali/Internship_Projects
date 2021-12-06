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
    <div style="position: fixed;top: 80%;left: 90%;z-index: 10;">
  <a href="chat/index.php"><img src="assets/img/chatbot.png" style="width: 80px;height: 80px;border-radius: 50%;"></a>
</div>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>
	<body>
       <div class="container">
            
                <h2 class="text-center text-danger" style="padding: 1em;"><b>7 Diet Chart For Obesity Patient</b></h2>

                 <div style="margin-top:;" align="center">
                       <img src="https://assets.lybrate.com/q_auto:eco,f_auto,w_850/imgs/product/kwds/diet-chart/Obesity-Diet-Chart-v1.jpg" width="70%" style="margin-top: 5em;">
                   </div>
               
                  
                    <div style="margin-top: 4em;">
                       <p>A low fat diet, as the name implies, is a dietary pattern that limits the fat intake at about 1/3 of the total daily calories consumed. It consists of little fat, particularly saturated fats and cholesterol which lead to increased blood cholesterol levels and heart attack.</p>

                       <p>This type of diet plan to reduce obesity focuses on foods that contain whole grains, fruits and vegetables. It is directed towards weight loss and treatment of certain diseases by offering 20 to 30 percent of total daily calories from fat. Plenty of vegetables and proteins in a typical low fat diet supply the body with energy but very little fats.</p>

                       <p>However, fats should not be eliminated entirely as some dietary fat is needed for good health, supplying energy and fat soluble vitamins like A, D, E and K. Studies have revealed that the right kinds of fats can actually help in losing weight. Hence, the prime focus of healthy diet plan for obesity is on limiting the unhealthy fats and consumption of right amounts of fats.</p>

                       <p>We create an Indian diet chart for people facing obesity. Follow this diet plan and start eating those food items which listed in breakfast, lunch and dinner timings.</p>
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
