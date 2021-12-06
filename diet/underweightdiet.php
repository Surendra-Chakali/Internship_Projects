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
            
                <h2 class="text-center" style="padding: 1em;"><b>About Underweight Diet</b></h2>
               <div style="margin-top: 2em;">
                   <div class="row" style="margin-top: 2em;">
                    <div class="col-lg-6 col-mg-6 col-sm-12 col-12">
                        <p>Just like obesity causes health concerns, having less weight than the normal also poses health issues. Being underweight can be result of poor nutrition and should be a matter of concern. If the body does not receive adequate amounts of nutrients, the body fails to function to its utmost. This could result in the imbalance in the metabolism. Inculcating a healthy diet for underweight will provide the necessary nutrients for better functioning of the body.</p>
                        <p>To deal with underweight, maintaining a proper nutritious diet is important. We create a weight gain meal plan for underweight, easily followed by both males and females.  We try to add food with high-calorie foods for underweight adults. This diet meal plan is used to provide the right nutrients, vitamins, and minerals required by the body. You can easily buy food items listed in the underweight diet meal plan in your local markets. </p>
                        <p>We also list those food items that should be avoided while following the underweight meal plan. While following this Indian diet meal plan, also follow these lifestyle changes and habits. We also listed out meal timing and what food items you need to eat to gain weight. These healthy meals are listed after discussion with professional dietitians.</p>
                    </div>
                     <div class="col-lg-6 col-mg-6 col-sm-12 col-12" align="center">
                        <img src="https://assets.lybrate.com/q_auto:eco,f_auto,w_850/imgs/product/kwds/diet-chart/Underweight-Diet-Chart-v1.jpg" width="80%" height="80%">
                    </div>
                 </div>
               </div>

               <div style="margin-top: 3em;">
                 <p>These are quick health tips for the person suffering from underweight should include this in your diet plan:
<ol><li>Heavy food items that are more in calories.
</li><li>Frequent consumption of food items which are rich in nutrients, it could be snacks, shakes or juices, or proper meals.
</li><li>Adding extra ingredients that are high in calories to regular diet, for example, including eggs and bananas in morning breakfast, etc., can help in increasing the weight.
</li><li>Consume protein supplements along with adequate amount of vegetables and fruits.
</li><li>Eating calorie dense food and maintaining a balanced diet will help in gaining the weight.
</li><li>However, the diet shouldn’t be started drastically and instead, should be implemented gradually so that the body is accustomed with it.</li></ol></p>
               </div>

               <div style="margin-top: 3em;">
                  <h2><b>Diet Chart for Underweight person</b></h2>
              <h2><b>Underweight Diet Restrictions: Food Items To Limit</b></h2>
              
                <p><ol><li> Whole Eggs. Once feared for being high in cholesterol, whole eggs have been making a comeback. ...
</li><li> Leafy Greens. 
</li><li> Salmon.
</li><li>Cruciferous Vegetables. 
</li><li> Lean Beef and Chicken Breast
</li><li>Boiled Potatoes.
</li><li> Tuna.
</li><li>Beans and Legumes.</li></ol></p>
              <h2><b>Do's And Dont's While Following Diet Plan for Underweight</b></h2>
                <p>In Underweight condition, you can start making some simple changes in your lifestyles and food habits which are mentioned below, along with the diet plan mentioned above:</p>
<p>Do's:
<ol><li>Eat more often
</li><li>Drink Milk
</li><li>Try Weight gainer shakes
</li><li>Use Bigger Plates 
</li><li>Add cream to your coffee 
</li><li>Take Creatine 
</li><li>Get Quality Sleep 
</li><li>Eat your protein first and vegetables last</li></ol></p>
<p>Don'ts:
<ol><li>Drink water before meals
</li><li>Smoke</li></ol></p></div>
              <h2><b>Food Items You Can Easily Consume in Underweight Diet Plan</b></h2>
                <p><ol><li>Lean Red Meat: Steak contains a ton of protein and iron. Red meat is high in cholesterol, so most food professionals don’t recommend it as part of a healthy diet more than a few times per week. 
</li><li>Real Nut Butters: Natural peanut butter is packed with protein and fats, making it a great choice for people trying to gain weight the healthy way. One tablespoon contains around 100 calories and has 4 grams of protein. 
</li><li>Whole Fat Milk: Dietitians say that one simple substitution you can make when trying to gain weight is swapping your skim milk for whole milk. It’s only 60 calories more a glass as the fat is left in. 
</li><li>Tropical Fruit: Fruits like mango, papaya, bananas, and pineapple are amazing choices according to food experts. They are full of natural sugars and can give you great energy. 
</li><li>Avocado: These delicious green vegetables are an excellent way to add heart-healthy fats to your diet. One half of an avocado contains 140 calories, but also contain high levels of potassium, folic acid, and vitamin E. 
</li><li>Natural Granola: Natural granola with no added refined sugar is a great cereal to enjoy if you are trying to gain weight. This tasty snack is made from rolled oats, sugar, and healthy fats (like nuts and coconut oil). More dried fruit and nuts can also be added. 
</li><li>Whole Wheat Bread: Nutritionists say that eating healthy bread products is a great way to start gaining weight. If you’re adding bread to your diet, look for whole grains. Nuts: Nuts are a great snack for gaining weight. They are full of fat and nutrients, but also contain a great deal of fiber. Eating only a handful of nuts can keep you full for hours. Not all nuts are equal for fiber though.
</li><li>Cheese: Try goat cheese with eggs, Swiss with roasted chicken, and Parmesan on top of asparagus. On its own, cheese also makes a great snack because it’s high in protein.</li></ol></p>
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
