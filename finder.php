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


    <link rel="icon" href="https://th.bing.com/th/id/OIP.ifmMp7QUSqnyp1wW6LATYwHaHa?w=165&h=180&c=7&o=5&pid=1.7"
        type="image/x-icon">


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

    <title> property Dealer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.selectBox.css">
    <link type="text/css" rel="stylesheet" href="assets/css/dropzone.css">
    <link type="text/css" rel="stylesheet" href="assets/css/rangeslider.css">
    <link type="text/css" rel="stylesheet" href="assets/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/leaflet.css">
    <link type="text/css" rel="stylesheet" href="assets/css/slick.css">
    <link type="text/css" rel="stylesheet" href="assets/css/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="assets/css/map.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

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
                                        <!-- <i class="fa fa-linkedin"></i> -->
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

                                            <li><a href="#">Projects <i class="ti-angle-down"></i></a>

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
                            <h3>Find your best Property</h3>

                        </div>
                        <div class="property_form">

                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form_wrap d-flex">
                                            <div class="single-field max_width ">
                                                <label for="location">Location</label>
                                                <input type="text" class="wide" name="location" />

                                                </select>
                                            </div>
                                            <div class="single-field max_width ">
                                                <label for="property">Property type</label>

                                                <input type="text" class="wide" name="type" />
                                                <!-- <select class="wide" name="property" id="property" >
                                                                    <option data-display="Select">Select</option>
                                                                    <option value="1">Commercial</option>
                                                                    <option value="2">Residential</option>
                                                                    <option value="3">For Construction</option>
                                                                </select> -->
                                            </div>
                                            <!-- <div class="single_field range_slider"> -->
                                            <!-- <label for="price">Price (Rs.)</label> -->
                                            <!-- <div id="slider" name="price" id="price"></div> -->
                                            <!-- </div> -->
                                            <div class="single-field min_width ">
                                                <label for="bed">Bed Room</label>
                                                <input type="number" class="wide" name="bed" />
                                                <!-- <select class="wide" name="bed" id="bed">
                                                                        <option data-display="01">01</option>
                                                                        <option value="1">02</option>
                                                                        <option value="2">03</option>
                                                                    </select> -->
                                            </div>
                                            <!-- <div class="single-field min_width "> -->
                                            <!-- <label for="bath" >Bath Room</label> -->
                                            <!-- <input type="number" class="wide" name="location" /> -->
                                            <!-- <select class="wide" name="bath" id="bath">
                                                                        <option data-display="01">01</option>
                                                                        <option value="1">02</option>
                                                                        <option value="2">03</option>
                                                                </select> -->
                                            <!-- </div> -->
                                            <!-- <div class="serach_icon"> -->
                                                <a href="finder.php" >
                                                    <!-- <i class="ti-search"></i> -->
                                                    <button class="fin" type="submit" name="search" >Search</button>
                                                </a>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php


include 'include/config.php';
        
        
        $query1=mysqli_query($con,"select * from admin ");
        $admin=mysqli_fetch_array($query1);
        
        $u_name=ucfirst($admin['name']);


?>


    <?php
$connection=mysqli_connect("localhost","root","","real_estate");


if(isset($_POST['search']))
{
    $location= $_POST['location'];
    $query="select * from property where location='$location'";
    $query_run=mysqli_query($connection,$query);


while($res=mysqli_fetch_array($query_run))
{
    
  // $location=$res['location'];
  $id=$res['id'];
  $img=$res['image'];
  
          ?>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="property-box">
            <div class="property-thumbnail">
                <a href="properties-details.html" class="property-img">
                    <div class="tag button alt featured">Featured</div>
                    <div class="price-ratings-box">
                        <p class="price">
                            $ <?php echo $res['price'];?>
                        </p>
                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                    <img src="admin/images/property_image/<?php echo $img;?>" alt="property-1" class="img-fluid">
                </a>
                <div class="property-overlay">
                    <a href="properties-details.php?id=<?php echo $id;?>" class="overlay-link">
                        <i class="fa fa-link"></i>
                    </a>

                    <div class="property-magnify-gallery">
                        <a href="admin/images/property_image/<?php echo $img;?>" class="overlay-link">
                            <i class="fa fa-expand"></i>
                        </a>

                    </div>
                </div>
            </div>
            <div class="detail">
                <h1 class="title">
                    <a href="properties-details.php?id=<?php echo $id;?>"><?php echo $res['title'];?></a>
                </h1>
                <div class="location">
                    <a href="properties-details.php?id=<?php echo $id;?>">
                        <i class="fa fa-map-marker"></i><?php echo $res['address'];?>
                    </a>
                </div>
                <ul class="facilities-list clearfix">
                    <li>
                        <i class="flaticon-bed"></i> <?php echo $res['bedroom'];?> : Bedroom
                    </li>
                    <li>
                        <i class="flaticon-bath"></i> <?php echo $res['hall'];?> : Hall
                    </li>
                    <li>
                        <i
                            class="flaticon-square-layouting-with-black-square-in-east-area"></i><?php echo $res['sqr_price'];?>
                        Sq Ft
                    </li>
                    <li>
                        <i class="fa fa-coffee"></i> <?php echo $res['kichan'];?> : kitchen
                    </li>
                </ul>

            </div>
            <div class="footer">
                <a href="#">
                    <i class="fa fa-user"></i> <?php 
                            //   echo $u_name;
                              ?>
                </a>
                <span>
                    <i class="fa fa-calendar-o"></i> 2 years ago
                </span>
            </div>
        </div>
    </div>
    <?php
}
}
    

         


?>


</body>

</html>

<!-- slider_area_end -->



<?php
    // if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
    //     $location = $_POST['location'];
    //     $property = $_POST['property'];
    //     $price = $_POST['price'];
    //     $bed = $_POST['bed'];
    //     $bath = $_POST['bath'];
        
        
      
    //   // Connecting to the Database
    //   $servername = "localhost";
    //   $username = "root";
    //   $password = "";
    //   $database = "finder";

    //   // Create a connection
    //   $conn = mysqli_connect($servername, $username, $password, $database);
    //   // Die if connection was not successful
    //   if (!$conn){
    //       die("Sorry we failed to connect: ". mysqli_connect_error());
    //   }
    //   else{ 
    //     // Submit these to a database
    //     // Sql query to be executed 
    //     $sql = "INSERT INTO `find`(`location`,`property`,`price`,`bed`,`bath`) VALUES ('$location','$property','$price','$bed','$bath')";
    //     $result = mysqli_query($conn, $sql);
 
    //     if($result){
    //       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //       <strong>Success!</strong> you have subscribed successfully!
    //       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">×</span>
    //       </button>
    //     </div>';
    //     }
    //     else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    //         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //       <strong>Error!</strong> We are facing some technical issue and you have subscribed unsuccessfully! We regret the inconvinience caused!
    //       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">×</span>
    //       </button>
    //     </div>';
    //     }

    //   }

    // }
    
  ?>


<!-- popular_property  -->
<div class="popular_property">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-40 text-center">
                    <h3>Popular Properties</h3>
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
                            <span class="amount">From 1L</span>
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
                            <span class="amount">From 1L</span>
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
                            <span class="amount">From 1L</span>
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
                            <span class="amount">From 1L</span>
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
                    <a href="#" class="boxed-btn3-line">More Properties</a>
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
                                                <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200 Sqft</span>
                                                </li>
                                                <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span> </li>
                                                <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span> </li>
                                            </ul>
                                            <p>Esteem spirit temper too say adieus who direct esteem. It estee luckily
                                                or picture placing drawing. Apartments frequently or motionless on
                                                reasonable.</p>
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
                                                <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200 Sqft</span>
                                                </li>
                                                <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span> </li>
                                                <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span> </li>
                                            </ul>
                                            <p>Esteem spirit temper too say adieus who direct esteem. It estee luckily
                                                or picture placing drawing. Apartments frequently or motionless on
                                                reasonable.</p>
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
                                                <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200 Sqft</span>
                                                </li>
                                                <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span> </li>
                                                <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span> </li>
                                            </ul>
                                            <p>Esteem spirit temper too say adieus who direct esteem. It estee luckily
                                                or picture placing drawing. Apartments frequently or motionless on
                                                reasonable.</p>
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
                                                <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200 Sqft</span>
                                                </li>
                                                <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span> </li>
                                                <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span> </li>
                                            </ul>
                                            <p>Esteem spirit temper too say adieus who direct esteem. It estee luckily
                                                or picture placing drawing. Apartments frequently or motionless on
                                                reasonable.</p>
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
                                                <li> <img src="img/svg_icon/square.svg" alt=""> <span>1200 Sqft</span>
                                                </li>
                                                <li> <img src="img/svg_icon/bed.svg" alt=""> <span>2 Bed</span> </li>
                                                <li> <img src="img/svg_icon/bath.svg" alt=""> <span>2 Bath</span> </li>
                                            </ul>
                                            <p>Esteem spirit temper too say adieus who direct esteem. It estee luckily
                                                or picture placing drawing. Apartments frequently or motionless on
                                                reasonable.</p>
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
                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. <br>
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
                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. <br>
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
                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. <br>
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



<!-- footer start -->
<?php  include('include/foot.php');?>


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
        min: 1,
        max: 50,
        step: 1,
        values: [getQueryString('minval') ? getQueryString('minval') : 1, getQueryString('maxval') ?
            getQueryString('maxval') : 50
        ],

        slide: function (event, ui) {

            $('.ui-slider-handle:eq(0) .price-range-min').html(ui.values[0] + 'L');
            $('.ui-slider-handle:eq(1) .price-range-max').html(ui.values[1] + 'L');
            $('.price-range-both').html('<i>L' + ui.values[0] + ' - </i>L' + ui.values[1]);

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
        'L</span>');

    $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#slider').slider('values', 1) +
        'L</span>');
</script>
</body>

</html>