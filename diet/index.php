<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BMI online Calculator | </title>
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
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1700">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="assets/img/bmi1.jpg" alt="Los Angeles" width="100%" height="200px">
    </div>

    <div class="item">
      <img src="assets/img/bmi2.jpg" alt="Chicago" width="100%" height="200px">
    </div>

    <div class="item">
      <img src="assets/img/bmi3.jpg" alt="New York" width="100%" height="200px">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="container">
  <div class="row" style="margin-top: 4em;">
    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
      <h1 class="" style="margin: 1em;"> <b>BMI</b> </h1>
  <p class="text-justify"> Body mass index, or BMI, is a measure of body size. 
   It combines a person’s weight with their height. 
   The results of a BMI measurement can give an idea about whether a person has the correct weight for their height.
   <br>
   BMI is a screening tool that can indicate whether a person is underweight or if they have a healthy weight, excess weight, or obesity. If a person’s BMI is outside of the healthy range, their health risks may increase significantly.
   <br><br>
   The formula is BMI = kg/m2 where kg is a person’s weight in kilograms and m2 is their height in metres squared.
A BMI of 25.0 or more is overweight, while the healthy range is 18.5 to 24.9. BMI applies to most adults 18-65 years.
</p>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-12" align="center">
      <img src="BMI-Chart.gif" width="400px" style="margin-top: 4em;">
    </div>
  </div>
  


    <div class="row" style="margin-top: 6em;">
    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
       <img src="bmi-calculator.jpg" width="400px" height="400px" style="margin-top: 10em;"> 
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
     <h2  style="margin: 1em;"><b>Body Mass Index and Health</b></h2>
<p>
  According to the National Institutes of Health, more than two in three adults are considered overweight and one in three are considered obese. About 17 percent of children and teenagers (ages 2 to 19) are considered obese.
<br>
People gain weight as a result of an energy imbalance. The body needs a certain amount of energy from food in order to function. This energy is obtained in the form of calories. Your weight will usually stay the generally the same when you consume the same number of calories as your body uses or “burns” each day. If you take in more calories than you burn, you will gain weight over time.
<br>
Energy imbalance is certainly one of the biggest contributors to weight gain. However, your ideal weight is primarily determined by genetics, as well as by the types of foods you eat and how much you exercise. If you have a high BMI, it’s important to lower it so you’re at a healthy weight status. A high BMI is related to a greater risk of developing serious health conditions, such as:
<br>
<ol>
  <li> -heart disease</li>
  <li> -high blood pressure</li>
  <li> -liver disease</li>
  <li> -osteoarthritis</li>
  <li> -diabetes</li>
  <li> -stroke</li>
  <li> -gallstones</li>
  <li> -certain cancers, including breast, colon, and kidney cancers </li>
</ol>
</p>
    </div>
  </div>

</div>

 <?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
