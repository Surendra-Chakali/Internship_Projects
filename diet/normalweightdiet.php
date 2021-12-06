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
            
                <h2 class="text-center text-success" style="padding: 1em;"><b>7-Day Heart-Healthy Meal Plan: 1,200 Calories</b></h2>
                <p>Keep your heart healthy and lose weight with this delicious 1,200-calorie meal plan.</p>
<p>Each product we feature has been independently selected and reviewed by our editorial team. If you make a purchase using the links included, we may earn commission.</p>
               <div class="row" style="margin-top: 4em;">
                   <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                       <img src="https://imagesvc.meredithcorp.io/v3/jumpstartpure/image?url=https://cf-images.us-east-1.prod.boltdns.net/v1/static/5118192885001/7f81b49b-4774-4844-8d23-a53527975c3a/45a63703-a6d2-443b-b2cc-538d73bdd303/1280x720/match/image.jpg&w=1280&h=720&q=90&c=cc" width="100%" style="margin-top: 5em;">
                   </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                       <p>A healthy diet and lifestyle are the best weapons to protect against heart disease. In fact, incorporating heart-healthy foods, exercising more, maintaining a healthy weight and not smoking can help reduce cardiovascular disease-related deaths by 50 percent. With this simple 1,200-calorie meal plan, you&apos;ll protect your heart and lose a healthy 1 to 2 pounds per week in the process.</p>
<p><strong>Related:</strong>&#xA0;15 Little Ways to Protect Your Heart</p>
<p>The meals and snacks in this&#xA0;diet plan feature&#xA0;heart-healthy foods recommended for a cardiac diet, like fiber-rich fruits, vegetables and whole grains, lean protein and fats like olive oil and avocado (see our full list of top 15 heart-healthy foods to eat). Saturated fat, added sugars and sodium (nutrients that can harm your heart in large amounts) are kept to a minimum and instead, dishes are seasoned with lots of herbs and spices to keep things flavorful and exciting.&#xA0;&#xA0;With this simple meal plan, you&apos;ll have healthy meals for the week at the ready!</p>
<p><strong>Looking for a different calorie level?</strong> See this same meal plan at 1,500 and 2,000 calories.</p>
<p><strong>Don&apos;t Miss: </strong>Delicious Heart-Healthy Recipes</p>
                    </div>
               </div>

               <h3 style="margin-top: 2em;"><b>Day 1 </b></h3>
               <div class="row" style="margin-top: 4em;">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                       <h3>Breakfast (271&nbsp;calories)</h3>
                <ul>
                  <li>1 serving Avocado Egg Toast</li>
                </ul>
                 
                
 <h3>A.M. Snack (84 calories)</h3>
 <ul>
     <li>1 cup blueberries</li>
 </ul>
<h3>Lunch (374&nbsp;calories)</h3>
    <ul>
        <li>1 serving Loaded Black Bean Nacho Soup</li>
    </ul>
                  <h3>
                    P.M. Snack (62 calories)
                  </h3>
         <ul>
                  <li>1 medium orange</li>
                </ul>
               <h3>
                    Dinner (457&nbsp;calories)
                 </h3>
                <ul>
                  <li>1 serving Seared Salmon with Green Peppercorn Sauce</li>
                  <li>1 cup steamed green beans</li>
                  <li>1 baked medium red potato, drizzled with 1&#xA0;tsp. olive oil, 1 Tbsp. nonfat plain Greek yogurt and a pinch of pepper.</li>
                </ul>
               <p><strong>Daily Totals:</strong> 1,224 calories, 60 g protein, 142 g carbohydrates, 28 g fiber, 52 g fat, 11 g sat. fat., 828 mg sodium</p>

                    </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                       <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F44%2F2019%2F04%2F27113022%2F44735191.jpg" width="70%" height="30%" style="margin-top: 7em;">
                   </div>
               </div>

               
              
              <div class="row" style="margin-top: 4em;">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">

               
                       <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F44%2F2019%2F04%2F27113029%2F64878671.jpg" width="70%" height="30%" style="margin-top: 7em;">
                   </div>

 <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <h3><b>Day 2 </b></h3>
                    <div style="margin-top: 2em;">
                        <h3>
                    Breakfast (265 calories)
                 </h3>
                <ul>
                  <li>1 cup bran cereal</li>
                  <li>1 cup skim milk</li>
                  <li>1/4 cup blueberries</li>
                </ul>
                <h3>
                    A.M. Snack (95 calories)
                </h3>
        <ul>
                  <li>1 medium apple</li>
                </ul>
                  <h3>
                    Lunch (374 calories)
                  </h3>
                <ul>
                  <li>1 serving Spinach &amp; Strawberry Meal-Prep Salad</li>
                </ul>
                  <h3>
          P.M. Snack (62 calories)
                  </h3>
                <ul>
                  <li>1medium orange</li>
                </ul>
                  <h3>
                    Dinner (429 calories)
                  </h3>
                <ul>
                  <li>1 serving Charred Shrimp &amp; Pesto Buddha Bowls</li>
                </ul>
                <p><strong>Daily Totals:</strong> 1,225 calories, 75 g protein, 148 g carbohydrates, 39 g fiber, 50 g fat, 9 g sat. fat., 1,363 mg sodium</p>
                    </div>
               </div>
             </div>

              <div class="row" style="margin-top: 4em;">
                 <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                       <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F44%2F2019%2F08%2F26232420%2F6349105.jpg" width="70%" height="30%" style="margin-top: 7em;">
                   </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                       <h3>Day 3</h3>
                 <h3>
                    Breakfast (297 calories)
                  </h3>
                <ul>
                  <li>1 cup nonfat plain Greek yogurt</li>
                  <li>3/4 cup blueberries</li>
                  <li>1 1/2 Tbsp. slivered almonds</li>
                  <li>2 tsp. honey</li>
                </ul>
        <h3
                  >
                    A.M. Snack (64 calories)
                  </h3>
                <ul>
                  <li>1 cup raspberries</li>
                </ul>
                  <h3
                  >
                    Lunch (374 calories)
                  </h3>
        <ul>
                  <li>1 serving Spinach &amp; Strawberry Meal-Prep Salad</li>
                </ul>
                  <h3
                  >
                    P.M. Snack (62 calories)
                  </h3>
                <ul>
                  <li>1 medium orange</li>
                </ul>
                  <h3
                  >
                    Dinner (416 calories)
                  </h3>
        <ul>
                  <li>1 serving Curried Sweet Potato &amp; Peanut Soup</li>
                  <li>1 slice whole-wheat bread, toasted</li>
                </ul>
        <p><strong>Daily Totals:</strong> 1,212 calories, 70 g protein, 132 g carbohydrates, 30 g fiber, 51 g fat, 9 g sat. fat., 1,332 mg sodium</p>

                    </div>
                    
               </div>
                  

                <div class="row" style="margin-top: 4em;">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                       <h3>Day 4</h3>
                <h3
                  >
                    Breakfast (265&nbsp;calories)
                  </h3>
        <ul>
                  <li>3/4 cup bran cereal</li>
                  <li>3/4&#xA0;cup skim milk</li>
                  <li>1/2&#xA0;cup blueberries</li>
                </ul>
                <h3
                  >
                    A.M. Snack (95 calories)
                  </h3>
        <ul>
                  <li>1 medium apple</li>
                </ul>
                  <h3
                  >
                    Lunch (374 calories)
                  </h3>
        <ul>
                  <li>1 serving Spinach &amp; Strawberry Meal-Prep Salad</li>
                </ul>
                  <h3
                  >
                    P.M. Snack (62 calories)
                  </h3>
        <ul>
                  <li>1 medium orange</li>
                </ul>
                  <h3
                  >
                    Dinner (427 calories)
                  </h3>
        <ul>
                  <li>1 serving </li>
                  <li>3/4 cup cooked brown rice</li>
                  <li>1 cup steamed broccoli</li>
                </ul>
        <p><strong>Daily Totals:</strong> 1,223 calories, 67 g protein, 170 g carbohydrates, 38 g fiber, 39 g fat, 9 g sat. fat., 1,284 mg sodium</p>

                    </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                       <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F44%2F2019%2F04%2Few-heart-healthy-mp-spin-salad-bowls-1244.jpg" width="70%" height="30%" style="margin-top: 7em;">
                   </div>
               </div>


<div class="row" style="margin-top: 4em;">
  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                       <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F44%2F2019%2F04%2F27113027%2F37594541.jpg" width="70%" height="30%" style="margin-top: 10em;">
                   </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                       <h3>Day 5 </h3>
                <h3
                  >
                    Breakfast (333 calories)
                  </h3>
                <ul>
                  <li>1/2 cup rolled oats, cooked in 1 cup milk</li>
                  <li>1 cup raspberries</li>
                </ul>
        <p><em>Cook oats and top with raspberries and a pinch of cinnamon.</em></p>
                  <h3
                  >
                    A.M. Snack (102 calories)
                  </h3>
        <ul>
                  <li>1 medium bell pepper, sliced</li>
                  <li>3&#xA0;Tbsp. hummus</li>
                </ul>
                  <h3
                  >
                    Lunch (374 calories)
                  </h3>
        <ul>
                  <li>1 serving Spinach &amp; Strawberry Meal-Prep Salad</li>
                </ul>
                  <h3
                  >
                    P.M. Snack (84&nbsp;calories)
                  </h3>
        <ul>
                  <li>1 cup blueberries</li>
                </ul>
                  <h3
                  >
                    Dinner (304&nbsp;calories)
                  </h3>
        <ul>
                  <li>1 1/4 cups Chicken Cauliflower Fried &quot;Rice&quot;</li>
                </ul>
                <p><strong>Daily Totals:</strong> 1,198 calories, 77 g protein, 120 g carbohydrates, 30 g fiber, 48 g fat, 9 g sat. fat., 1,405 mg sodium.</p>
</div>
                    </div>
                     
              

               <div class="row" style="margin-top: 4em;">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                       <h3>Day 6</h3>
                <h3
                  >
                    Breakfast (328&nbsp;calories)
                  </h3>
        <ul>
                  <li>1 cup bran cereal</li>
                  <li>1 cup skim milk</li>
                  <li>1&#xA0;cup blueberries</li>
                </ul>
         <h3
                  >
                    A.M. Snack (62 calories)
                  </h3>
        <ul>
                  <li>1 medium orange</li>
                </ul>
                  <h3
                  >
                    Lunch (296&nbsp;calories)
                  </h3>
        <ul>
                  <li>1 serving </li>
                </ul>
                <p><em><strong>Meal-Prep Tip:</strong></em> Save a serving of the tuna salad to have for lunch on Day 7.</p>
                  <h3
                  >
                    P.M. Snack (64 calories)
                  </h3>
        <ul>
                  <li>1 cup raspberries</li>
                </ul>
                  <h3
                  >
                    Dinner (457&nbsp;calories)
                  </h3>
                
        <ul>
                  <li>1 serving Toaster-Oven Tostada</li>
                </ul>
                <p><strong>Daily Totals:</strong> 1,206 calories, 55 g protein, 187 g carbohydrates, 55 g fiber, 39 g fat, 8 g sat. fat., 1,203 mg sodium.</p>

                    </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                       <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F44%2F2019%2F04%2F27113029%2F64878671.jpg" width="70%" height="30%">
                   </div>
               </div>

               <div class="row" style="margin-top: 4em;">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                       <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F44%2F2019%2F04%2F27113028%2F45650041.jpg" width="70%" height="30%">
                   </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                       <h3>Day 7</h3>
                <h3
                  >
                    Breakfast (355&nbsp;calories)
                  </h3>
                
        <ul>
                  <li>1 serving Avocado Egg Toast</li>
                  <li>1 cup blueberries</li>
                </ul>
                  <h3
                  >
                    A.M. Snack (64 calories)
                  </h3>
        <ul>
                  <li>1 cup raspberries</li>
                </ul>
                  <h3
                  >
                    Lunch (366 calories)
                  </h3>
        <ul>
                  <li>1 serving 
          Tuna, White Bean &amp; Dill Salad</a></li>
                  <li>1 slice whole-wheat bread, toasted</li>
                </ul>
                  <h3
                  >
                    P.M. Snack (62 calories)
                  </h3>
        <ul>
                  <li>1 medium orange</li>
                </ul>
                  <h3
                  >
                    Dinner (374&nbsp;calories)
                  </h3>
        <ul>
                  <li>1 serving 
          Skillet Lemon Chicken &amp; Potatoes with Kale</a></li>
                </ul>
        <p><strong>Daily Totals:</strong> 1,220 calories, 64 g protein, 132 g carbohydrates, 32 g fiber, 51 g fat, 9 g sat. fat., 1,275 mg sodium.</p>
                <p><strong>Don&apos;t Miss!</strong></p>

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
