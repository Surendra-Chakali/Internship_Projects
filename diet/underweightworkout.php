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
            
                <h2 class="text-center" style="padding: 1em;color: red;"><b>Exercise to Gain Weight at Home for Men and Women</b></h2>
               <div class="row" style="margin-top: 4em;">
                   <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                       <img src="https://d3ud9dy4idniyk.cloudfront.net/mffblog/wp-content/uploads/2016/09/Guy-doing-pushup-in-home.jpg" width="100%" style="margin-top: 5em;">
                   </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                        <p style="text-align: justify;margin-top: 7em;">While everyone out there is struggling to shed off those extra pounds of weight they carry, you are sitting here clicking on random links across the internet all in a hope to find a perfect exercise routine that will help you gain weight. Well, if that’s the case then you don’t need to look further anymore. Here’s MyFitFuel with a simple exercise routine to help both men and women to gain weight at the comfort of their home. Yes, no dumbbells no fancy gym machines required. Read below to know more &#8211;</p>
                    </div>
               </div>

               <h3 style="margin-top: 3em;"><b>A Keynote about this Weight Gain at Home Exercise Routine</b></h3>
               <div class="row" style="margin-top: 4em;">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <p style="text-align: justify;margin-top: 7em;">Well, most of you might think that this exercise for gaining weight at home routine will produce results only for men while women may need a different kind of exercise routine to gain weight. You are wrong. <strong>These exercises will not only help men to pack on mass but also women to gain weight</strong>. Below you will find exercise routine along with their tutorials to help you do each exercise in a good form.</p>
                    </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                       <img src="https://d3ud9dy4idniyk.cloudfront.net/mffblog/wp-content/uploads/2016/09/exercise-routine-for-weight-gain-at-home.jpg" width="70%" height="30%">
                   </div>
               </div>

               <div style="margin-top: 3em;">
                 <h3><strong>1. Hindu Push-up</strong></h3>
<p style="text-align: justify;"><strong>Primary Muscles Targeted-</strong> Shoulders, Chest, and Triceps</p>
<p style="text-align: justify;"><strong>How to Perform Hindu Push-ups &#8211; </strong></p>
<ul style="text-align: justify;">
<li style="text-align: justify;">Begin with your butt in the air, legs wider than shoulder and hands placed in front of your on the floor.</li>
<li style="text-align: justify;">Keeping your head down, swoop your body towards the floor so that your hips move towards the floor and your torso towards the ceiling.<br />
Now get back to starting position by keeping your arms straight and hips in the air.</li>
<li style="text-align: justify;">Once you are in the starting position, perform another rep directly without staying in the locked position for too long.</li>
</ul>
<img src="https://i.giphy.com/11zzkrcMzFuS3K.gif">
<h3><strong>2. Triceps Dips/Bench Dips</strong></h3>
<p style="text-align: justify;"><strong>Primary Muscles Targeted &#8211; </strong>Triceps and Shoulders</p>
<p style="text-align: justify;"><strong>How to Perform Triceps Dips &#8211;</strong></p>
<ul style="text-align: justify;">
<li style="text-align: justify;">For this exercise, you will need a bench or something similar like a sofa or a sturdy chair.</li>
<li style="text-align: justify;">Place the chair behind your back. Grip the edge of the chair with hands fully extended and placed shoulder width apart.</li>
<li style="text-align: justify;">Kep your legs straight and extended forward such that it is perpendicular to your chest.</li>
<li style="text-align: justify;">Slowly lower down your body by bending through elbows until your upper arms and forearms are perpendicular to each other.</li>
<li style="text-align: justify;">Lift yourself back to the starting position by using your triceps. You have complete one rep successfully.</li>
</ul>
<img src="https://i.giphy.com/drcPqW2BMfqda.gif">
<h3><strong>3. Pull-ups</strong></h3>
<p style="text-align: justify;"><strong>Primary Muscles Targeted</strong> &#8211; Lats and Arms</p>
<p style="text-align: justify;"><strong>How To Perform A Classic Pull-Up &#8211;</strong></p>
<ul style="text-align: justify;">
<li style="text-align: justify;">Grab a pull-up bar with your palms facing outwards</li>
<li style="text-align: justify;">Pull yourself up slightly over the bar by keeping a slight arch in your back and torso puffed out.</li>
<li style="text-align: justify;">Slowly lower down yourself until your arms are fully extended.</li>
<li style="text-align: justify;">That’s rep one. Do as many strict reps you can do.</li>
</ul>
<img src="https://i.giphy.com/10rmzPp10k7W9y.gif">
<h2><strong>Lower Body Home Workout Exercise Guide to Gain Weight</strong></h2>
<h3><strong>4. Bodyweight Squats</strong></h3>
<p style="text-align: justify;"><strong>Primary Muscles Targeted &#8211;</strong> Quads, Hamstring, and Hip Flexors</p>
<p style="text-align: justify;"><strong>How To Perform A Squat &#8211;</strong></p>
<ul style="text-align: justify;">
<li style="text-align: justify;">Stand with your legs shoulder width apart. Keep your hands clasped together in front of your chest.</li>
<li style="text-align: justify;">Begin the downward motion by flexing your knees and hips. Sit back with your hips and keep an upright torso.</li>
<li style="text-align: justify;">Go full depth and return to starting position to finish one rep.</li>
<li style="text-align: justify;">Perform 4-5 sets of 10-15 reps as warm-ups and three sets of 15-20 reps as a finisher on a leg day workout.</li>
</ul>
<img src="https://i.giphy.com/bRrvUHhyPgHcY.gif">
<h3><strong>5. Jump Squats</strong></h3>
<p style="text-align: justify;"><strong>Primary Muscles Targeted &#8211;</strong> Quads, Glutes, and Hip Flexors</p>
<p style="text-align: justify;"><strong>How To Perform A Jump Squat &#8211;</strong></p>
<ul style="text-align: justify;">
<li style="text-align: justify;">Begin with a standing position with your feet shoulder width apart.</li>
<li style="text-align: justify;">Perform a normal squat.</li>
<li style="text-align: justify;">As you complete the downward motion, jump in the air.</li>
<li style="text-align: justify;">As you land, lower the body back to normal squat position to finish rep one.</li>
</ul>
<img src="https://i.giphy.com/JOwwB7O1PpxC0.gif">
<h3><strong>6. Walking Lunges</strong></h3>
<p style="text-align: justify;"><strong>Primary Muscles Targeted &#8211;</strong> Quads, Glutes, and Hip Flexors</p>
<p style="text-align: justify;"><strong>How To Perform Walking Lunges &#8211;</strong></p>
<ul style="text-align: justify;">
<li style="text-align: justify;">Start with a standing position with your feet shoulder width apart and your hands on the side.</li>
<li style="text-align: justify;">Step your right leg forward, flexing your knees and drop your hips.</li>
<li style="text-align: justify;">Go down until your rear knee grazes the floor.</li>
<li style="text-align: justify;">Stand back up and take another step forward with left leg.</li>
<li style="text-align: justify;">Repeat this for as many times you can.</li>
<li style="text-align: justify;">You can also grab free weights with your hands to make this exercise even tougher.</li>
</ul>
<img src="https://i.giphy.com/RICLAgxK7y9ck.gif">
<h3><strong>7. Standing Calf Raises</strong></h3>
<p style="text-align: justify;"><strong>Primary Muscles Targeted &#8211;</strong> Calves</p>
<p style="text-align: justify;"><strong>How To Perform A Standing Calf Raise &#8211;</strong></p>
<ul style="text-align: justify;">
<li style="text-align: justify;">Rise up on the toes from a standing position while keeping the knees and straight and heels off the floor.</li>
<li style="text-align: justify;">Hold the position for a couple of seconds and slowly come down.</li>
<li style="text-align: justify;">Repeat for desired counts.</li>
</ul>
<img src="https://i.giphy.com/A8rpwQNtey71S.gif">
<h2><strong>Full Body Aerobic Exercise at Home Guide</strong></h2>
<h3><strong>8. Burpees</strong></h3>
<p style="text-align: justify;"><strong>Primary Muscles Targeted &#8211;</strong> Chest, Triceps, Delts, Quads and Hamstring</p>
<p style="text-align: justify;"><strong>How To Perform A Burpee &#8211;</strong></p>
<ul style="text-align: justify;">
<li style="text-align: justify;">Start off with a standing position with hands on the side.</li>
<li style="text-align: justify;">Drop down to a squat position but with your palms on the ground.</li>
<li style="text-align: justify;">Kick your legs back while keeping your arms extended.</li>
<li style="text-align: justify;">You will be now in a high plank position.</li>
<li style="text-align: justify;">From high plank position, immediately return to squat position.</li>
<li style="text-align: justify;">Jump from this position to finish the first rep.</li>
</ul>
<img src="https://i.giphy.com/41LuZtcvEXZQI.gif">
<h2><strong>Exercises Tips for Weight Gain at Home</strong></h2>
<ul style="text-align: justify;">
<li style="text-align: justify;"><strong>You can skip Cardio (Yes, seriously) –</strong> It’s time to spare yourself from those strenuous running sessions. It ain’t gonna help you. On a scale of 0 to 10, keep your cardio at 2-3 mark. Include <em>short interval running</em>, <em>sprints</em> and <em>uphill training</em> in your <em>cardio routine</em>.</li>
<li style="text-align: justify;"><strong>Shorten your rest period between sets –</strong> Rest no longer than a minute between each set to <em>maximize gains</em>. For instance, close grip push ups – 15-20 reps, wait a minute, 15-20 reps, wait a minute, finishing off with 10-12 reps.</li>
<li style="text-align: justify;"><strong>Master Bodyweight exercises and compound lifts –</strong> Your top priority – <em>Build the fundamental strength and increase the muscle mass</em> with the help of <em>bodyweight exercises</em>. Do pull ups, chin ups, dips, push ups, and squats and vary them now and then to keep the workout challenging.</li>
<li style="text-align: justify;"><strong>Take enough rest to recover and grow –</strong> You will now have to bid farewell to late-night chats and movies. There’s no way you are going to achieve your fitness goals by neglecting your sleep. Period. You should get at least 7-9 hours of good sleep every night for maximum growth.</li>
<li style="text-align: justify;"><strong>Eat and Eat a lot –</strong> There’s no purpose to all the hard work done in the gym if you don’t refuel yourself with nutritious food. Start calculating your macros, track your calories and eat enough whole foods. Use this <span style="color: #0000ff;">Calorie Calculator</span> to know how much calories you will need to gain weight.</li>
<li style="text-align: justify;"><strong>Ladies listen up</strong>. <em>You don&#8217;t need to shy away from calories if you want to gain weight</em>. All you need to make sure that you get most of your calories from fruits, veggies and dairy products. It&#8217;s certainly not a tough task for a woman to gain weight. Follow the <em>exercise routine</em>, eat small meals frequently, increase calorie intake, drink a lot of water, take enough rest, and you will see the scale going up very soon.</li>
</ul>
<h2 style="text-align: justify;"><strong>Most Important Takeaway </strong></h2>
<p style="text-align: justify;">Your transformation from <strong>skinny to muscle</strong> will require a focused approach to the training as well as diet. You can’t replace your bad training with a good diet and vice-versa. Besides, you will need a lot of patience to see those scales going up. Keep pushing yourself and you will be there one day.</p>

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
