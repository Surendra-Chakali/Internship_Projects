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
    
    if (isset($_POST['submit'])) {
        # code...
        // $result = "";
        $height = $_POST['height'];
        $weight = $_POST['weight'];

        $bmi = $weight / ($height/100 * $height/100);
        
        if($bmi <= 18.49) {
            $res = "underweight";
            $workout = "workout";
            $diet = "diet";
        }
        else if ($bmi >= 18.50 && $bmi <= 24.99) {
            $res = "normalweight";
             $workout = "workout";
            $diet = "diet";
        }
        else if ($bmi >= 25 && $bmi <= 29.99) {
            # code...
            $res = "overweight";
             $workout = "workout";
            $diet = "diet";
        }
        else {
            $res = "obese";
             $workout = "workout";
            $diet = "diet";
        }

        $sql1 = mysqli_query($conn, "SELECT * FROM `description` WHERE Result = '$res' ");
        $result = mysqli_fetch_array($sql1);
        $desc = $result['Description'];
        $image = $result['Image'];
        $key = $result['Keywords'];

          
             mysqli_query($conn, "INSERT INTO `result`(`StudentId`, `Result`) VALUES ('$sid','$res')");
        

    }


    if (isset($_POST['fsubmit'])) {
        # code...
        $descript = $_POST['descript'];

        $sql = $conn->prepare("INSERT INTO `feedback`(`email`, `Description`) VALUES (?, ?)");  
        $sql->bind_param("ss",$email, $descript);
        $sql->execute();
        if ($sql) {
             # code...
            $success =  "Thanking you for your valuable feedback";
         } 
        
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
        <style type="text/css">
            
            .model{
            box-shadow: 4px 3px 14px 7px lightgray;
            width: 400px;
            height: 400px;
            position: absolute;
            left: 50%;
            top: 60%;
            transform: translate(-50%, -50%);
       }
       input[type='text']{
    width: 100%;
    border: none;
    border-bottom: 1px solid lightgray;
    outline: none;
  }
/*  #btns{
    display: none;
  }*/
        </style>
          <script type="text/javascript">
        // alert('Hai');
        // document.getElementsById('buttons').style.display = 'none';
        // document.getElementById('btns').style.display = "none";

        function buttons(){
            document.getElementById('btns').style.display = "block";
        }
    </script>
</head>
<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>
	<body>
        
        <div style="position: fixed;top: 80%;left: 90%;z-index: 10;">
  <a href="chat/index.php"><img src="assets/img/chatbot.png" style="width: 80px;height: 80px;border-radius: 50%;"></a>
</div>
        
        <div id="form" class="model"><br>
            <h4 class="text-center p-2" style="">BMI Calculator</h4>
        <form action="" method="post" style="padding: 30px;">
            <div class="" >
                <label id="height">Height (in cm)</label><br>
                <input type="text" name="height" id="height" required>
            </div>
            <div class="" style="padding-top: 10px;">
                <label for="weight">Weight</label><br>
                <input type="text" name="weight" id="weight" required>
            </div>
            <div align="center" class="p-2" style="padding-top: 30px;">
                <input type="submit" id="submit" onclick="buttons()" class="btn btn-success" name="submit" value="Calculate" style="padding-left: 4em;padding-right: 4em;">
            </div>
        </form>
        <?php
        $bmi1 = number_format($bmi, 2);
        ?>
        <h5 class="text-center text-danger" style="padding-bottom: 10px;margin-top: -8px;">Your bmi is <?php echo"$bmi1";?></h5>
        <div style="margin-top: 2em;margin-bottom: 2em;" align="center">
            <h4 class="text-success"><?php echo "$success";?></h4>
        </div>
    <div align="center" id="btns">
         <a href="<?php echo($res.$workout)?>.php" class="btn btn-primary text-center" style="padding-right: 2em;padding-left: 2em;">Workout</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="<?php echo($res.$diet)?>.php" class="btn btn-danger text-center" style="padding-right: 3em;padding-left: 3em;">Diet</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="" class="btn btn-warning text-center" style="padding-right: 2em;padding-left: 2em;" data-toggle="modal" data-target="#feedback">Feedback</a>&nbsp;&nbsp;
    </div>
         <!-- <h5 class="text-center text-success">Your report is <?php echo"$res";?></h5> -->
    </div>
    
    <?php 

    if (isset($_POST['submit'])) {
     
    ?>

    <div class="container" style="padding-top: 30%;padding-bottom: 3%;">
        <div style="padding: 2em;">
            <h2 class="text-danger" align="center">Your Report</h2>
        </div>
        <div class="table-responsive">
            <table class="table text-center table-hover">
                <tr class="text-center">
                    <th class="text-center">Result</th>
                    <td class="text-center text-success"><?php echo "<b>$res</b>";?></td>
                </tr>
                <tr>
                    <th class="text-center">Image</th>
                    <td class="text-center"><a href="admin/images/<?php echo "$image";?>"> <img width="100px" height="100px" src="admin/images/<?php echo "$image";?>"></a></td>
                </tr>
                <tr>
                    <th class="text-center">Description</th>
                    <td class="text-center"><?php echo "$desc";?></td>
                </tr>
                <tr>
                    <th class="text-center">Keywords</th>
                    <td class="text-center"><?php echo "$key";?></td>
                </tr>
            </table>
        </div>
        <div align="center"  style="padding-top: 2%;">
            <a href="getEnquiry.php" class="btn btn-primary">Get Enquiry</a>
        </div>
    </div>
    <?php

    }

?>


<!--Faculty model-->
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="feedback" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="mt-4 mb-3" style="margin-top: 2em;">
            <h4 class="modal-title text-center text-success">Send your feedback</h4>
        </div>
        <div class="modal-body">
          <form method="post">
              <div class="" style="margin-top: 1em;">
                <label for="name">User</label>
                <!-- <input type="hidden" name="name" value="<?php echo($email);?>"> -->
                <input type="text" id="name" value="<?php echo($email);?>" style="text-indent: 10px;" disabled>
              </div>
              <div style="margin-top: 1em;">
                  <label for="descript">Description</label>
                  <input type="text" name="descript" id="descript" required placeholder="Enter your feedback here">
              </div>
                <div align="center" style="margin-top: 2em;">
                    <button type="submit" class="btn btn-success text-white" style="padding-right: 2em;padding-left: 2em;" name="fsubmit" id="loginsubmit">Send</button>
                </div>
        </form>
        </div>
      </div>
      
    </div>
  </div>
</div>


	</body>
     <!-- CONTENT-WRAPPER SECTION END-->
<!-- <?php include('includes/footer.php');?> -->
   
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
  
</body>
</html>
