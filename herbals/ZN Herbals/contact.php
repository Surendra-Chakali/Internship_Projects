<?php
include('db_connection.php');
if (isset($_POST['submit'])) {
    # code...
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $messege = $_POST['messege'];
    $sql = $conn->prepare("INSERT INTO `contact`(`name`, `email`, `subject`, `phone`, `messege`) VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param("sssss", $name, $email, $subject, $phone, $messege);
    $sql->execute();
    if ($sql) {
        # code...
        echo "<script>alert('Thanking your for contacting us, we will get back soon');</script>";
    }
    else echo "eoor";
}


?>


<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>ZN Herbals</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/logon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
  
    <style type="text/css">
    ul li{margin-top: -15px;}
    .navbg{background: linear-gradient(to right, #7CFC00 100%, #FFFAFA 0%);height: 50px;}
    .navbg li:hover{background: white;}
    .navbg li{margin-left: -40px;padding-right: 24px;padding-left: 24px;}
    .navbg .active{background: white;}

      @media only screen and (max-width: 992px)
      {
        ul li{margin-top: auto;padding-right: auto;padding-left: auto;margin-left: auto;}
        ul li{margin-top: auto;}
        nav{margin-bottom: 10px;}
        }

      @media only screen and (max-width: 766px)
      {
        nav{margin-top: auto;}
        .navbg{height: auto;background: none;}
        }
  </style>
  
</head>

<body>
    <!--====== HEADER PART START ======-->
<?php include('header.php');?>

        <div class="navigation mt-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-8 col-8">
                        <div class="logo2">
                            <a href="index.php">
                                 <img src="images/logon.png" alt="Logo" width="300px"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-4 col-4">
                        <nav class="navbar navbar-expand-md float-right mt-3">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav navbg">
                                    <li class="nav-item">
                                        <a class="nav-item ml-4" href="index.php">Home</a>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.php">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="shop.php">Products</a>
                                       
                                    </li>
                                    <li class="nav-item active">
                                        <a href="contact.php">Contact</a><hr style="border-bottom: 1px solid red;width: 40px;margin-left: 28px; margin-top: -11px;">
                                        
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    </div> 
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="7" style="background-image: url(images/logon.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>CONTACT</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> <a href="contact.php">Contact us</a></li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->
    
    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                            <h5>Contact Us</h5>
                            <h3 class="mt-4">Keep in touch</h3>
                        </div> <!-- section title -->
                        <div class="main-form pt-45">
                            <form action="" method="post" data-toggle="validator">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="name" type="text" placeholder="Your name" data-error="Name is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="email" type="email" placeholder="Email" data-error="Valid email is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="subject" type="text" placeholder="Subject" data-error="Subject is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form --> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="phone" type="text" placeholder="Phone" minlength="10" maxlength="10" data-error="Phone is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <textarea name="messege" placeholder="Messege" data-error="Please,leave us a message." required="required"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="singel-form">
                                            <button type="submit" name="submit" class="main-btn">Send</button>
                                        </div> <!-- singel form -->
                                    </div> 
                                </div> <!-- row -->
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
                <div class="col-lg-5">
                    <div class="contact-address mt-30">
                        <ul>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>F 101, Kalyani Gayathri Towerss, Kukatpally, Hyderabad.</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+91 7093767548</p>
                                        <!-- <p>+X XXX XXX XXX</p> -->
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>znherbals@gmail.com</p>
                                        <!-- <p>herbal@yourmail.com</p> -->
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                        </ul>
                    </div> <!-- contact address -->
                    <div class="mt-30 bg-white">
                    
                        <div class="p-3" align="center">
                            <b><span class="text-center"> OFFICE HOURS&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp;9AM to 6PM</span></b>
                            <div class="text-justify mt-20">
                                MONDAY – SATURDAY operates by appointment only for orders and consultations. All orders will be processed within 24 hours.  SUNDAY – CLOSED. Orders for products can be made via email, Whatsapp
                                <p class=" mt-20">znherbals@gmail.com or by text on Phone No: +91 7674894031</p>
                            </div>
                        </div>
                    </div> <!-- map -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== CONTACT PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    <?php include('footer.php');?>
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <!--====== jquery js ======-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nice-number.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/validator.min.js"></script>
    <script src="js/ajax-contact.js"></script>
    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>

</body>
</html>
