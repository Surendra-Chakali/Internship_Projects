<?php
session_start();

$server='localhost';
$dbuser='root';
$dbpass='';
$db='examseat';
$conn=mysqli_connect($server,$dbuser,$dbpass,$db);//database connection


if (isset($_POST['submit'])) {
  # code...
  $room = $_POST['room'];
  $_SESSION['room'] = $room;
  header('location:Rooms/midexample1.php');

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>examseating-arrangement - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="https://upload.wikimedia.org/wikipedia/en/4/49/Srinivasa_Ramanujan_Institute_of_Technology_logo.png" rel="icon">
  <link href="../Model/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="mainblock.html" rel="stylesheet">
  <link href="Ablock.html" rel="stylesheet">
  <link href="B-Block.html" rel="stylesheet">
  <style>
    .Block{
       border: 3px solid skyblue;
       border-collapse: collapse;
       font-size: 25px;
       text-align: center;
       height: 150px;
    }
</style>
  <!-- =======================================================
  * Template Name: iPortfolio - v3.1.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/Srinivasa_Ramanujan_Institute_of_Technology_logo.png" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">SRIT</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/sritatp" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/sritatp" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/sritatp/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <!--a href="#" class="google-plus"><i class="bx bxl-skype"--></i></a>
          <a href="https://www.linkedin.com/school/sritatp/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="index.html" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="index.html" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="index.html" class="nav-link scrollto "><i class="bx bx-building"></i> <span>Building</span></a></li>
          <li><a href="Ablock.php" class="nav-link scrollto"><i class="bx bx-building"></i><span>A Block</span></a></li>
          <li><a href="B-Block.php" class="nav-link scrollto active"><i class="bx bx-building"></i><span>B Block</span></a></li>
          <li><a href="mainblock.html" class="nav-link scrollto"><i class="bx bx-building"></i><span>Main Block</span></a></li>
         <!-- <li><a href="#seminarhallmainblock" class="nav-link scrollto"><i class="bx bx-building"></i><span>Seminar Hall-1</span></a></li>
          <li><a href="#seminarhallbblock" class="nav-link scrollto"><i class="bx bx-building"></i><span>Seminar Hall-2</span></a></li>
	      <li><a href="#drawinghall" class="nav-link scrollto"><i class="bx bx-building"></i><span>Drawing Hall</span></a></li>-->
          <li><a href="index.html" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>ExamSchedule</span></a></li>
          <li><a href="index.html" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Admin</span></a></li>
          <li><a href="index.html" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  <main id="main">
   <center><img src="assets/img/srithead.png" alt="SRINIVASA RAMANUJAN INSTITUTE OF TECHNOLOGY"></center> 
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
            <table class="Block" style="width: 100%">
                <tr>
                    <td class="Block"><a href="Rooms/RoomNo-B31.php?room=B31">Room No:B31</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-B31.php?room=B32">Room No:B32</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-B31.php?room=B33">Room No:B33</a></td>
                    <td rowspan="4">B BLOCK</td>
                    <td class="Block"><a href="Rooms/RoomNo-B31.php?room=B34">Room No:B34</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-B31.php?room=B35">Room No:B35</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-B31.php?room=B36">Room No:B36</a></td>
                </tr>
                <tr class="Block">
                    <td class="Block"><a href="Rooms/RoomNo-B31.php?room=B21">Room No:B21</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-B31.php?room=B22">Room No:B22</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-B31.php?room=B23">Room No:B23</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-B31.php?room=B24">Room No:B24</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-B31.php?room=B25">Room No:B25</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-B31.php?room=B26">Room No:B26</a></td>
                </tr>
                <tr>
                    <td class="Block" colspan="3"><a href="Rooms/RoomNo-B31.php?room=computerLab2">Computer Lab</a></td>
                    <td class="Block" colspan="3"><a href="Rooms/RoomNo-B31.php?room=apssdclab">APSSDC LAB</a></td>
                </tr>
                <tr>
                    <td class="Block" colspan="3"><a href="Rooms/RoomNo-B31.php?room=seminarhall">seminar hall</a></td>
                    <td class="Block" colspan="3"><a href="Rooms/RoomNo-B31.php?room=electronicslab">Electronics lab</a></td>
                    
                </tr>
            </table>

        
        </div>
        </div>
        </section>
        

        <div align="center">
          <p>Check room</p>
      <form action="" method="post">
          <select name="room">
            
              <?php
                   

                $branchq=mysqli_query($conn, "SELECT distinct classroom from trisub1");
                while($row =mysqli_fetch_assoc($branchq)) {
                  # code...
                  $classroom = $row['classroom'];
                   ?> 
                   <option value="<?php echo($classroom);?>"><?php echo($classroom);?></option>

            <?php
                }

?>
          </select>
          <input type="submit" name="submit" value="Send">
        </form>
        </div>
        <div style="margin-top: 10px;">
          <a href="Rooms/automaticallyUpdated1.php"><button>Automatically alloted</button></a>
        </div>

        <div style="margin-top: 10px;">
          <a href="Rooms/extallotment1.php"><button>External Allotment</button></a>
        </div>

         <div style="margin-top: 10px;">
          <a href="Rooms/asignfaculty1.php"><button>Allot Invigilators</button></a>
        </div>

        <div style="margin-top: 10px;">
          <button onclick="alert('Mail send successfully');">Send mail</button>
        </div>
        
        <br>
        </main>
    
</body>
</html>