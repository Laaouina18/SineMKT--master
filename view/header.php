<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta name="keyword" content="SineMKT">
    <meta name="description" content="acheter des emeubles">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- title of site -->
    <title>SineMKT</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="../assets/logo/favicon.png" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="../assets/css/linearicons.css">

    <!--animate.css-->
    <link rel="stylesheet" href="../assets/css/animate.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- bootsnav -->
    <link rel="stylesheet" href="../assets/css/bootsnav.css">

    <!--style.css-->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="../assets/css/responsive.css">



</head>

<body>
    <header id="home" class="welcome-hero">


        <!-- top-area Start -->
        <div class="top-area">
            <div class="header-area">
                <!-- Start Navigation -->
                <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"
                    data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

                    <!-- Start Top Search -->
                    <div class="top-search">
                        <div class="container">

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Search -->

                    <div class="container">
                        <!-- Start Atribute Navigation -->
                        <div class="attr-nav">
                            <ul>
                                <li>
                                    <?php
                                    if (isset($_SESSION["user"])) {
                                        ?>
                                        <a style="color:black" href="/logout">
                                            <img src="../public/assets/images/register.png" alt="" width="18px">
                                            logout
                                        </a>
                                    <?php
                                    } else {
                                        ?>
                                        <a style="color:black" href="/login">
                                            <img src="../public/assets/images/register.png" alt="" width="18px">
                                            login
                                        </a>
                                    <?php
                                    }
                                    ?>
                                </li>
                                <!--/.search-->
                                <li class="nav-setting">
                                    <a href="#"><span class="lnr lnr-cog"></span></a>
                                </li>
                                <!--/.search-->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="lnr lnr-cart"></span>
                                        <span class="badge badge-bg-1">2</span>
                                    </a>
                                    <ul class="dropdown-menu cart-list s-cate">
                                        <li class="single-cart-list">
                                            <a href="#" class="photo"><img
                                                    src="../assets/images/collection/arrivals1.png" class="cart-thumb"
                                                    alt="image" /></a>
                                            <div class="cart-list-txt">
                                                <h6><a href="#">arm <br> chair</a></h6>
                                                <p>1 x - <span class="price">$180.00</span></p>
                                            </div>
                                            <!--/.cart-list-txt-->
                                            <div class="cart-close">
                                                <span class="lnr lnr-cross"></span>
                                            </div>
                                            <!--/.cart-close-->
                                        </li>
                                        <!--/.single-cart-list -->
                                        <li class="single-cart-list">
                                            <a href="#" class="photo"><img
                                                    src="../assets/images/collection/arrivals2.png" class="cart-thumb"
                                                    alt="image" /></a>
                                            <div class="cart-list-txt">
                                                <h6><a href="#">single <br> armchair</a></h6>
                                                <p>1 x - <span class="price">$180.00</span></p>
                                            </div>
                                            <!--/.cart-list-txt-->
                                            <div class="cart-close">
                                                <span class="lnr lnr-cross"></span>
                                            </div>
                                            <!--/.cart-close-->
                                        </li>
                                        <!--/.single-cart-list -->
                                        <li class="single-cart-list">
                                            <a href="#" class="photo"><img
                                                    src="../assets/images/collection/arrivals3.png" class="cart-thumb"
                                                    alt="image" /></a>
                                            <div class="cart-list-txt">
                                                <h6><a href="#">wooden arn <br> chair</a></h6>
                                                <p>1 x - <span class="price">$180.00</span></p>
                                            </div>
                                            <!--/.cart-list-txt-->
                                            <div class="cart-close">
                                                <span class="lnr lnr-cross"></span>
                                            </div>
                                            <!--/.cart-close-->
                                        </li>
                                        <!--/.single-cart-list -->
                                        <li class="total">
                                            <span>Total: $0.00</span>
                                            <button class="btn-cart pull-right" onclick="window.location.href='#'">view
                                                cart</button>
                                        </li>
                                    </ul>
                                </li>
                                <!--/.dropdown-->
                            </ul>
                        </div>
                        <!--/.attr-nav-->
                        <!-- End Atribute Navigation -->

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a href="home.html">
                                <div class="logo">
                                    <img class="image-logo" src="../assets/logo/logo.png" alt="logo" style="margin-right:13rem;">

                                </div>
                            </a>
                        </div>
                        <!--/.navbar-header-->
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                                <li><a href="/home">home</a></li>
                                <li><a href="/new">New Arrivals</a></li>
                                <li><a href="/fautred">Feautred Products</a></li>
                                <li><a href="/blog">blog</a></li>
                                <li><a href="/contact">contact</a></li>
                                <?php if (isset($_SESSION["user"])) {
                                    echo '
                                <li><a href="/gestion-produits">gestion</a></li>
                              ';
                                } ?>
                            </ul>
                            <!--/.nav -->
                        </div>

                
                   
                </nav>
                </div>
                    </div>
                    <div class="clearfix"></div>


    </header>