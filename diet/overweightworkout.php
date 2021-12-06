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
    <div style="position: fixed;top: 80%;left: 90%;z-index: 10;">
  <a href="chat/index.php"><img src="assets/img/chatbot.png" style="width: 80px;height: 80px;border-radius: 50%;"></a>
</div>
       <div class="container">
       
           <h2 class="text-center" style="text-shadow: .4em .4em .3em rgba(0, 0, 0, 0.6);padding: 1em;"><b>Focus On Fitness</b></h2>
           <div style="margin-top: 2em;">
               <h4 style="background-color: lightgreen;width: 470px;border-radius: 40px;padding: 10px;" class="text-center"><b>7-Day Exercise Plan for Beginners</b></h4>
               <p class="text-justify" style="font-size: 17px;margin-top: 2em;">Are you ready to start moving but aren’t quite sure where to start? Follow this plan for the next seven days. Several ten-minute bouts of exercise can be as effective as one thirty-minute workout. Start with ten minutes of something, like walking or basic stretches. After two weeks, add on another ten minutes, and know that you can do the additional ten minutes later in the day. In another week, tack on ten more minutes of something moderately physical so that you are exercising thirty minutes most days of the week.</p>
           </div>
    
           <div style="margin-top: 2em;">
               <h4 style="background-color: lightgreen;width: 470px;border-radius: 40px;padding: 10px;" class="text-center"><b>Exercise Day 1</b></h4>
               <div class="row" style="margin-top: 2em;">
                <div class="col-lg-6 col-mg-6 col-sm-12 col-12" align="center" style="margin-top: 4em;">
                    <img src="assets/img/overwtworkout1.gif" width="30%" height="30%">
                </div>
                <div class="col-lg-6 col-mg-6 col-sm-12 col-12">
                    <ul>
                        <li><b>March in place (standing or sitting): </b>This is a good way to start every workout. It can be done while watching TV, reading or waiting in line. Start with two to three minutes.</li>
                        <li><b>Foot circles: </b>While seated, or holding on for balance if standing, pick up one leg and draw circles with your foot while stretching your ankle. Try one minute on each side.</li>
                        <li><b>Leg extensions:</b> While seated, extend your leg from the knee to work the quadriceps (front thigh muscles). Try 10 repetitions (reps) on each leg.</li>
                        <li><b>Speed bag punches:</b> Hold your arms up and circle your fists around each other as though you’re a boxer punching a speed bag. Start with thirty seconds on each side.</li>
                        <li><b>Neck stretches:</b> Look up and down, like you’re saying "yes," slowly for 10 counts. Look side to side, like you’re saying "no," slowly for 10 counts. Tilt your ear toward your shoulder and alternate for 10 counts.</li>

                    </ul>
                </div>
             </div>
           </div>

            <div style="margin-top: 2em;">
                <div align="">
                     <h4 style="background-color: pink;width: 470px;border-radius: 40px;padding: 10px;" class="text-center"><b>Exercise Day 2</b></h4>
                  </div>  
                    <ul style="margin-top: 4em;">
                        <li><b>Imaginary jump rope: </b>You don’t have to jump—just shift your weight from one leg to the other as you move your arms, like you’re spinning the rope. Try for two to three minutes, sitting or standing.</li>

                        <li><b>Arm circles: </b> Do full, slow, sweeping circles with both arms. Circle both arms forward for thirty seconds, then backward for thirty seconds. Then, alternate arms like you’re swimming the front crawl stroke for one minute. Now, reverse and do the backstroke for one minute.</li>

                        <li><b>Band work:</b>  Perform two lower body and two upper body resistance band exercises. Start with as many reps as you can perform comfortably with proper technique. Work up to 10–15 reps on each side. Turn to page 192 of the Real Life guide for resistance band exercises.</li>

                        <li><b>Wall push-ups or push-offs:</b> Stand flatfooted, facing a wall about two feet away. Starting with arms fully extended, lower yourself toward the wall, keeping your body straight and feet flat on the floor. Then, push away from the wall until arms are extended back to starting position. Work up to 10–12 reps.</li>
                    </ul>
           </div>

            <div style="margin-top: 2em;">
               <h4 style="background-color: blue;width: 470px;border-radius: 40px;padding: 10px;color: white;" class="text-center"><b>Exercise Day 3</b></h4>
               <div class="row" style="margin-top: 2em;">
               
                <div class="col-lg-6 col-mg-6 col-sm-12 col-12">
                    <ul>
                        <li><b>Uppercut punch: </b> Alternate punching up toward the ceiling for one minute. Keep elbows bent 90 degrees throughout the movement.</li><br>

                        <li><b>Toe raises: </b> Stand with the balls of the feet on a step so that your heels are off the floor. Lower the heels below one step level, then lift up to the balls of the feet for one minute.</li>

                        <li><b>Shoulder shrugs:</b>  Stand or sit with feet comfortably apart. Hold a weight (soup can, milk jug or dumbbell) in each hand. Shrug shoulders up toward ears, pause and roll shoulders back to starting position. Work up to 12–15 reps.</li>

                        <li><b>Side stretch (standing or sitting):</b>  Slide your right hand down the side of your leg as you bend to the right. Repeat on the left side. Work up to 12–15 reps on each side.</li>

                    </ul>
                </div>
                 <div class="col-lg-6 col-mg-6 col-sm-12 col-12" align="center">
                    <img src="assets/img/overwtworkout2.gif" width="30%" height="30%">
                </div>
             </div>
           </div>

            <div style="margin-top: 2em;">
                <div align="">
                     <h4 style="background-color: red;width: 470px;border-radius: 40px;padding: 10px;color: white;" class="text-center"><b>Exercise Day 4</b></h4>
                  </div>  
                    <ul style="margin-top: 4em;">
                        <li><b>Dribble and shoot (standing or sitting): </b> Pretend to dribble two basketballs (one in each hand) three times. On the fourth count, pretend as though you’re shooting a basketball. Count for two minutes: dribble, dribble, dribble, shoot.</li>

                        <li><b> Trunk twists (standing or sitting): </b> Twist your torso gently to your left side, reaching your left arm behind and bending your right arm across your stomach. Now, twist to the right side while you switch your arms and repeat for one minute.</li>

                        <li><b>Wall squat:</b> Stand with your back against a wall and squat down as far as you can. Hold for a few seconds. Work up to 12–15 reps.</li>

                        <li><b>Walking lunges:</b>  Step forward with one leg and lunge until your knee is above your front foot. Make sure your knee does not go over your toes. Alternate legs and work up to 10–12 reps.</li>

                        <li><b>Triceps dip: </b> Support yourself on a seat with both hands behind you and fingers facing away from the seat. Bend your knees and lower yourself using only your arms. Lift and repeat. Work up to 10–12 reps.</li>

                        <li><b>Crunch:</b> Lie on the floor or mat with your arms behind your head and your knees bent. Lift up your upper torso, squeeze in your abs, lower slowly, and repeat. Exhale up, inhale down.</li>

                        <li><b> Lower back/hamstring stretch: </b>Lie on your back on a firm surface with the backs of your heels flat on the floor. Gently pull one knee up to your chest until you feel a stretch in your lower back. Bring the knee as close to your chest as comfortably possible. Keep the opposite leg relaxed in a comfortable position, either with your knee bent or with your leg extended. Hold for about 30 seconds. Switch legs and repeat.</li>
                    </ul>
           </div>

           <div style="margin-top: 2em;">
               <h4 style="background-color: green;width: 470px;border-radius: 40px;padding: 10px;color: white;" class="text-center"><b>Exercise Day 5</b></h4>
               <div class="row" style="margin-top: 2em;">
                <div class="col-lg-6 col-mg-6 col-sm-12 col-12" align="center" style="margin-top: 10em;">
                    <img src="assets/img/overwtworkout4.gif" width="30%" height="30%">
                    <img src="assets/img/overwtworkout3.gif" width="30%" height="30%">
                </div>
                <div class="col-lg-6 col-mg-6 col-sm-12 col-12">
                    <ul>
                        <li><b>Chair squats: </b> Stand in front of a chair with your back toward the chair and feet shoulder-width apart. Keep your head up as a natural extension of your spine. Begin to sit in the chair, lowering your body until your legs are at a 90-degree angle. Contracting your quadriceps, slowly return to the starting position, stopping just short of the legs being fully extended. Keep a slight bend in the knees to prevent injuries. Work up to 6-8 reps.</li>

                        <li><b>Inner-thigh stretch: </b> Sit on the floor or in a chair with the soles of your feet together (or as close together as you can). Drop knees toward the floor. Gradually lower your torso toward the floor until you feel a gentle tension in the inner thighs. Hold for up to 30 seconds. Release.</li>
                        <li><b> Crab walk:</b> Take a seat on the floor. Place your hands just outside your shoulders with palms on the floor. Lift your rear off the ground. Next, walk backward a few feet, stop, and then walk forward. Do this exercise three times for 30–45 seconds each.</li>
                        <li><b>Speed bag punches:</b> Hold your arms up and circle your fists around each other as though you’re a boxer punching a speed bag. Start with thirty seconds on each side.</li>
                        <li><b>Leg kicks:</b> Standing or sitting, alternate kicking legs from the knee for two to three minutes.</li>

                    </ul>
                </div>
             </div>
           </div>

           <div style="margin-top: 2em;">
               <h4 style="background-color: blue;width: 470px;border-radius: 40px;padding: 10px;color: white;" class="text-center"><b>Exercise Day 6</b></h4>
               <div class="row" style="margin-top: 2em;">
               
                <div class="col-lg-6 col-mg-6 col-sm-12 col-12">
                    <ul>
                        <li><b>Knee lifts (standing or sitting): </b>  Alternate lifting knees toward the chest for one minute. For more of a challenge, angle the opposite hand or elbow toward the opposite knee.</li><br>

                        <li><b>Supermans:  </b> Lie flat on your stomach with your arms out in front of you, resting on the ground. Your legs should also be flat on the ground. With your head in a neutral position (ears are aligned with your shoulders), lift both arms and legs simultaneously, as if you were flying. As you lift up, your lower back should contract. Hold each movement for at least two to five seconds per repetition. Do 15–20 reps and work up to three sets.</li>

                        <li><b>Hip raise: </b>   Lie on your back with your knees bent and your feet flat on the floor. Place your arms out to your sides at a 45-degree angle, your palms facing up. Now, try to make your tummy as skinny as possible and hold it that way while breathing normally. This gives you a tight core. Keeping your core tight, squeeze your glutes (buttocks) and raise your hips so your body forms a straight line from your shoulders to your knees. Pause for five seconds—squeezing your glutes tightly the entire time—then lower your body back to the starting position. Do 10 reps.</li>

                        <li><b>Rag doll stretch: </b>  Hang like a rag doll! Let your head and upper body roll down slowly toward the floor. Hold the stretch for up to a minute. While bent over, let your arms swing like a pendulum to loosen the shoulders.</li>

                    </ul>
                </div>
                 <div class="col-lg-6 col-mg-6 col-sm-12 col-12" align="center">
                    <img src="assets/img/overwtworkout5.gif" width="70%" height="70%" style="margin-top: 10em;">
                </div>
             </div>
           </div>

           <div style="margin-top: 2em;">
                <div align="">
                     <h4 style="background-color: pink;width: 470px;border-radius: 40px;padding: 10px;" class="text-center"><b>Exercise Day 7</b></h4>
                  </div>  
                    <ul style="margin-top: 4em;">
                        <li><b>The plank: </b> Put your body into the push-up position, but place your elbows on the floor. Keep your whole body flat. This position is known as the “static hold” position, or “the plank,” and it trains your core (including your abs) to hold the body in place, which is the real purpose of your abs. Hold this position for as long as possible. Beginners should aim to start off with about 10 seconds and work up to one minute over time.</li>

                        <li><b>Band work: </b> Try two different lower body and two upper body resistance band exercises from Day Two.</li>

                        <li><b> Bicep curls:</b> Hold weights (or soup cans, milk jugs, dumbbells, etc.) in each hand. Slowly curl one weight up to your chin, turning your thumb away from your shoulder. Lower the weight back to your side and repeat with the other arm. Try 8–10 reps on each side.</li>

                        <li><b>Trunk rotations:</b> Standing or sitting with hands on hips, slowly bend to the side, then to the front, then to the other side, making a half-circle with the upper body. Do not arch your back! Alternate sides for one minute.</li>

                        <li><b>Calf stretch:</b> Stand at arm’s length from a wall or a piece of sturdy exercise equipment. Place your right foot behind your left foot. Slowly bend your left leg forward, keeping your right knee straight and your right heel on the floor. Hold your back straight and hips forward. Don’t rotate your feet inward or outward. Keep your feet straight with toes pointed toward the wall. Hold for about 30 seconds. Switch legs and repeat. To deepen the stretch, slightly bend your right knee as you bend your left leg forward.</li>

                        <li>
                            <b>Shoulder/tricep stretch:</b> If the back of your shoulder is tight, you may be more likely to develop rotator cuff problems. To keep your shoulders flexible, bring your left arm across your body and hold it with your right arm, either above or below the elbow. Hold for about 30 seconds. Switch arms and repeat.</li>
                    </ul>
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
