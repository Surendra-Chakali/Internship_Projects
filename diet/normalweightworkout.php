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
            
                <h2 class="text-center text-success" style="padding: 1em;"><b>Why is physical activity important?</b></h2>
               <div style="margin-top: 4em;">
          
                    <div >
                       <p>Regular physical activity is important for good health, and it&rsquo;s especially important if you&rsquo;re trying to lose weight or to maintain a healthy weight.</p>
                       <ul>
<li>When losing weight, more physical activity increases the number of calories your body uses for energy or &ldquo;burns off.&rdquo; The burning of calories through physical activity, combined with reducing the number of calories you eat, creates a &ldquo;calorie deficit&rdquo; that results in weight loss.</li>
<li>Most weight loss occurs because of decreased caloric intake. However, evidence shows the only way to <em>maintain</em> weight loss is to be engaged in regular physical activity.</li>
<li>Most importantly, physical activity reduces risks of cardiovascular disease and diabetes beyond that produced by weight reduction alone.</li>
</ul>
                      <p>Physical activity also helps to&ndash;</p>
                      <ul>
<li>Maintain weight.</li>
<li>Reduce high blood pressure.</li>
<li>Reduce risk for type 2 diabetes, heart attack, stroke, and several forms of cancer.</li>
<li>Reduce arthritis pain and associated disability.</li>
<li>Reduce risk for osteoporosis and falls.</li>
<li>Reduce symptoms of depression and anxiety.</li>
</ul>
                  
                    </div>
               </div>

               <h3 style="color: red;"><b>How much physical activity do I need?</b></h3>
               <div class="row" style="margin-top: 4em;">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <p>When it comes to weight management, people vary greatly in how much physical activity they need. Here are some guidelines to follow:</p>
<p><strong>To maintain your weight:</strong> Work your way up to 150 minutes of moderate-intensity aerobic activity, 75 minutes of vigorous-inten sity aerobic activity, or an equivalent mix of the two each week. Strong scientific evidence shows that physical activity can help you maintain your weight over time. However, the exact amount of physical activity needed to do this is not clear since it varies greatly from person to person. It&rsquo;s possible that you may need to do more than the equivalent of 150 minutes of moderate-intensity activity a week to maintain your weight.</p>
<p><strong>To lose weight and keep it off:</strong> You will need a high amount of physical activity unless you also adjust your diet and reduce the amount of calories you&rsquo;re eating and drinking. Getting to and staying at a healthy weight requires both regular physical activity and a healthy eating plan.</p>
<h2 style="color: blue;">What do moderate- and vigorous-intensity mean?</h2>
<p><strong>Moderate</strong>: While performing the physical activity, if your breathing and heart rate is noticeably faster but you can still carry on a conversation &mdash; it&rsquo;s probably moderately intense. Examples include&mdash;</p>
<ul>
<li>Walking briskly (a 15-minute mile).</li>
<li>Light yard work (raking/bagging leaves or using a lawn mower).</li>
<li>Light snow shoveling.</li>
<li>Actively playing with children.</li>
<li>Biking at a casual pace.</li>
</ul>
<p><strong>Vigorous</strong>: Your heart rate is increased substantially and you are breathing too hard and fast to have a conversation, it&rsquo;s probably vigorously intense. Examples include&mdash;</p>
<ul>
<li>Jogging/running.</li>
<li>Swimming laps.</li>
<li>Rollerblading/inline skating at a brisk pace.</li>
<li>Cross-country skiing.</li>
<li>Most competitive sports (football, basketball, or soccer).</li>
<li>Jumping rope.</li>
</ul>
<h2> How many calories are used in typical activities?</h2>
<p>The following table shows calories used in common physical activities at both moderate and vigorous levels.</p>

                    </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                       <img src="https://www.cdc.gov/healthyweight/images/physical-activity/woman-and-child-swimming-small.jpg" width="70%" height="30%">
                   </div>
               </div>

               
               <div style="margin-top: 4em;">
                <table class="table table-bordered nein-scroll">
<caption class="sr-only">Calories Used per Hour in Common Physical Activities</caption>
<thead class=" thead-light">
<tr>
<th colspan="3" scope="col">Calories Used per Hour in Common Physical Activities</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="col">Moderate Physical Activity</th>
<th scope="col">Approximate Calories/30 Minutes for a 154 lb Person<sup>1</sup></th>
<th scope="col">Approximate Calories/Hr for a 154 lb Person<sup>1</sup></th>
</tr>
<tr>
<td>Hiking</td>
<td>185</td>
<td>370</td>
</tr>
<tr>
<td>Light gardening/yard work</td>
<td>165</td>
<td>330</td>
</tr>
<tr>
<td>Dancing</td>
<td>165</td>
<td>330</td>
</tr>
<tr>
<td>Golf (walking and carrying clubs)</td>
<td>165</td>
<td>330</td>
</tr>
<tr>
<td>Bicycling (&lt;10 mph)</td>
<td>145</td>
<td>290</td>
</tr>
<tr>
<td>Walking (3.5 mph)</td>
<td>140</td>
<td>280</td>
</tr>
<tr>
<td>Weight lifting (general light workout)</td>
<td>110</td>
<td>220</td>
</tr>
<tr>
<td>Stretching</td>
<td>90</td>
<td>180</td>
</tr>
<tr>
<th scope="col">Vigorous Physical Activity</th>
<th scope="col">Approximate Calories/30 Minutes for a 154 lb Person<sup>1</sup></th>
<th scope="col">Approximate Calories/Hr for a 154 lb Person<sup>1</sup></th>
</tr>
<tr>
<td>Running/jogging (5 mph)</td>
<td>295</td>
<td>590</td>
</tr>
<tr>
<td>Bicycling (&gt;10 mph)</td>
<td>295</td>
<td>590</td>
</tr>
<tr>
<td>Swimming (slow freestyle laps)</td>
<td>255</td>
<td>510</td>
</tr>
<tr>
<td>Aerobics</td>
<td>240</td>
<td>480</td>
</tr>
<tr>
<td>Walking (4.5 mph)</td>
<td>230</td>
<td>460</td>
</tr>
<tr>
<td>Heavy yard work (chopping wood)</td>
<td>220</td>
<td>440</td>
</tr>
<tr>
<td>Weight lifting (vigorous effort)</td>
<td></td>
<td>440</td>
</tr>
<tr>
<td>Basketball (vigorous)</td>
<td>220</td>
<td>440</td>
</tr>
<tr>
<td colspan="3"><sup>1</sup> Calories burned per hour will be higher for persons who weigh more than 154 lbs (70 kg) and lower for persons who weigh less.Source: Adapted from </span>.</td>
</tr>
</tbody>
</table>
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
