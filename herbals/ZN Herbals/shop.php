<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>product</title>
    
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
     <?php include('header.php');?>
     <div class="navigation">
            <div class="pl-4 pr-4">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-8 col-8">
                        <div class="logo2">
                            <a href="index.php">
                                 <img src="images/logon.png" alt="Logo" width="300px"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-4 col-4">
                        <nav class="navbar navbar-expand-md float-right">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mt-4 navbg">
                                    <li class="">
                                        <a class="nav-item ml-4" href="index.php">Home</a>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.php" class="text-left">About us</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a href="shop.php">Products</a><hr style="border-bottom: 1px solid red;width: 40px;margin-left: 28px; margin-top: -11px;">
                                       
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.php">Contact</a>
                                        
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    </div> 
                </div>
            </div>
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
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header logo support -->
        
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/19.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Products</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> <a href="shop.php">Products</a></li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== SHOP PART START ======-->
    
    <section id="shop-page" class="pt-120 pb-120 gray-bg">
        <div class="container">
           
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="shop-grid" role="tabpanel" aria-labelledby="shop-grid-tab">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="singel-publication mt-30">
                                <div class="image">
                                    <img src="images/paste.png" alt="Publication" height="220px">
                                    <div class="add-cart">
                                        <ul>
                                           <!--  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        </ul> 
                                    </div>
                                </div>
                                <div class="cont">
                                    <!-- <div class="name"> -->
                                        <a href="#"><h6 class="text-center">Toothpaste</h6></a>
                                        
                                    <!-- </div> -->
                                    
                                </div>
                            </div> <!-- singel publication -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="singel-publication mt-30">
                                <div class="image">
                                    <img src="images/18.jpg" alt="Publication">
                                    <div class="add-cart">
                                        <ul>
                                            <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cont">
                                    <!-- <div class="name"> -->
                                        <a href="#"><h6 class="text-center">Anti dandruff and conditioning oil</h6></a>
                                       
                                    <!-- </div> -->
                                </div>
                            </div> <!-- singel publication -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="singel-publication mt-30">
                                <div class="image">
                                    <img src="images/1.jpg" alt="Publication" height="200px">
                                    <div class="add-cart">
                                        <ul>
                                          <!--   <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cont">
                                    <!-- <div class="name"> -->
                                        <a href="#"><h6 class="text-center">Hibiscus and Methi</h6></a>
                                        
                                    <!-- </div> -->
                                </div>
                            </div> <!-- singel publication -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="singel-publication mt-30">
                                <div class="image">
                                    <img src="images/5.jpg" alt="Publication" height="190px">
                                    <div class="add-cart">
                                        <ul>
                                           <!--  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cont">
                                    <!-- <div class="name"> -->
                                        <a href="#"><h6 class="text-center">Curry leaves and Bhringaraj</h6></a>
                                        
                                    <!-- </div> -->
                                </div>
                            </div> <!-- singel publication -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="singel-publication mt-30">
                                <div class="image">
                                    <img src="images/6.jpg" alt="Publication" height="220px">
                                    <div class="add-cart">
                                        <ul>
                                           <!--  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cont">
                                    <!-- <div class="name"> -->
                                        <a href="#"><h6 class="text-center">Kalonji Oil</h6></a>
                                        <!-- <span>$50.00</span> -->
                                    <!-- </div> -->
                                   <!--  <div class="button text-right">
                                        <a href="#" class="main-btn">Buy Now</a>
                                    </div> -->
                                </div>
                            </div> <!-- singel publication -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="singel-publication mt-30">
                                <div class="image">
                                    <img src="images/herbal6.png" alt="Publication" height="220px">
                                    <div class="add-cart">
                                        <ul>
                                           <!--  <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li> -->
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cont">
                                    <!-- <div class="name"> -->
                                        <a href="#"><h6 class="text-center">Skin Tone Syrup </h6></a>
                                        <!-- <span>$50.00</span> -->
                                    
                                </div>
                            </div> <!-- singel publication -->
                        </div>
                        
                        
                    </div> <!-- row -->
                </div>
            </div> 
        </div> <!-- container -->
    </section>
    
    <!--====== COURSES PART ENDS ======-->
   
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
