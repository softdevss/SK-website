<?php include "includes/db.php" ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Sangguniang Kabataan San Isidro </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/donations.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">

  <link rel="stylesheet" type="text/css" href="boot5/css/style.css">


</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
<header>
    <!--? Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/logo1.png" alt="" width="200px"></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav >
                                    <ul id="navigation" >
                                        <li><a class="text-decoration-none" href="index.php">Home</a></li>
                                        <li><a class="text-decoration-none" href="about.php">About</a>
                                        <ul class="submenu">
                                        <li ><a class="text-decoration-none" href="roster.php"><i class="fas fa-chevron-right"></i> Sangguniang Kabataan Roster</a></li>
                                            <li><a class="text-decoration-none" href="officials.php"><i class="fas fa-chevron-right"></i> SK Elected Officials</a></li>
                                            <!-- <li><a class="text-decoration-none" href="sdg.php"><i class="fas fa-chevron-right"></i> Sustainable Development Goals</a></li> -->
                                            <!-- <li><a class="text-decoration-none" href="#"><i class="fas fa-chevron-right"></i> SK Resolutions</a>
                                            <ul class="submenu" style="margin-left:16.3rem; width:80px">
                                                        <li><a class="text-decoration-none" href="#"><i class="fas fa-chevron-right"></i> 2019</a></li>
                                                        <li><a class="text-decoration-none" href="#"><i class="fas fa-chevron-right"></i> 2020</a></li>
                                                        <li><a class="text-decoration-none" href="#"><i class="fas fa-chevron-right"></i> 2021</a></li>
                                                </ul>
                                            </li> -->

                                            <!--  -->
                                            
                                            
                                            </ul></li>

                                            <li><a class="text-decoration-none" href="#">Be A Partner</a>
                                        <ul class="submenu">
                                        <li><a class="text-decoration-none" href="volunteer.php"><i class="fas fa-chevron-right"></i> Be a Volunteer</a></li>
                                        <li><a class="text-decoration-none" href="donation.php"><i class="fas fa-chevron-right"></i> Donate</a></li>
                                        <li><a class="text-decoration-none" href="youth.php"><i class="fas fa-chevron-right"></i> Youth Councils</a></li>
                                            
                                            
                                            </ul></li>
                                        <li><a class="text-decoration-none" href="services.php">Program & Services</a>
                                            <ul class="submenu">
                                           
                                            <li><a class="text-decoration-none" href=""><i class="fas fa-chevron-right"></i> Project & Achievements</a>
                                                        <ul class="submenu" style="margin-left:16.3rem; width:80px">
                                                        <li><a class="text-decoration-none" href="#"><i class="fas fa-chevron-right"></i> 2019</a></li>
                                                        <li><a class="text-decoration-none" href="#"><i class="fas fa-chevron-right"></i> 2020</a></li>
                                                        <li><a class="text-decoration-none" href="#"><i class="fas fa-chevron-right"></i> 2021</a></li>
                                                </ul>
                                                </li>
                                                        <li><a class="text-decoration-none" href="downloadable-form.php"><i class="fas fa-chevron-right"></i> Downloadable forms</a></li>
                                                        
                                                        <!-- <li><a class="text-decoration-none" href="helpdesk.php"><i class="fas fa-chevron-right"></i> Online Health Desk</a></li> -->
                                                        
                    
                                                
                                            </ul>
                                        </li>
                                        
                                        <li><a class="text-decoration-none" href="contact.php">Contact</a></li>
                                           <!-- <li><a href="login-modal.php">Login</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>   
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>