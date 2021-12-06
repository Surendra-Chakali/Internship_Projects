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

// echo "<script>alert('$sid');</script>";

if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
if (isset($_POST['submit'])) {
    # code...
    $enquiry = $_POST['enquiry'];
    $sql = $conn->prepare("INSERT INTO `enquiry`(`StudentId`, `StudentEnquiry`) VALUES (?, ?)");  
    $sql->bind_param("ss",$sid, $enquiry);
    $sql->execute();

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Get Enquiry | User Dash Board</title>
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
        <div class="container" style="margin-top: 2em;margin-bottom: 2em;">
            <h3 class="text-center" style="color: red;"><b>Enquiry Form</b></h3>
        </div>

        <div class="container">
            <?php

            $sql1 = $conn->prepare("SELECT * FROM enquiry WHERE StudentId = ?");  
            $sql1->bind_param("s",$sid);
            $sql1->execute();
            $res1 =$sql1->get_result();
            while($row1 = $res1->fetch_assoc())
            {
            $senquiry = $row1['StudentEnquiry'];
            $id = $row1['id'];

            $sql2 = $conn->prepare("SELECT * FROM enquiryresult WHERE id = ?");  
            $sql2->bind_param("i",$id);
            $sql2->execute();
            $res2 =$sql2->get_result();
            $row2 = $res2->fetch_assoc();
            if (count($row2) < 1) {
                # code...
                 echo "<p><span class='text-danger'><b>Me:</b></span> $senquiry</p>";
            }
            else
            {
                $desc = $row2['Description'];
                $image = $row2['Image'];
                $key = $row2['Keywords'];
            ?>
            <div class="">
                <p><?php echo "<span class='text-danger'><b>Me:</b></span> $senquiry";?></p>
            </div>
            <div class="">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead><tr>
                            <th class="text-center">Image</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Keywords</th>
                        </tr></thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><a href="admin/images/<?php echo "$image";?>"> <img width="60px" height="60px" src="admin/images/<?php echo "$image";?>"></a></td>
                                <td class="text-center"><?php echo "$desc";?></td>
                                <td class="text-center"><?php echo "$key";?></td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        <?php
           }  
         }
         ?>
        </div>

        <form action="" method="post" style="padding-left: 34em;padding-top: 3%;padding-bottom: 3%;">
            <input type="text" name="enquiry" required>
            <input type="submit" name="submit" class="btn btn-success" style="margin-left: 2em;padding-left: 2em;padding-right: 2em;outline: none;" value="Enquiry">
        </form>
    </div>

	</body>
     <!-- CONTENT-WRAPPER SECTION END-->
<!-- <?php include('includes/footer.php');?> -->
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
