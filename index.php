<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="homepage.png"> -->
    <title>Home</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="CSS/style.css" rel="stylesheet">
</head>

<body class="home">

    <!--header starts-->
    <header id="header" class="header-scroll top-header headrom">
        <!-- .navbar -->
        <nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                <a>hi<a>
                <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/food-picky-logo.png" alt=""> </a>
               
                <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="restaurants.php"><i class="fa fa-shopping-cart"></i> Cart<span class="sr-only"></span></a> </li>

                        <?php
                        if (empty($_SESSION["user_id"])) // if user is not login
                        {
                            echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Sign Up</a> </li>';
                        } else { //if user is login
                            echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Your Orders</a> </li>';
                            echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
                        }

                        ?>
                    </ul>
                    
                </div>
                
            </div>
            
        </nav>
        <!-- /.navbar -->
    </header>
    <!-- banner part starts -->
    <section class="hero bg-image" data-image-src="images/img/bg.jpg">
        <div class="hero-inner">
            <div class="container text-center hero-text font-white">
                <h1>Choose it & Enjoy your meals! </h1>
                <h5 class="font-white space-xs">Find popular restaurants, dishes, and coupons</h5>
                <div class="banner-form">
                    <form class="form-inline">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputAmount">I would like to eat....</label>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="exampleInputAmount" placeholder="I would like to eat....">
                            </div>
                        </div>
                        <button onclick="location.href='restaurants.php'" type="button" class="btn theme-btn btn-lg">Search dishes</button>
                    </form>
                </div>

                <div class="steps">
                    <div class="step-item step1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 120.79 122.88" width="512" height="512">
                            <g fill="#FFF">
                                <path d="M103.87,44.5h-48H43.39l1.01,4.9c18.68,1.25,32.45,9.27,39.21,17.08c2.6,3,4.42,6.21,5.37,9.34 c1.39,4.58,1.05,9.04-1.13,12.96c-0.28,0.51-0.59,1-0.92,1.48c0.41,0.88,0.72,1.76,0.97,2.61c0.08,0.23,0.16,0.47,0.22,0.71l0.01,0 c0.32,1.13,0.48,2.23,0.48,3.32c0,0.38-0.02,0.26-0.04,0.59l0.01,0.27h0.03c0-0.18,0-0.29,0,0c0,0.28-0.01,0.57-0.03,0.86h15.23 l12.55-54.1H103.87L103.87,44.5L103.87,44.5z M3.19,108.88c23.89-0.04,47.77-0.07,71.66,0c1.42,0.01,2.59,1.17,2.59,2.59 c0,3.86-1.62,11.42-10.35,11.42c-18.71,0-37.42,0-56.13,0c-8.73,0-10.35-7.55-10.35-11.42C0.6,110.04,1.77,108.88,3.19,108.88 L3.19,108.88L3.19,108.88z M56.69,69.07c2.2,0,3.98,1.78,3.98,3.98c0,2.2-1.78,3.98-3.98,3.98c-2.2,0-3.98-1.78-3.98-3.98 C52.71,70.85,54.49,69.07,56.69,69.07L56.69,69.07L56.69,69.07z M21.98,69.35c2.2,0,3.98,1.78,3.98,3.98c0,2.2-1.78,3.98-3.98,3.98 c-2.2,0-3.98-1.78-3.98-3.98S19.78,69.35,21.98,69.35L21.98,69.35L21.98,69.35z M39.19,65.55c2.2,0,3.98,1.78,3.98,3.98 c0,2.2-1.78,3.98-3.98,3.98c-2.2,0-3.98-1.78-3.98-3.98C35.22,67.33,37,65.55,39.19,65.55L39.19,65.55L39.19,65.55z M71.47,86.14 H7.41c-4.07,0-7.41-3.33-7.41-7.4l0,0c0-10.54,21.01-18.2,38.64-18.38C73.35,60.01,88.92,86.14,71.47,86.14L71.47,86.14 L71.47,86.14z M77.27,96.29c0.11,0.19,0.17,0.38,0.17,0.6c0,0.13-0.01,0.28-0.01,0.43c0.01,0.15,0.01,0.29,0.01,0.43 c0,0.21-0.06,0.41-0.17,0.6c-0.59,2.57-2.95,5.93-10.18,5.93c-18.71,0-37.42,0-56.13,0c-7.24,0-9.59-3.36-10.18-5.93 c-0.11-0.19-0.17-0.38-0.17-0.6c0-0.13,0.01-0.28,0.01-0.43c-0.01-0.15-0.01-0.29-0.01-0.43c0-0.21,0.06-0.41,0.17-0.6 c0.59-2.57,2.94-5.93,10.18-5.93h29.07l10.72,11.07l10.65-11.07h5.7C74.33,90.37,76.68,93.73,77.27,96.29L77.27,96.29L77.27,96.29z M88.57,97.75c0.02,0.87,0.03,0.32,0.03,0H88.57L88.57,97.75z M43.48,22.3h31.41l3.42-15.2c0.99-3.67,3.87-5.72,8.95-7.1 c4.31,0,8.62,0,12.92,0c1.97,0.39,3.11,1.76,3.41,4.12c0,1.33,0,2.65,0,3.98c-0.65,2.17-1.96,3.05-3.98,3.41H88.83l-2.29,10.79 h29.72c2.5,0,4.53,2.04,4.53,4.53v5.15c0,2.5-2.04,4.53-4.53,4.53H43.48c-2.5,0-4.53-2.04-4.53-4.53v-5.15 C38.95,24.34,40.99,22.3,43.48,22.3L43.48,22.3L43.48,22.3z M86.38,121.89h5.41h3.12c3.64-0.78,6.17-2.5,7.24-6.11l0.82-8.58H87.92 c0.45,1.35,0.69,2.78,0.69,4.27C88.61,114.23,88.1,118.1,86.38,121.89L86.38,121.89z" />
                            </g>
                        </svg>
                        <h4><span>1. </span>Choose food</h4>
                    </div>
                    <!-- end:Step -->

                    <div class="step-item step2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 380.721 380.721">
                            <g fill="#FFF">
                                <path d="M58.727 281.236c.32-5.217.657-10.457 1.319-15.709 1.261-12.525 3.974-25.05 6.733-37.296a543.51 543.51 0 0 1 5.449-17.997c2.463-5.729 4.868-11.433 7.25-17.01 5.438-10.898 11.491-21.07 18.724-29.593 1.737-2.19 3.427-4.328 5.095-6.46 1.912-1.894 3.805-3.747 5.676-5.588 3.863-3.509 7.221-7.273 11.107-10.091 7.686-5.711 14.529-11.137 21.477-14.506 6.698-3.724 12.455-6.982 17.631-8.812 10.125-4.084 15.883-6.141 15.883-6.141s-4.915 3.893-13.502 10.207c-4.449 2.917-9.114 7.488-14.721 12.147-5.803 4.461-11.107 10.84-17.358 16.992-3.149 3.114-5.588 7.064-8.551 10.684-1.452 1.83-2.928 3.712-4.427 5.6a1225.858 1225.858 0 0 1-3.84 6.286c-5.537 8.208-9.673 17.858-13.995 27.664-1.748 5.1-3.566 10.283-5.391 15.534a371.593 371.593 0 0 1-4.16 16.476c-2.266 11.271-4.502 22.761-5.438 34.612-.68 4.287-1.022 8.633-1.383 12.979 94 .023 166.775.069 268.589.069.337-4.462.534-8.97.534-13.536 0-85.746-62.509-156.352-142.875-165.705 5.17-4.869 8.436-11.758 8.436-19.433-.023-14.692-11.921-26.612-26.631-26.612-14.715 0-26.652 11.92-26.652 26.642 0 7.668 3.265 14.558 8.464 19.426-80.396 9.353-142.869 79.96-142.869 165.706 0 4.543.168 9.027.5 13.467 9.935-.002 19.526-.002 28.926-.002zM0 291.135h380.721v33.59H0z" />
                            </g>
                        </svg>
                        <h4><span>2. </span>Order Food</h4>
                    </div>
                    <!-- end:Step -->

                    <div class="step-item step3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewbox="0 0 122.88 106.29">
                            <g fill="#FFF">
                                <path d="M117.24,5.64a8.63,8.63,0,0,1,0,12.23,8.84,8.84,0,0,1-2.38,1.69,9.24,9.24,0,0,1-1.57.57,49.83,49.83,0,0,1,3.35,5.18A48.67,48.67,0,0,1,119.76,32v0a47.56,47.56,0,0,1,1.47,29.3c-2.43,9.19-7.7,18.52-16.47,27.3a2.45,2.45,0,0,1-1.76.73h0a2.5,2.5,0,0,1-1.66-.63l-.11-.09-67-67a2.46,2.46,0,0,1-.74-1.77v-.07a2.53,2.53,0,0,1,.73-1.71,1,1,0,0,1,.18-.15C43.19,9.25,52.49,4,61.64,1.62A48,48,0,0,1,97.57,6.24a49.25,49.25,0,0,1,5.18,3.35A8.94,8.94,0,0,1,103.32,8,8.53,8.53,0,0,1,105,5.63a8.64,8.64,0,0,1,12.23,0ZM55.37,49.28a1.3,1.3,0,0,1,.86-.48,1.31,1.31,0,0,1,1,.28,1.28,1.28,0,0,1,.48.86,1.31,1.31,0,0,1-.27,1c-2.62,3.29,3,6.83-1.24,12h0a1.3,1.3,0,0,1-1.83.18h0a1.31,1.31,0,0,1-.18-1.82c3.23-3.94-2.55-7.22,1.22-12ZM79.25,95.34l-.7.69h36.8a.74.74,0,0,1,.74.74v8.78a.74.74,0,0,1-.74.74H.74a.74.74,0,0,1-.74-.74V96.77A.74.74,0,0,1,.74,96H20.62L20,95.34h-.23a4.5,4.5,0,0,1-3.15-1.58,5.07,5.07,0,0,1-1.22-3.31c0-.1,0-.21,0-.32a9.24,9.24,0,0,1,.31-1.87A5.49,5.49,0,0,1,18,85a6,6,0,0,1,3.67-.86,8.83,8.83,0,0,1,1.57.25,36.19,36.19,0,0,1,6.56-10.34,28.3,28.3,0,0,1,9.36-6.79,25.29,25.29,0,0,1,15.06-1.74,26,26,0,0,1,5,1.46,29.47,29.47,0,0,1,10,6.77,37.74,37.74,0,0,1,7.22,10.57,6.57,6.57,0,0,1,3.4-.14,4.47,4.47,0,0,1,2.65,1.91,7.07,7.07,0,0,1,1,4.89,5.93,5.93,0,0,1-2.28,4.09,1.29,1.29,0,0,1-.35.18,1.25,1.25,0,0,1-.32,0h-1.2Zm-5.45-10a35.14,35.14,0,0,0-6.62-9.64,26.62,26.62,0,0,0-9-6.11,24.07,24.07,0,0,0-4.45-1.32,23.36,23.36,0,0,0-4.56-.4,22.4,22.4,0,0,0-4.52.53,23.16,23.16,0,0,0-4.36,1.43,25.48,25.48,0,0,0-8.37,6,33.06,33.06,0,0,0-5.95,9.23l.27.15.54.32a8.18,8.18,0,0,0,2.62,1.18,2.84,2.84,0,0,0,2.58-1,7.36,7.36,0,0,1,1.76-1.38,4.53,4.53,0,0,1,2.07-.55,5.47,5.47,0,0,1,2.26.49,12.7,12.7,0,0,1,2.63,1.63,3.79,3.79,0,0,0,1,.51,5,5,0,0,0,1.22.22,4,4,0,0,0,1.1-.11,2.25,2.25,0,0,0,.81-.38c.39-.31.79-.61,1.19-.88a11.74,11.74,0,0,1,1.27-.75A7.36,7.36,0,0,1,48.7,84a5.34,5.34,0,0,1,1.55-.16A5.08,5.08,0,0,1,54.35,86l0,.06a2.34,2.34,0,0,0,1.9,1.08,4.23,4.23,0,0,0,3-1.5h0a6.28,6.28,0,0,1,3.16-1.93c1.3-.23,3,.14,5.4,1.69a5.3,5.3,0,0,0,3.71,1.09,5.23,5.23,0,0,0,2.24-1.16Zm-30.87-36a1.31,1.31,0,0,1,.85-.51h0a1.27,1.27,0,0,1,.93.24,1.29,1.29,0,0,1,.52.85v0a1.28,1.28,0,0,1-.24.93c-2.54,3.47,2.23,6.87-1.19,11.94a1.31,1.31,0,0,1-.83.54,1.25,1.25,0,0,1-1-.19,1.3,1.3,0,0,1-.35-1.81c2.76-4.08-2.4-7,1.25-12Zm-.46,22.73a1.28,1.28,0,0,1,.9-.41,1.3,1.3,0,0,1,1,2.18l-3.55,3.81a1.3,1.3,0,0,1-1.9-1.77l3.55-3.81Zm12.85,1.77a1.28,1.28,0,0,1-.35-.93,1.3,1.3,0,0,1,.41-.91,1.33,1.33,0,0,1,.93-.34,1.3,1.3,0,0,1,.91.41l3.54,3.81a1.32,1.32,0,0,1,.35.93A1.3,1.3,0,0,1,59.77,78a1.3,1.3,0,0,1-.91-.41l-3.54-3.81Zm-6.9,0v0a1.25,1.25,0,0,1,.38-.87,1.28,1.28,0,0,1,.92-.37h0a1.25,1.25,0,0,1,.87.38,1.28,1.28,0,0,1,.37.92l0,4.51a1.3,1.3,0,0,1-1.3,1.25h0a1.3,1.3,0,0,1-1.25-1.3l0-4.48Zm27,13.74a7.68,7.68,0,0,1-3.49,1.74c-1.43.22-3.18-.12-5.52-1.59-3.13-2-4.12-1.08-5.21-.07l0,0a10,10,0,0,1-1.91,1.5,5.83,5.83,0,0,1-2.92.72,4.56,4.56,0,0,1-2.52-.65,6.39,6.39,0,0,1-1.48-1.4l0,0a4.49,4.49,0,0,0-.83-.8,2.48,2.48,0,0,0-1.31-.41,2.8,2.8,0,0,0-.81.09,4.26,4.26,0,0,0-.85.33,8.38,8.38,0,0,0-1,.58c-.33.23-.67.48-1,.75a5,5,0,0,1-1.68.84,6.85,6.85,0,0,1-2,.23,7.36,7.36,0,0,1-2-.38A6.1,6.1,0,0,1,39,88.08a10.25,10.25,0,0,0-1.88-1.21,3.06,3.06,0,0,0-1.3-.34,1.87,1.87,0,0,0-.91.29,5.09,5.09,0,0,0-1,.82A7.76,7.76,0,0,1,32.21,89a4.77,4.77,0,0,1-1.62.59,5.32,5.32,0,0,1-3-.29,18.37,18.37,0,0,1-2.72-1.39,7.92,7.92,0,0,0-3.38-1.15,3.65,3.65,0,0,0-1.71.26,2.68,2.68,0,0,0-1.21,1.11A5,5,0,0,0,18,90.28a2.14,2.14,0,0,0,2.08,2.46H79.91a4,4,0,0,0,1-2.4,4.28,4.28,0,0,0-.58-2.77,2.17,2.17,0,0,0-1.83-.94,6.55,6.55,0,0,0-3.08.92ZM49.16,49.33a1.29,1.29,0,0,1,.85-.52,1.28,1.28,0,0,1,1.48,1.08,1.25,1.25,0,0,1-.23,1C48.4,54.8,54,57.63,50,62.86a1.29,1.29,0,0,1-.86.49,1.26,1.26,0,0,1-1-.25,1.35,1.35,0,0,1-.5-.86,1.31,1.31,0,0,1,.26-1c3-3.94-2.66-6.63,1.2-12ZM39.61,19.9,103,83.27c7.22-7.74,11.56-15.86,13.56-23.81a42.67,42.67,0,0,0-1.45-25.71v0a44.11,44.11,0,0,0-4.24-8.33,45.87,45.87,0,0,0-6-7.36A44.76,44.76,0,0,0,89.13,7.79,42.67,42.67,0,0,0,63.42,6.34c-8,2-16.07,6.34-23.81,13.56Zm17.93,2a2.55,2.55,0,0,1-1.87.16A2.51,2.51,0,0,1,54,18.93a2.54,2.54,0,0,1,1.22-1.48,38.4,38.4,0,0,1,8-3.13,33,33,0,0,1,8.08-1.08,34.28,34.28,0,0,1,8,.88,42,42,0,0,1,8,2.72,2.5,2.5,0,0,1,1.25,3.31l0,0a2.5,2.5,0,0,1-1.37,1.27,2.56,2.56,0,0,1-1.92-.06h0a36.66,36.66,0,0,0-7-2.38,29.22,29.22,0,0,0-6.93-.77,28.19,28.19,0,0,0-6.89.92,32.51,32.51,0,0,0-6.93,2.72l0,0Z" />
                        </svg>
                        <h4><span>3. </span>Get it</h4>
                    </div>
                    <!-- end:Step -->
                </div>

                <!-- end:Steps -->
            </div>
        </div>
        <!--end:Hero inner -->
    </section>
    <!-- banner part ends -->



    <!-- Popular block starts -->
    <section class="popular">
        <div class="container">
            <div class="title text-xs-center m-b-30">
                <h2>Popular Dishes of this Week</h2>
                <p class="lead">We’ve got something for everyone :)</p>
            </div>
            <div class="row">
                <?php
                // fetch records from database to display popular first 3 dishes from table
                $query_res = mysqli_query($db, "select * from food LIMIT 3");//LIMIT 3
                while ($r = mysqli_fetch_array($query_res)) {

                    echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
														<div class="food-item-wrap">
															<div class="figure-wrap bg-image" data-image-src="admin/Res_img/dishes/' . $r['img'] . '">
																<div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
																<div class="review pull-right"><a href="#">198 reviews</a> </div>
															</div>
															<div class="content">
																<h5><a href="dishes.php?res_id=' . $r['c_id'] . '">' . $r['title'] . '</a></h5>
																<div class="product-name">' . $r['slogan'] . '</div>
																<div class="price-btn-block"> <span class="price">&#8377;' . $r['price'] . '</span> <a href="dishes.php?res_id=' . $r['c_id'] . '" class="btn theme-btn-dash pull-right">Order Now</a> </div>
															</div>

														</div>
												</div>';
                }
                ?>
            </div>
        </div>
    </section>


    <!-- Popular block ends -->

      <!-- Featured restaurants starts -->
      <section class="featured-restaurants">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="title-block pull-left">
                        <h4>Categories</h4>
                    </div>
                </div>
                <div class="col-sm-8">
                    <!-- restaurants filter nav starts -->
                    <div class="restaurants-filter pull-right">
                        <nav class="primary pull-left">
                            <ul>
                                <li><a href="#" class="selected" data-filter="*">all</a> </li>
                                <?php
                                // display categories here
                                $res = mysqli_query($db, "select * from food_category");
                                while ($row = mysqli_fetch_array($res)) {
                                    echo '<li><a href="#" data-filter=".' . $row['c_name'] . '"> ' . $row['c_name'] . '</a> </li>';
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                    <!-- restaurants filter nav ends -->
                </div>
            </div>
            <!-- restaurants listing starts -->
            <div class="row">
                <div class="restaurant-listing">
                    <?php   //fetching records from table and filter using html data-filter tag --> --> -->
                    $food = mysqli_query($db, "select * from food");
                    while ($rows = mysqli_fetch_array($food)) {
                        // fetch records from res_category table according to catgory ID
                        $query = mysqli_query($db, "select * from food_category where c_id='" . $rows['c_id'] . "' ");
                        $rowss = mysqli_fetch_array($query);


                        echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item all ' . $rowss['c_name'] . '">
                        <div class="food-item-wrap">
                            <div class="figure-wrap bg-image" data-image-src="admin/Res_img/dishes/' . $rows['img'] . '">
                            </div>
                            <div class="content">
                                <h5><a href="dishes.php?res_id=' . $rows['c_id'] . '">' . $rows['title'] . '</a></h5>
                                <div class="product-name">' . $rows['slogan'] . '</div>
                                <div class="price-btn-block "> 
                                    <span class="price">&#8377;' . $rows['price'] . '</span> <br/>
                                    <div class="text-center">  
                                        <a href="dishes.php?res_id=' . $rows['c_id'] . '" class="btn btn-primary btn-lg btn-outline-primary text-center"><i class="fa fa-eye"></i> View</a>
                                        <!--<button class="btn btn-primary btn-sm btn-outline-primary view_prod btn-block" data-id=""><i class="fa fa-eye"></i> View</button> -->
                                    </div>
                                </div>
                            </div>

                        </div>
                </div>';
                    }
                    ?>
                </div>
            </div>
            <!-- restaurants listing ends -->
        </div>
    </section>
    <!-- end:Restaurant listing -->
   
    <!-- start: FOOTER -->
    <?php include('footer.php'); ?>
    <!-- end:Footer -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>