<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  $_SESSION['start'] = time();
	 // taking now logged in time
	$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ; 
	// ending a session in 1  minutes from the starting time
    header("location: signin.php");
    exit;
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SLF INDIA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://th.bing.com/th/id/OIP.ifmMp7QUSqnyp1wW6LATYwHaHa?w=165&h=180&c=7&o=5&pid=1.7"
        type="image/x-icon">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <div id="overlay">
        <div class="spinner"></div>
    </div>
    <script>
        var overlay = document.getElementById("overlay");
        window.addEventListener('load', function () {
            overlay.style.display = 'none';
        });
    </script>
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-md-5 ">
                            <div class="header_left">
                                <p>Welcome to SLF consulting service</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="header_right d-flex">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-envelope"></i> ashishshubham@gmail.com</a></li>
                                        <li><a href="#"> <i class="fa fa-phone"></i>+91-9682585304</a></li>
                                    </ul>
                                </div>
                                <div class="social_media_links">
                                    <a href="#">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="llo">
                                <div class="logo">
                                    <a href="welcome.php">
                                        <!-- <img src="img/logo.png" alt=""> -->
                                        <h1 class="hh">SLF INDIA</h1>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav class="abc">
                                        <ul id="navigation" class="hov">
                                            <li><a href="welcome.php">Home</a></li>
                                            </li>
                                            <li><a href="SLFindia-interior-code/index.php">Interior </a></li>
                                            <li><a class="active" href="#">Projects <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="residential.php">Residential</a></li>
                                                    <li><a href="commercial.php">Commercial</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="properties.php">Book Online </a>
                                            </li>
                                            <li><a href="contact.php">Contact Us </a></li>
                                            <a class="lot" href="logout.php">
                                                Logout <i class="fa fa-sign-out" aria-hidden="true"></i>
                                            </a>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="slider_text text-center justify-content-center">
                            <h3>Residential</h3>
                            <button type="button" class="tot"> <a href="finder.php">Property Finder</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    <!-- popular_property  -->
    <div class="popular_property">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h3>Residential Properties</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                For Sale
                            </div>
                            <img src="img/property/1.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                <h3><a href="#">Comfortable Apartment in Palace</a></h3>
                                <div class="mark_pro">
                                    <img src="img/svg_icon/location.svg" alt="">
                                    <span>Popular Properties</span>
                                </div>
                                <span class="amount">From $20k</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                            <ul>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/square.svg" alt="">
                                        <span>1200 Sqft</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/bed.svg" alt="">
                                        <span>2 Bed</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/bath.svg" alt="">
                                        <span>2 Bath</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag red">
                                For Rent
                            </div>
                            <img src="img/property/2.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                <h3><a href="#">Comfortable Apartment in Palace</a></h3>
                                <div class="mark_pro">
                                    <img src="img/svg_icon/location.svg" alt="">
                                    <span>Popular Properties</span>
                                </div>
                                <span class="amount">$563/month</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                            <ul>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/square.svg" alt="">
                                        <span>1200 Sqft</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/bed.svg" alt="">
                                        <span>2 Bed</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/bath.svg" alt="">
                                        <span>2 Bath</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                For Sale
                            </div>
                            <img src="img/property/3.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                <h3><a href="#">Comfortable Apartment in Palace</a></h3>
                                <div class="mark_pro">
                                    <img src="img/svg_icon/location.svg" alt="">
                                    <span>Popular Properties</span>
                                </div>
                                <span class="amount">From $20k</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                            <ul>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/square.svg" alt="">
                                        <span>1200 Sqft</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/bed.svg" alt="">
                                        <span>2 Bed</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/bath.svg" alt="">
                                        <span>2 Bath</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag red">
                                For Rent
                            </div>
                            <img src="img/property/4.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                <h3><a href="#">Comfortable Apartment in Palace</a></h3>
                                <div class="mark_pro">
                                    <img src="img/svg_icon/location.svg" alt="">
                                    <span>Popular Properties</span>
                                </div>
                                <span class="amount">$563/month</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                            <ul>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/square.svg" alt="">
                                        <span>1200 Sqft</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/bed.svg" alt="">
                                        <span>2 Bed</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/bath.svg" alt="">
                                        <span>2 Bath</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                For Sale
                            </div>
                            <img src="img/property/5.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                <h3><a href="#">Comfortable Apartment in Palace</a></h3>
                                <div class="mark_pro">
                                    <img src="img/svg_icon/location.svg" alt="">
                                    <span>Popular Properties</span>
                                </div>
                                <span class="amount">From $20k</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                            <ul>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/square.svg" alt="">
                                        <span>1200 Sqft</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/bed.svg" alt="">
                                        <span>2 Bed</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/bath.svg" alt="">
                                        <span>2 Bath</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag">
                                For Sale
                            </div>
                            <img src="img/property/6.png" alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                <h3><a href="#">Comfortable Apartment in Palace</a></h3>
                                <div class="mark_pro">
                                    <img src="img/svg_icon/location.svg" alt="">
                                    <span>Popular Properties</span>
                                </div>
                                <span class="amount">From $20k</span>
                            </div>
                        </div>
                        <div class="footer_pro">
                            <ul>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/square.svg" alt="">
                                        <span>1200 Sqft</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/bed.svg" alt="">
                                        <span>2 Bed</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/bath.svg" alt="">
                                        <span>2 Bath</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="more_property_btn text-center">
                        <a href="mr.php" class="boxed-btn3-line">More Properties</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /popular_property  -->
    <!-- home_details  -->
    <div class="home_details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="home_details_active owl-carousel">
                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <div class="modern_home_info">
                                        <div class="modern_home_info_inner">
                                            <span class="for_sale">
                                                For Sale
                                            </span>
                                            <div class="info_header">
                                                <h3>Blue haven modern home</h3>
                                                <div class="popular_pro d-flex">
                                                    <img src="img/svg_icon/location.svg" alt="">
                                                    <span>Popular Properties</span>
                                                </div>
                                            </div>
                                            <div class="info_content">
                                                <ul>
                                                    <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200
                                                            Sqft</span> </li>
                                                    <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span>
                                                    </li>
                                                    <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span>
                                                    </li>
                                                </ul>
                                                <p>Esteem spirit temper too say adieus who direct esteem. It estee
                                                    luckily or picture placing drawing. Apartments frequently or
                                                    motionless on reasonable.</p>
                                                <div
                                                    class="prise_view_details d-flex justify-content-between align-items-center">
                                                    <span>$4567</span>
                                                    <a class="boxed-btn3-line" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <div class="modern_home_info">
                                        <div class="modern_home_info_inner">
                                            <span class="for_sale">
                                                For Sale
                                            </span>
                                            <div class="info_header">
                                                <h3>Blue haven modern home</h3>
                                                <div class="popular_pro d-flex">
                                                    <img src="img/svg_icon/location.svg" alt="">
                                                    <span>Popular Properties</span>
                                                </div>
                                            </div>
                                            <div class="info_content">
                                                <ul>
                                                    <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200
                                                            Sqft</span> </li>
                                                    <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span>
                                                    </li>
                                                    <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span>
                                                    </li>
                                                </ul>
                                                <p>Esteem spirit temper too say adieus who direct esteem. It estee
                                                    luckily or picture placing drawing. Apartments frequently or
                                                    motionless on reasonable.</p>
                                                <div
                                                    class="prise_view_details d-flex justify-content-between align-items-center">
                                                    <span>$4567</span>
                                                    <a class="boxed-btn3-line" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <div class="modern_home_info">
                                        <div class="modern_home_info_inner">
                                            <span class="for_sale">
                                                For Sale
                                            </span>
                                            <div class="info_header">
                                                <h3>Blue haven modern home</h3>
                                                <div class="popular_pro d-flex">
                                                    <img src="img/svg_icon/location.svg" alt="">
                                                    <span>Popular Properties</span>
                                                </div>
                                            </div>
                                            <div class="info_content">
                                                <ul>
                                                    <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200
                                                            Sqft</span> </li>
                                                    <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span>
                                                    </li>
                                                    <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span>
                                                    </li>
                                                </ul>
                                                <p>Esteem spirit temper too say adieus who direct esteem. It estee
                                                    luckily or picture placing drawing. Apartments frequently or
                                                    motionless on reasonable.</p>
                                                <div
                                                    class="prise_view_details d-flex justify-content-between align-items-center">
                                                    <span>$4567</span>
                                                    <a class="boxed-btn3-line" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <div class="modern_home_info">
                                        <div class="modern_home_info_inner">
                                            <span class="for_sale">
                                                For Sale
                                            </span>
                                            <div class="info_header">
                                                <h3>Blue haven modern home</h3>
                                                <div class="popular_pro d-flex">
                                                    <img src="img/svg_icon/location.svg" alt="">
                                                    <span>Popular Properties</span>
                                                </div>
                                            </div>
                                            <div class="info_content">
                                                <ul>
                                                    <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200
                                                            Sqft</span> </li>
                                                    <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span>
                                                    </li>
                                                    <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span>
                                                    </li>
                                                </ul>
                                                <p>Esteem spirit temper too say adieus who direct esteem. It estee
                                                    luckily or picture placing drawing. Apartments frequently or
                                                    motionless on reasonable.</p>
                                                <div
                                                    class="prise_view_details d-flex justify-content-between align-items-center">
                                                    <span>$4567</span>
                                                    <a class="boxed-btn3-line" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="modern_home_info">
                                        <div class="modern_home_info_inner">
                                            <span class="for_sale">
                                                For Sale
                                            </span>
                                            <div class="info_header">
                                                <h3>Blue haven modern home</h3>
                                                <div class="popular_pro d-flex">
                                                    <img src="img/svg_icon/location.svg" alt="">
                                                    <span>Popular Properties</span>
                                                </div>
                                            </div>
                                            <div class="info_content">
                                                <ul>
                                                    <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200
                                                            Sqft</span> </li>
                                                    <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span>
                                                    </li>
                                                    <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span>
                                                    </li>
                                                </ul>
                                                <p>Esteem spirit temper too say adieus who direct esteem. It estee
                                                    luckily or picture placing drawing. Apartments frequently or
                                                    motionless on reasonable.</p>
                                                <div
                                                    class="prise_view_details d-flex justify-content-between align-items-center">
                                                    <span>$4567</span>
                                                    <a class="boxed-btn3-line" href="#">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /home_details  -->
    <!-- counter_area  -->
    <div class="counter_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3> <span class="counter">200</span> <span>+</span> </h3>
                        <p>Properties for sale</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3> <span class="counter">300</span></h3>
                        <p>Properties for sale</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3> <span class="counter">15</span></h3>
                        <p>Properties for sale</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /counter_area  -->
    <!-- testimonial_area  -->
    <div class="testimonial_area overlay ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->
    <!-- contact_action_area  -->
    <div class="contact_action_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="action_heading">
                        <h3>For Booking Call At--></h3>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="call_add_action">
                        <span>+91-9682585304</span>
                        <a href="finder.php" class="boxed-btn3-line">Property Finder</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /contact_action_area  -->
    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <h1>SLF INDIA</h1>
                                    <!-- <img src="img/footer_logo.png" alt=""> -->
                                </a>
                            </div>
                            <p>
                                <a href="#">shuash@gmail.com</a> <br>
                                +91-98765456 <br>
                                lkjhgffghkjjkhg
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                About Us
                            </h3>
                            <ul>
                                <li><a href="leadership.php">Leadership Team</a></li>
                                <li><a href="cmd.php"> CMD Messages</a></li>
                                <li><a href="quality.php">Quality Policy</a></li>
                                <li><a href="award.php">Award and Honours</a></li>
                                <li><a href="mission.php">Mission and Vision </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#"> Contact</a></li>
                                <li><a href="#">Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form id="contactForm" action="/SLF_INDIA/welcome.php" method="POST"
                                class="newsletter_form">
                                <input type="email" name="email" id="email" placeholder="Enter your mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                luckily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            Website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                href="#" target="_blank">SLF</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->
    <!-- link that opens popup -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script
        src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/slick.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
    <script>
        function collision($div1, $div2) {
            var x1 = $div1.offset().left;
            var w1 = 40;
            var r1 = x1 + w1;
            var x2 = $div2.offset().left;
            var w2 = 40;
            var r2 = x2 + w2;
            if (r1 < x2 || x1 > r2)
                return false;
            return true;
        }
        // Fetch Url value 
        var getQueryString = function (parameter) {
            var href = window.location.href;
            var reg = new RegExp('[?&]' + parameter + '=([^&#]*)', 'i');
            var string = reg.exec(href);
            return string ? string[1] : null;
        };
        // End url 
        // // slider call
        $('#slider').slider({
            range: true,
            min: 20,
            max: 200,
            step: 1,
            values: [getQueryString('minval') ? getQueryString('minval') : 20, getQueryString('maxval') ?
                getQueryString('maxval') : 200
            ],
            slide: function (event, ui) {
                $('.ui-slider-handle:eq(0) .price-range-min').html(ui.values[0] + 'K');
                $('.ui-slider-handle:eq(1) .price-range-max').html(ui.values[1] + 'K');
                $('.price-range-both').html('<i>K' + ui.values[0] + ' - </i>K' + ui.values[1]);
                // get values of min and max
                $("#minval").val(ui.values[0]);
                $("#maxval").val(ui.values[1]);
                if (ui.values[0] == ui.values[1]) {
                    $('.price-range-both i').css('display', 'none');
                } else {
                    $('.price-range-both i').css('display', 'inline');
                }
                if (collision($('.price-range-min'), $('.price-range-max')) == true) {
                    $('.price-range-min, .price-range-max').css('opacity', '0');
                    $('.price-range-both').css('display', 'block');
                } else {
                    $('.price-range-min, .price-range-max').css('opacity', '1');
                    $('.price-range-both').css('display', 'none');
                }
            }
        });
        $('.ui-slider-range').append('<span class="price-range-both value"><i>' + $('#slider').slider('values', 0) +
            ' - </i>' + $('#slider').slider('values', 1) + '</span>');
        $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#slider').slider('values', 0) +
            'k</span>');
        $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#slider').slider('values', 1) +
            'k</span>');
    </script>
</body>

</html>