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
            
                <h2 class="text-center" style="padding: 1em;"><b>How to lose weight in 7 days you're still in lockdown? Follow this diet in quarantine to prevent belly fat</b></h2>
               <div style="margin-top: 2em;">
                   <div class="row" style="margin-top: 2em;">
                    <div class="col-lg-6 col-mg-6 col-sm-12 col-12">
                        <p class="text-justify"><b>New Delhi: </b>Adopting a daily routine that includes eating a balanced diet can help you stay healthy and fit whether you are in self-isolation or quarantine due to the COVID-19 pandemic. As countries take stricter measures to curb the spread of novel coronavirus, temporary shutdown of businesses may affect your chances of eating a varied diet, which is essential for healthy weight loss. Planning and prepping a 7-day quarantine meal plan in advance will help you make the right food choices while saving more time and stress.</p>
                        <p class="text-justify">Following general advice for healthy living and ensuring that you add fresh produce to your daily diet (even if that’s canned or frozen) can help you continue eating a healthy diet. Besides this, practicing mindful eating and establishing a fitness routine at home can help you lose weight, manage stress during a quarantine.</p>
                    </div>
                     <div class="col-lg-6 col-mg-6 col-sm-12 col-12" align="center">
                        <img src="assets/img/overwtdiet1.jpg" width="80%" height="80%">
                    </div>
                 </div>
               </div>

               <div style="margin-top: 3em;">
                   <h4 class="text-danger"><b>7-day quarantine diet plan for weight loss during COVID-19 self-isolation</b></h4>
                   <p class="text-justify" style="margin-top: 2em;">If you’re looking for a sensible diet to prevent gaining belly fat while you’re in quarantine, here’s a 7-day meal plan designed by nutritionist Avni Kaul that will help you stick to your weight loss plan. The week-long diet plan of early morning, breakfast, lunch, evening snack, dinner, and before bed is not only delicious but affordable as well.</p>
               </div>
               <div>
                   <h3 class="text-success"><b>Day 1</b></h3>
                   <div class="table-responsive" style="margin-top: 3em;">
                   <table class="table table-hover">
                       <thead>
                           <tr>
                               <th class="text-center">Meals</th>
                               <th class="text-center">Time</th>
                               <th class="text-center">Menu</th>
                           </tr>
                   </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">Early morning</td>
                                    <td class="text-center">7: 00am</td>
                                    <td class="text-center">1 glass water + 1 tsp saunf (soaked overnight)</td>
                                </tr>
                                <tr>
                                    <td class="text-center">Breakfast</td>
                                    <td class="text-center">9: 00am</td>
                                    <td class="text-center">1 small bowl vegetable oats (tomato, onion, capsicum)</td>
                                </tr>
                                <tr>
                                    <td class="text-center">Mid-morning</td>
                                    <td class="text-center">11:00am</td>
                                    <td class="text-center">black coffee/green tea/nimbu pani + 5 soaked almonds + 3 walnuts</td>
                                </tr>
                                <tr>
                                    <td class="text-center">Lunch</td>
                                    <td class="text-center">2: 00pm</td>
                                    <td class="text-center">1 bajra/jowar/whole wheat roti + 1 small bowl dal (moong, urad, arhar) + 1 small bowl of curd</td>
                                </tr>
                                <tr>
                                    <td class="text-center">Evening time</td>
                                    <td class="text-center">4-5: 00pm</td>
                                    <td class="text-center">fruit smoothie (1 cup skim-milk yogurt + 4-5 strawberry + 1 tsp flax seeds)</td>
                                </tr>
                                <tr>
                                    <td class="text-center">Dinner</td>
                                    <td class="text-center">8: 00pm</td>
                                    <td class="text-center">1 small plate khichdi + pickle</td>
                                </tr>
                                <tr>
                                    <td class="text-center">Before bed</td>
                                    <td class="text-center">10: 00pm</td>
                                    <td class="text-center">1 glass water + 1 tsp zeera (soaked 2 hours prior)</td>
                                </tr>
                            </tbody>
                   </table>
                   </div>
               </div>


               <div style="margin-top: 2em;">
                   <h3 class="text-danger"><b>Day 2</b></h3>
                   <div class="table-responsive" style="margin-top: 3em;">
                   <table class="table table-hover">
                       <thead>
                           <tr>
                               <th class="text-center">Meals</th>
                               <th class="text-center">Time</th>
                               <th class="text-center">Menu</th>
                           </tr>
                   </thead>
                            <tbody>
        
        <tr>
            <td class="text-center">Early morning</td>
            <td class="text-center">7: 00am</td>
            <td class="text-center">1 glass warm water + 1 tsp lemon + 1 tsp honey</td>
        </tr>
        <tr>
            <td class="text-center">Breakfast</td>
            <td class="text-center">9: 00am</td>
            <td class="text-center">1 small bowl vegetable vermicelli (onion, tomato, capsicum, corn)</td>
        </tr>
        <tr>
            <td class="text-center">Mid-morning</td>
            <td class="text-center">11: 00am</td>
            <td class="text-center">5 soaked almonds +3 raisins + green tea</td>
        </tr>
        <tr>
            <td class="text-center">Lunch</td>
            <td class="text-center">2: 00pm</td>
            <td class="text-center">1 small plate vegetable pulao + 1 small bowl beetroot raita</td>
        </tr>
        <tr>
            <td class="text-center">Evening time</td>
            <td class="text-center">4-5: 00pm</td>
            <td class="text-center">1 apple + 1 glass jal zeera</td>
        </tr>
        <tr>
            <td class="text-center">Dinner</td>
            <td class="text-center">8: 00pm</td>
            <td class="text-center">1 ajwain paratha + 1 small bowl dal + 1 small plate salad</td>
        </tr>
        <tr>
            <td class="text-center">Before bed</td>
            <td class="text-center">10: 00pm</td>
            <td class="text-center">
            
            </td>
        </tr>
    </tbody>
                   </table>
                   </div>
               </div>


               <div style="margin-top: 4em;">
                   <h3 class="text-warning"><b>Day 3</b></h3>
                   <div class="table-responsive" style="margin-top: 3em;">
                   <table class="table table-hover">
                       <thead>
                           <tr>
                               <th class="text-center">Meals</th>
                               <th class="text-center">Time</th>
                               <th class="text-center">Menu</th>
                           </tr>
                   </thead>
                            <tbody>
        
        <tr>
            <td class="text-center">Early morning</td>
            <td class="text-center">7: 00am</td>
            <td class="text-center">1 glass water + 1-2 cinnamon sticks (soaked overnight)</td>
        </tr>
        <tr>
            <td class="text-center">Breakfast</td>
            <td class="text-center">9: 00am</td>
            <td class="text-center">2 thin oats or dal cheela + green chutney</td>
        </tr>
        <tr>
            <td class="text-center">Mid-morning</td>
            <td class="text-center">11: 00am</td>
            <td class="text-center">coconut water + 3 dates + 3 walnuts (soaked overnight)</td>
        </tr>
        <tr>
            <td class="text-center">Lunch</td>
            <td class="text-center">2: 00pm</td>
            <td class="text-center">1 plain dosa + 1 small bowl sambhar + coconut chutney</td>
        </tr>
        <tr>
            <td class="text-center">Evening time</td>
            <td class="text-center">4-5: 00pm</td>
            <td class="text-center">1 glass ABC juice (apple + beetroot + carrot</td>
        </tr>
        <tr>
            <td class="text-center">Dinner</td>
            <td class="text-center">8: 00pm</td>
            <td class="text-center">eggs omelette/scrambled/boiled/poached (2 eggs, 1 yolk) + stir fried vegetables (spinach, onion, tomato, bell-peppers)</td>
        </tr>
        <tr>
            <td class="text-center">Before bed</td>
            <td class="text-center">10: 00pm</td>
            <td class="text-center">1 glass milk + 1 small piece jaggery</td>
        </tr>
    </tbody>
                   </table>
                   </div>
               </div>

               <div style="margin-top: 4em;">
                   <h3 class="" style="color: green;"><b>Day 4</b></h3>
                   <div class="table-responsive" style="margin-top: 3em;">
                   <table class="table table-hover">
                       <thead>
                           <tr>
                               <th class="text-center">Meals</th>
                               <th class="text-center">Time</th>
                               <th class="text-center">Menu</th>
                           </tr>
                   </thead>
                            <tbody>
        <tr>
            <td class="text-center">Meals</td>
            <td class="text-center">Time</td>
            <td class="text-center">Menu</td>
        </tr>
        <tr>
            <td class="text-center">Early morning</td>
            <td class="text-center">7: 00am</td>
            <td class="text-center">1 glass water + 1 tsp ajwain (soaked overnight)</td>
        </tr>
        <tr>
            <td class="text-center">Breakfast</td>
            <td class="text-center">9: 00am</td>
            <td class="text-center">150ml skim-milk + 2 tbsp muesli/oats + 4 soaked almonds + 3 walnuts</td>
        </tr>
        <tr>
            <td class="text-center">Mid-morning</td>
            <td class="text-center">11: 00am</td>
            <td class="text-center">Mix fruit chaat (papaya, oranges, apples)</td>
        </tr>
        <tr>
            <td class="text-center">Lunch</td>
            <td class="text-center">2: 00pm</td>
            <td class="text-center">1 small plate bajra khichdi + 1 small bowl cucumber raita</td>
        </tr>
        <tr>
            <td class="text-center">Evening time</td>
            <td class="text-center">4-5: 00pm</td>
            <td class="text-center">1 small bowl sprouts salad (onion, cucumber, corn, tomato)</td>
        </tr>
        <tr>
            <td class="text-center">Dinner</td>
            <td class="text-center">8: 00pm</td>
            <td class="text-center">1 small bowl tomato/spinach-corn/carrot soup + 1 multigrain toast</td>
        </tr>
        <tr>
            <td class="text-center">Before bed</td>
            <td class="text-center">10: 00pm</td>
            <td class="text-center">30ml&nbsp; amla juice</td>
        </tr>
    </tbody>
                   </table>
                   </div>
               </div>

               <div style="margin-top: 4em;">
                   <h3 class="" style="color: blue;"><b>Day 5</b></h3>
                   <div class="table-responsive" style="margin-top: 3em;">
                   <table class="table table-hover">
                       <thead>
                           <tr>
                               <th class="text-center">Meals</th>
                               <th class="text-center">Time</th>
                               <th class="text-center">Menu</th>
                           </tr>
                   </thead>
                           <tbody>
        
        <tr>
            <td class="text-center">Early morning</td>
            <td class="text-center">7: 00am</td>
            <td class="text-center">1 glass water + 4-5 cardamom (soaked overnight)</td>
        </tr>
        <tr>
            <td class="text-center">Breakfast</td>
            <td class="text-center">9: 00am</td>
            <td class="text-center">1 small bowl vegetable poha (peanuts, onion, tomato, beans) + 1 glass lemon water</td>
        </tr>
        <tr>
            <td class="text-center">Mid-morning</td>
            <td class="text-center">11: 00am</td>
            <td class="text-center">1 glass fruit smoothie (strawberry + yogurt + chia seeds)</td>
        </tr>
        <tr>
            <td class="text-center">Lunch</td>
            <td class="text-center">2: 00pm</td>
            <td class="text-center">2 thin ragi uthapam + green chutney</td>
        </tr>
        <tr>
            <td class="text-center">Evening time</td>
            <td class="text-center">4-5: 00pm</td>
            <td class="text-center">1 cup tea + 2 whole wheat rusk</td>
        </tr>
        <tr>
            <td class="text-center">Dinner</td>
            <td class="text-center">8: 00pm</td>
            <td class="text-center">1 small bowl lentil soup/lentil stew</td>
        </tr>
        <tr>
            <td class="text-center">Before bed</td>
            <td class="text-center">10: 00pm</td>
            <td class="text-center">1 glass water + 4-5 cloves (soaked 2 hours prior)</td>
        </tr>
    </tbody>
                   </table>
                   </div>
               </div>

               <div style="margin-top: 4em;">
                   <h3 class="text-danger"><b>Day 6</b></h3>
                   <div class="table-responsive" style="margin-top: 3em;">
                   <table class="table table-hover">
                       <thead>
                           <tr>
                               <th class="text-center">Meals</th>
                               <th class="text-center">Time</th>
                               <th class="text-center">Menu</th>
                           </tr>
                   </thead>
                           <tbody>
       
        <tr>
            <td class="text-center">Early morning</td>
            <td class="text-center">7: 00am</td>
            <td class="text-center">1 glass water + 4-5 neem leaves (soaked overnight)</td>
        </tr>
        <tr>
            <td class="text-center">Breakfast</td>
            <td class="text-center">9: 00am</td>
            <td class="text-center">1 small bowl vegetable daliya (onion, tomato, carrot, beans)</td>
        </tr>
        <tr>
            <td class="text-center">Mid-morning</td>
            <td class="text-center">11: 00am</td>
            <td class="text-center">green tea + 5 almonds + 3 raisins + 3 walnuts</td>
        </tr>
        <tr>
            <td class="text-center">Lunch</td>
            <td class="text-center">2: 00pm</td>
            <td class="text-center">1 small plate rice + 1 small bowl rajmah curry + 1 small bowl zeera curd</td>
        </tr>
        <tr>
            <td class="text-center">Evening time</td>
            <td class="text-center">4-5: 00pm</td>
            <td class="text-center">1 small bowl makhana-murmura chaat</td>
        </tr>
        <tr>
            <td class="text-center">Dinner</td>
            <td class="text-center">8: 00pm</td>
            <td class="text-center">1 roti + 1 small bowl vegetable + 1 small bowl salad (beetroot, cucumber)</td>
        </tr>
        <tr>
            <td class="text-center">Before bed</td>
            <td class="text-center">10: 00pm</td>
            <td class="text-center">1 glass water + 4-5 tulsi leaves (soaked 2 hours prior)</td>
        </tr>
    </tbody>
                   </table>
                   </div>
               </div>

               <div style="margin-top: 4em;">
                   <h3 class="text-warning"><b>Day 7</b></h3>
                   <div class="table-responsive" style="margin-top: 3em;">
                   <table class="table table-hover">
                       <thead>
                           <tr>
                               <th class="text-center">Meals</th>
                               <th class="text-center">Time</th>
                               <th class="text-center">Menu</th>
                           </tr>
                   </thead>
                            <tbody>
        <tr>
            <td class="text-center">Meals</td>
            <td class="text-center">Time</td>
            <td class="text-center">Menu</td>
        </tr>
        <tr>
            <td class="text-center">Early morning</td>
            <td class="text-center">7: 00am</td>
            <td class="text-center">1 glass water + 1/2tsp black pepper powder (soaked overnight)</td>
        </tr>
        <tr>
            <td class="text-center">Breakfast</td>
            <td class="text-center">9: 00am</td>
            <td class="text-center">2 thin dal-cheela + 1 small bowl curd/green chutney</td>
        </tr>
        <tr>
            <td class="text-center">Mid-morning</td>
            <td class="text-center">11: 00am</td>
            <td class="text-center">1 glass lemon-mint water infusion + 1 guava fruit</td>
        </tr>
        <tr>
            <td class="text-center">Lunch</td>
            <td class="text-center">2: 00pm</td>
            <td class="text-center">1 small bowl rice khichdi + 1 small bowl lauki raita</td>
        </tr>
        <tr>
            <td class="text-center">Evening time</td>
            <td class="text-center">4-5: 00pm</td>
            <td class="text-center">250ml skim-milk</td>
        </tr>
        <tr>
            <td class="text-center">Dinner</td>
            <td class="text-center">8: 00pm</td>
            <td class="text-center">1 small bowl vegetable dalia/vermicelli (onion, carrot, capsicum, tomato)</td>
        </tr>
        <tr>
            <td class="text-center">Before bed</td>
            <td class="text-center">10: 00pm</td>
            <td class="text-center">1 glass water + ¼ tsp haldi powder</td>
        </tr>
    </tbody>
                   </table>
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
