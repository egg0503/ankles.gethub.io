<?php
include('Linkmysql.php');
session_start();
$Cid=@$_GET['id'];
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>古著平台</title>

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="css/vendor.css">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="css/utility.css">

    <!--====== App ======-->
    <link rel="stylesheet" href="css/app.css">
</head>
<body class="config">
    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="images/preloader.png" alt=""></div>
    </div>

    <!--====== Main App ======-->
    <div id="app">

        <!--====== Main Header ======-->
        <header class="header--style-1 header--box-shadow">

            <!--====== Nav 1 ======-->
            <nav class="primary-nav primary-nav-wrapper--border">
                <div class="container">

                    <!--====== Primary Nav ======-->
                    <div class="primary-nav" style="height:80px">

                        <!--====== Main Logo ======-->

                        <a class="main-logo" href="index-in.php">

                            <img src="images/logo/logo-1.jpg" alt=""></a>
                        <!--====== End - Main Logo ======-->


                        <!--====== Search Form ======-->
                        <form class="main-form">

                            <label for="main-search"></label>

                            <input class="input-text input-text--border-radius input-text--style-1" type="text" id="main-search" placeholder="Search">

                            <button class="btn btn--icon fas fa-search main-search-button" type="submit"></button></form>
                        <!--====== End - Search Form ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation">

                            <button class="btn btn--icon toggle-button fas fa-cogs" type="button"></button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                    <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Account">

                                        <a><i class="far fa-user-circle"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li>

                                                <a href="signup.html"><i class="fas fa-user-plus u-s-m-r-6"></i>

                                                    <span>註冊</span></a></li>
                                            <li>

                                                <a href="signin.html"><i class="fas fa-lock u-s-m-r-6"></i>

                                                    <span>登入</span></a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <!-- <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Settings">

                                        <a><i class="fas fa-user-cog"></i></a> -->

                                        <!--====== Dropdown ======-->

                                        <!-- <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li class="has-dropdown has-dropdown--ul-right-100">

                                                <a>Language<i class="fas fa-angle-down u-s-m-l-6"></i></a> -->

                                                <!--====== Dropdown ======-->

                                                <!-- <span class="js-menu-toggle"></span>
                                                <ul style="width:120px">
                                                    <li>

                                                        <a class="u-c-brand">ENGLISH</a></li>
                                                    <li>

                                                        <a>ARABIC</a></li>
                                                    <li>

                                                        <a>FRANCAIS</a></li>
                                                    <li>

                                                        <a>ESPANOL</a></li>
                                                </ul> -->
                                                <!--====== End - Dropdown ======-->
                                            <!-- </li>
                                            <li class="has-dropdown has-dropdown--ul-right-100">

                                                <a>Currency<i class="fas fa-angle-down u-s-m-l-6"></i></a> -->

                                                <!--====== Dropdown ======-->

                                                <!-- <span class="js-menu-toggle"></span>
                                                <ul style="width:225px">
                                                    <li>

                                                        <a class="u-c-brand">$ - US DOLLAR</a></li>
                                                    <li>

                                                        <a>£ - BRITISH POUND STERLING</a></li>
                                                    <li>

                                                        <a>€ - EURO</a></li>
                                                </ul> -->
                                                <!--====== End - Dropdown ======-->
                                            <!-- </li>
                                        </ul> -->
                                        <!--====== End - Dropdown ======-->
                                    <!-- </li> -->
                                    <li data-tooltip="tooltip" data-placement="left" title="Contact">

                                        <a href="tel:+0900901904"><i class="fas fa-phone-volume"></i></a></li>
                                    <li data-tooltip="tooltip" data-placement="left" title="Mail">

                                        <a href="mailto:contact@domain.com"><i class="far fa-envelope"></i></a></li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                    </div>
                    <!--====== End - Primary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 1 ======-->


            <!--====== Nav 2 ======-->
            <nav class="secondary-nav-wrapper">
                <div class="container">

                    <!--====== Secondary Nav ======-->
                    <div class="secondary-nav">

                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation1">

                            <button class="btn btn--icon toggle-mega-text toggle-button" type="button">M</button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list">
                                    <li class="has-dropdown">

                                        <span class="mega-text">M</span>

                                        <!--====== Mega Menu ======-->

                                        <span class="js-menu-toggle"></span>
                                        <div class="mega-menu">
                                            <div class="mega-menu-wrap">
                                                <div class="mega-menu-list">
                                                    <ul>
                                                        <li class="js-active">

                                                            <a href="shop-side-version-2.php"><i class="fas fa-tv u-s-m-r-6"></i>

                                                                <span>精選商品</span></a>

                                                            <span class="js-menu-toggle js-toggle-mark"></span></li>
                                                        <li>

                                                            <a href="shop-side-version-2.php?id=1"><i class="fas fa-female u-s-m-r-6"></i>

                                                                <span>女裝</span></a>

                                                            <span class="js-menu-toggle"></span></li>
                                                        <li>

                                                            <a href="shop-side-version-2.php?id=2"><i class="fas fa-male u-s-m-r-6"></i>

                                                                <span>男裝</span></a>

                                                            <span class="js-menu-toggle"></span></li>
                                                        <li>

                                                            <a href="shop-side-version-2.php?id=3"><i class="fas fa-utensils u-s-m-r-6"></i>

                                                                <span>飾品</span></a>

                                                            <span class="js-menu-toggle"></span></li>
                                                        <!-- <li>

                                                            <a href="index.html"><i class="fas fa-couch u-s-m-r-6"></i>

                                                                <span>Furniture & Decor</span></a>

                                                            <span class="js-menu-toggle"></span></li>
                                                        <li>

                                                            <a href="index.html"><i class="fas fa-football-ball u-s-m-r-6"></i>

                                                                <span>Sports & Game</span></a>

                                                            <span class="js-menu-toggle"></span></li>
                                                        <li>

                                                            <a href="index.html"><i class="fas fa-heartbeat u-s-m-r-6"></i>

                                                                <span>Beauty & Health</span></a>

                                                            <span class="js-menu-toggle"></span></li> -->
                                                    </ul>
                                                </div>

                                                <!--====== Electronics ======-->
                                                <div class="mega-menu-content js-active">

                                                    <!--====== Mega Menu Row ======-->
                                                    <!-- <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">3D PRINTER & SUPPLIES</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">3d Printer</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">3d Printing Pen</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">3d Printing Accessories</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">3d Printer Module Board</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">HOME AUDIO & VIDEO</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">TV Boxes</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">TC Receiver & Accessories</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Display Dongle</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Home Theater System</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">MEDIA PLAYERS</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Earphones</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Mp3 Players</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Speakers & Radios</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Microphones</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">VIDEO GAME ACCESSORIES</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Nintendo Video Games Accessories</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Sony Video Games Accessories</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Xbox Video Games Accessories</a></li>
                                                            </ul>
                                                        </div>
                                                    </div> -->
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <!-- <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">SECURITY & PROTECTION</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Security Cameras</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Alarm System</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Security Gadgets</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">CCTV Security & Accessories</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">PHOTOGRAPHY & CAMERA</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Digital Cameras</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Sport Camera & Accessories</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Camera Accessories</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Lenses & Accessories</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">ARDUINO COMPATIBLE</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Raspberry Pi & Orange Pi</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Module Board</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Smart Robot</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Board Kits</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">DSLR Camera</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Nikon Cameras</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Canon Camera</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Sony Camera</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">DSLR Lenses</a></li>
                                                            </ul>
                                                        </div>
                                                    </div> -->
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <!-- <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">NECESSARY ACCESSORIES</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Flash Cards</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Memory Cards</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Flash Pins</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Compact Discs</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-9 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-0.jpg" alt=""></a></div>
                                                        </div>
                                                    </div> -->
                                                    <!--====== End - Mega Menu Row ======-->
                                                </div>
                                                <!--====== End - Electronics ======-->


                                                <!--====== Women ======-->
                                                <div class="mega-menu-content">

                                                    <!--====== Mega Menu Row ======-->
                                                    <!-- <div class="row">
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-1.jpg" alt=""></a></div>
                                                        </div>
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-2.jpg" alt=""></a></div>
                                                        </div>
                                                    </div> -->
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <!-- <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">HOT CATEGORIES</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Dresses</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Blouses & Shirts</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">T-shirts</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Rompers</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">INTIMATES</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Bras</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Brief Sets</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Bustiers & Corsets</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Panties</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">WEDDING & EVENTS</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Wedding Dresses</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Evening Dresses</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Prom Dresses</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Flower Dresses</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">BOTTOMS</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Skirts</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Shorts</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Leggings</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Jeans</a></li>
                                                            </ul>
                                                        </div>
                                                    </div> -->
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <!-- <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">OUTWEAR</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Blazers</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Basics Jackets</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Trench</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Leather & Suede</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">JACKETS</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Denim Jackets</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Trucker Jackets</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Windbreaker Jackets</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Leather Jackets</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">ACCESSORIES</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Tech Accessories</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Headwear</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Baseball Caps</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Belts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">OTHER ACCESSORIES</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Bags</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Wallets</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Watches</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Sunglasses</a></li>
                                                            </ul>
                                                        </div>
                                                    </div> -->
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <!-- <div class="row">
                                                        <div class="col-lg-9 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-3.jpg" alt=""></a></div>
                                                        </div>
                                                        <div class="col-lg-3 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-4.jpg" alt=""></a></div>
                                                        </div>
                                                    </div> -->
                                                    <!--====== End - Mega Menu Row ======-->
                                                </div>
                                                <!--====== End - Women ======-->


                                                <!--====== Men ======-->
                                                <div class="mega-menu-content">

                                                    <!--====== Mega Menu Row ======-->
                                                    <!-- <div class="row">
                                                        <div class="col-lg-4 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-5.jpg" alt=""></a></div>
                                                        </div>
                                                        <div class="col-lg-4 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-6.jpg" alt=""></a></div>
                                                        </div>
                                                        <div class="col-lg-4 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-7.jpg" alt=""></a></div>
                                                        </div>
                                                    </div> -->
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <!-- <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">HOT SALE</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">T-Shirts</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Tank Tops</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Polo</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">OUTWEAR</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Hoodies</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Trench</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Parkas</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Sweaters</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">BOTTOMS</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Casual Pants</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Cargo Pants</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Jeans</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Shorts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">UNDERWEAR</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Boxers</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Briefs</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Robes</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Socks</a></li>
                                                            </ul>
                                                        </div>
                                                    </div> -->
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <!-- <div class="row">
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">JACKETS</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Denim Jackets</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Trucker Jackets</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Windbreaker Jackets</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Leather Jackets</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">SUNGLASSES</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Pilot</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Wayfarer</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Square</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Round</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">ACCESSORIES</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Eyewear Frames</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Scarves</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Hats</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Belts</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <ul>
                                                                <li class="mega-list-title">

                                                                    <a href="shop-side-version-2.html">OTHER ACCESSORIES</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Bags</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Wallets</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Watches</a></li>
                                                                <li>

                                                                    <a href="shop-side-version-2.html">Tech Accessories</a></li>
                                                            </ul>
                                                        </div>
                                                    </div> -->
                                                    <!--====== End - Mega Menu Row ======-->
                                                    <br>

                                                    <!--====== Mega Menu Row ======-->
                                                    <!-- <div class="row">
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-8.jpg" alt=""></a></div>
                                                        </div>
                                                        <div class="col-lg-6 mega-image">
                                                            <div class="mega-banner">

                                                                <a class="u-d-block" href="shop-side-version-2.html">

                                                                    <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-9.jpg" alt=""></a></div>
                                                        </div>
                                                    </div> -->
                                                    <!--====== End - Mega Menu Row ======-->
                                                </div>
                                                <!--====== End - Men ======-->


                                                <!--====== No Sub Categories ======-->
                                                <div class="mega-menu-content">
                                                    <h5>No Categories</h5>
                                                </div>
                                                <!--====== End - No Sub Categories ======-->


                                                <!--====== No Sub Categories ======-->
                                                <div class="mega-menu-content">
                                                    <h5>No Categories</h5>
                                                </div>
                                                <!--====== End - No Sub Categories ======-->


                                                <!--====== No Sub Categories ======-->
                                                <div class="mega-menu-content">
                                                    <h5>No Categories</h5>
                                                </div>
                                                <!--====== End - No Sub Categories ======-->


                                                <!--====== No Sub Categories ======-->
                                                <div class="mega-menu-content">
                                                    <h5>No Categories</h5>
                                                </div>
                                                <!--====== End - No Sub Categories ======-->
                                            </div>
                                        </div>
                                        <!--====== End - Mega Menu ======-->
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation2">

                            <button class="btn btn--icon toggle-button fas fa-cog" type="button"></button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">
                                    <li>

                                        <a href="shop-side-version-2.php">新品上市</a></li>
                                    <li class="has-dropdown">

                                        <a>頁面搜索<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:170px">
                                        <li class="left-100">
                                            <a  href="index-in.php">主頁<i class="fas i-state-right u-s-m-l-6"></i></a>
                                            <!--====== Dropdown ======-->
                                            <!--====== End - Dropdown ======-->
                                            </li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a>帳戶<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li>

                                                        <a href="signin.html">登入/已經註冊</a></li>
                                                    <li>

                                                        <a href="signup.html">註冊</a></li>
                                                    <li>

                                                        <a href="lost-password.html">忘記密碼</a></li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <!-- <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a>Empty<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                ====== Dropdown ====== -->

                                                <!-- <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li>

                                                        <a href="empty-search.html">Empty Search</a></li>
                                                    <li>

                                                        <a href="empty-cart.html">Empty Cart</a></li>
                                                    <li>

                                                        <a href="empty-wishlist.html">Empty Wishlist</a></li>
                                                </ul> -->
                                                <!--====== End - Dropdown ======-->
                                            <!-- </li> -->
                                            <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a>產品詳情<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li>

                                                        <a href="product-detail.html">產品詳情</a></li>
                                                    <!-- <li>

                                                        <a href="product-detail-variable.html">Product Details Variable</a></li> -->
                                                    <li>

                                                        <a href="product-detail-affiliate.html">會員產品詳情</a></li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <!-- <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a>Shop Grid Layout<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a> -->

                                                <!--====== Dropdown ======-->
<!-- 
                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li>

                                                        <a href="shop-grid-left.html">Shop Grid Left Sidebar</a></li>
                                                    <li>

                                                        <a href="shop-grid-right.html">Shop Grid Right Sidebar</a></li>
                                                    <li>

                                                        <a href="shop-grid-full.html">Shop Grid Full Width</a></li>
                                                    <li>

                                                        <a href="shop-side-version-2.html">Shop Side Version 2</a></li>
                                                </ul> -->
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <!-- <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a>Shop List Layout<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a> -->

                                                <!--====== Dropdown ======-->

                                                <!-- <span class="js-menu-toggle"></span>
                                                <ul style="width:200px">
                                                    <li>

                                                        <a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                                                    <li>

                                                        <a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                                                    <li>

                                                        <a href="shop-list-full.html">Shop List Full Width</a></li>
                                                </ul> -->
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li>

                                                <a href="faq.html">常見問題</a></li>
                                            <li>

                                                <a href="about.html">關於我們</a></li>
                                            <li>

                                                <a href="contact.html">連結</a></li>
                                            <li>

                                                <a href="404.html">404</a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li class="has-dropdown">

                                        <a>社群<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:200px">
                                            <!-- <li>

                                                <a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li>

                                                <a href="blog-right-sidebar.html">Blog Right Sidebar</a></li> -->
                                            <li>

                                                <a href="blog-sidebar-none.html">部落格</a></li>
                                            <li>

                                                <a href="blog-masonry.html">社群紀錄</a></li>
                                            <li>

                                                <a href="blog-detail.html">文章連結</a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li>

                                        <a href="shop-side-version-2.php">市場均價</a></li>
                                    <li>

                                        <a href="shop-side-version-2.php">折扣卡</a></li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation3">

                            <button class="btn btn--icon toggle-button fas fa-shopping-bag toggle-button-shop" type="button"></button>

                            <span class="total-item-round">2</span>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                    <li>

                                        <a href="index-in.php"><i class="fas fa-home"></i></a></li>
                                    <li>

                                        <a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    <li class="has-dropdown">

                                        <a class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i>

                                            <span class="total-item-round">2</span></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <div class="mini-cart">

                                            <!--====== Mini Product Container ======-->
                                            <div class="mini-product-container gl-scroll u-s-m-b-15">

                                                <!--====== Card for mini cart ======-->
                                                <div class="card-mini-product">
                                                    <div class="mini-product">
                                                        <div class="mini-product__image-wrapper">

                                                            <a class="mini-product__link" href="product-detail.html">

                                                                <img class="u-img-fluid" src="images/product/electronic/product3.jpg" alt=""></a></div>
                                                        <div class="mini-product__info-wrapper">

                                                            <span class="mini-product__category">

                                                                <a href="shop-side-version-2.php">Electronics</a></span>

                                                            <span class="mini-product__name">

                                                                <a href="product-detail.html">Yellow Wireless Headphone</a></span>

                                                            <span class="mini-product__quantity">1 x</span>

                                                            <span class="mini-product__price">$8</span></div>
                                                    </div>

                                                    <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                </div>
                                                <!--====== End - Card for mini cart ======-->


                                                <!--====== Card for mini cart ======-->
                                                <div class="card-mini-product">
                                                    <div class="mini-product">
                                                        <div class="mini-product__image-wrapper">

                                                            <a class="mini-product__link" href="product-detail.html">

                                                                <img class="u-img-fluid" src="images/product/electronic/product18.jpg" alt=""></a></div>
                                                        <div class="mini-product__info-wrapper">

                                                            <span class="mini-product__category">

                                                                <a href="shop-side-version-2.php">Electronics</a></span>

                                                            <span class="mini-product__name">

                                                                <a href="product-detail.html">Nikon DSLR Camera 4k</a></span>

                                                            <span class="mini-product__quantity">1 x</span>

                                                            <span class="mini-product__price">$8</span></div>
                                                    </div>

                                                    <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                </div>
                                                <!--====== End - Card for mini cart ======-->


                                                <!--====== Card for mini cart ======-->
                                                <div class="card-mini-product">
                                                    <div class="mini-product">
                                                        <div class="mini-product__image-wrapper">

                                                            <a class="mini-product__link" href="product-detail.html">

                                                                <img class="u-img-fluid" src="images/product/women/product8.jpg" alt=""></a></div>
                                                        <div class="mini-product__info-wrapper">

                                                            <span class="mini-product__category">

                                                                <a href="shop-side-version-2.php">Women Clothing</a></span>

                                                            <span class="mini-product__name">

                                                                <a href="product-detail.html">New Dress D Nice Elegant</a></span>

                                                            <span class="mini-product__quantity">1 x</span>

                                                            <span class="mini-product__price">$8</span></div>
                                                    </div>

                                                    <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                </div>
                                                <!--====== End - Card for mini cart ======-->


                                                <!--====== Card for mini cart ======-->
                                                <div class="card-mini-product">
                                                    <div class="mini-product">
                                                        <div class="mini-product__image-wrapper">

                                                            <a class="mini-product__link" href="product-detail.html">

                                                                <img class="u-img-fluid" src="images/product/men/product8.jpg" alt=""></a></div>
                                                        <div class="mini-product__info-wrapper">

                                                            <span class="mini-product__category">

                                                                <a href="shop-side-version-2.php">Men Clothing</a></span>

                                                            <span class="mini-product__name">

                                                                <a href="product-detail.html">New Fashion D Nice Elegant</a></span>

                                                            <span class="mini-product__quantity">1 x</span>

                                                            <span class="mini-product__price">$8</span></div>
                                                    </div>

                                                    <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                </div>
                                                <!--====== End - Card for mini cart ======-->
                                            </div>
                                            <!--====== End - Mini Product Container ======-->


                                            <!--====== Mini Product Statistics ======-->
                                            <div class="mini-product-stat">
                                                <div class="mini-total">

                                                    <span class="subtotal-text">SUBTOTAL</span>

                                                    <span class="subtotal-value">$16</span></div>
                                                <div class="mini-action">

                                                    <a class="mini-link btn--e-brand-b-2" href="checkout.html">PROCEED TO CHECKOUT</a>

                                                    <a class="mini-link btn--e-transparent-secondary-b-2" href="cart.html">VIEW CART</a></div>
                                            </div>
                                            <!--====== End - Mini Product Statistics ======-->
                                        </div>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                    </div>
                    <!--====== End - Secondary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 2 ======-->
        </header>
        <!--====== End - Main Header ======-->


        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-y-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <div class="shop-w-master">
                                <h1 class="shop-w-master__heading u-s-m-b-30"><i class="fas fa-filter u-s-m-r-8"></i>

                                    <span>篩選</span></h1>
                                <div class="shop-w-master__sidebar">
                                    <div class="u-s-m-b-30">
                                        <div class="shop-w shop-w--style">
                                            <div class="shop-w__intro-wrap">
                                                <h1 class="shop-w__h">分類</h1>

                                                <span class="fas fa-minus shop-w__toggle" data-target="#s-category" data-toggle="collapse"></span>
                                            </div>
                                            <div class="shop-w__wrap collapse show" id="s-category">
                                                <ul class="shop-w__category-list gl-scroll">
                                                    <li class="has-list">

                                                        <!-- <a href="#">電子產品</a>

                                                        <span class="category-list__text u-s-m-l-6">(23)</span>

                                                        <span class="js-shop-category-span is-expanded fas fa-plus u-s-m-l-6"></span>
                                                        <ul style="display:block">
                                                            <li class="has-list">

                                                                <a href="#">3D Printer & Supplies</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">3d Printer</a></li>
                                                                    <li>

                                                                        <a href="#">3d Printing Pen</a></li>
                                                                    <li>

                                                                        <a href="#">3d Printing Accessories</a></li>
                                                                    <li>

                                                                        <a href="#">3d Printer Module Board</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">Home Audio & Video</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">TV Boxes</a></li>
                                                                    <li>

                                                                        <a href="#">TV Receiver & Accessories</a></li>
                                                                    <li>

                                                                        <a href="#">3d Printing Accessories</a></li>
                                                                    <li>

                                                                        <a href="#">3d Printer Module Board</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">Media Players</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">Earphones</a></li>
                                                                    <li>

                                                                        <a href="#">Mp3 Players</a></li>
                                                                    <li>

                                                                        <a href="#">Speakers & Radios</a></li>
                                                                    <li>

                                                                        <a href="#">Microphones</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">Video Game Accessories</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">Nintendo Video Games Accessories</a></li>
                                                                    <li>

                                                                        <a href="#">Sony Video Games Accessories</a></li>
                                                                    <li>

                                                                        <a href="#">Xbox Video Games Accessories</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">Security & Protection</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">Security Cameras</a></li>
                                                                    <li>

                                                                        <a href="#">Alarm System</a></li>
                                                                    <li>

                                                                        <a href="#">Security Gadgets</a></li>
                                                                    <li>

                                                                        <a href="#">CCTV Security Accessories</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">Home Audio & Video</a>

                                                                <span class="js-shop-category-span is-expanded fas fa-plus u-s-m-l-6"></span>
                                                                <ul style="display:block">
                                                                    <li>

                                                                        <a href="#">TV Boxes</a></li>
                                                                    <li>

                                                                        <a href="#">TV Receiver & Accessories</a></li>
                                                                    <li>

                                                                        <a href="#">3d Printing Accessories</a></li>
                                                                    <li>

                                                                        <a href="#">3d Printer Module Board</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">Photography & Camera</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">Digital Cameras</a></li>
                                                                    <li>

                                                                        <a href="#">Sport Camera & Accessories</a></li>
                                                                    <li>

                                                                        <a href="#">Camera Accessories</a></li>
                                                                    <li>

                                                                        <a href="#">Lenses & Accessories</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">Arduino Compatible</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">Raspberry Pi & Orange Pi</a></li>
                                                                    <li>

                                                                        <a href="#">Module Board</a></li>
                                                                    <li>

                                                                        <a href="#">Smart Robot</a></li>
                                                                    <li>

                                                                        <a href="#">Board Kits</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">DSLR Camera</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">Nikon Camera</a></li>
                                                                    <li>

                                                                        <a href="#">Canon Camera</a></li>
                                                                    <li>

                                                                        <a href="#">Sony Camera</a></li>
                                                                    <li>

                                                                        <a href="#">DSLR Lenses</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">Necessary Accessories</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">Flash Cards</a></li>
                                                                    <li>

                                                                        <a href="#">Memory Cards</a></li>
                                                                    <li>

                                                                        <a href="#">Flash Pins</a></li>
                                                                    <li>

                                                                        <a href="#">Compact Discs</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul> -->
                                                    </li>
                                                    <li class="has-list">

                                                        <a href="#">女裝</a>

                                                        <span class="category-list__text u-s-m-l-6">(5)</span>

                                                        <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                        <ul>
                                                            <li class="has-list">

                                                                <a href="#">熱門</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">洋裝</a></li>
                                                                    <li>

                                                                        <a href="#">襯衫</a></li>
                                                                    <li>

                                                                        <a href="#">T-shirts</a></li>
                                                                    <li>

                                                                        <a href="#">連身衣</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">內衣</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">上內衣</a></li>
                                                                    <li>

                                                                        <a href="#">套裝</a></li>
                                                                    <li>

                                                                        <a href="#">連身內衣</a></li>
                                                                    <li>

                                                                        <a href="#">內褲</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <!-- <a href="#">Wedding & Events</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">Wedding Dresses</a></li>
                                                                    <li>

                                                                        <a href="#">Evening Dresses</a></li>
                                                                    <li>

                                                                        <a href="#">Prom Dresses</a></li>
                                                                    <li>

                                                                        <a href="#">Flower Dresses</a></li>
                                                                </ul> -->
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">下衣褲</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">裙子</a></li>
                                                                    <li>

                                                                        <a href="#">短褲</a></li>
                                                                    <li>

                                                                        <a href="#">運動褲</a></li>
                                                                    <li>

                                                                        <a href="#">牛仔褲</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">走出去</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">西裝外套</a></li>
                                                                    <li>

                                                                        <a href="#">夾克</a></li>
                                                                    <li>

                                                                        <a href="#">大衣</a></li>
                                                                    <li>

                                                                        <a href="#">皮衣 & 皮鞋</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">夾克</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">牛仔外套</a></li>
                                                                    <li>

                                                                        <a href="#">內刷毛外套</a></li>
                                                                    <li>

                                                                        <a href="#">運動外套</a></li>
                                                                    <li>

                                                                        <a href="#">皮製外套</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">飾品</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <!-- <li>

                                                                        <a href="#">Tech Accessories</a></li> -->
                                                                    <li>

                                                                        <a href="#">帽子</a></li>
                                                                    <!-- <li>

                                                                        <a href="#">Baseball Caps</a></li> -->
                                                                    <li>

                                                                        <a href="#">皮帶</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">其他配件</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">包包</a></li>
                                                                    <li>

                                                                        <a href="#">錢包</a></li>
                                                                    <li>

                                                                        <a href="#">手錶</a></li>
                                                                    <li>

                                                                        <a href="#">眼鏡</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-list">

                                                        <a href="#">男裝</a>

                                                        <span class="category-list__text u-s-m-l-6">(5)</span>

                                                        <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                        <ul>
                                                            <li class="has-list">

                                                                <a href="#">熱門</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">T-Shirts</a></li>
                                                                    <li>

                                                                        <a href="#">背心</a></li>
                                                                    <li>

                                                                        <a href="#">Polo</a></li>
                                                                    <li>

                                                                        <a href="#">休閒上衣</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">走出去</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">帽Ｔ</a></li>
                                                                    <li>

                                                                        <a href="#">大衣</a></li>
                                                                    <li>

                                                                        <a href="#">刷毛外套</a></li>
                                                                    <li>

                                                                        <a href="#">毛衣</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">褲子</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">休閒褲</a></li>
                                                                    <li>

                                                                        <a href="#">工作褲</a></li>
                                                                    <li>

                                                                        <a href="#">牛仔褲</a></li>
                                                                    <li>

                                                                        <a href="#">短褲</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">私下的自己</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">四角</a></li>
                                                                    <li>

                                                                        <a href="#">緊身</a></li>
                                                                    <li>

                                                                        <a href="#">浴袍</a></li>
                                                                    <li>

                                                                        <a href="#">襪子</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">外套</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">牛仔外套</a></li>
                                                                    <li>

                                                                        <a href="#">內刷外套</a></li>
                                                                    <li>

                                                                        <a href="#">運動外套</a></li>
                                                                    <li>

                                                                        <a href="#">皮製外套</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">太陽眼鏡</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">機師墨鏡</a></li>
                                                                    <li>

                                                                        <a href="#">基本墨鏡</a></li>
                                                                    <li>

                                                                        <a href="#">方形墨鏡</a></li>
                                                                    <li>

                                                                        <a href="#">圓框墨鏡</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">配件</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">眼鏡</a></li>
                                                                    <li>

                                                                        <a href="#">圍巾</a></li>
                                                                    <li>

                                                                        <a href="#">帽子</a></li>
                                                                    <li>

                                                                        <a href="#">皮帶</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">其他配件</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>

                                                                        <a href="#">包包</a></li>
                                                                    <li>

                                                                        <a href="#">錢包</a></li>
                                                                    <li>

                                                                        <a href="#">手錶</a></li>
                                                                    <li>

                                                                        <a href="#">電子配件</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- <li>

                                                        <a href="#">Food & Supplies</a>

                                                        <span class="category-list__text u-s-m-l-6">(0)</span></li>
                                                    <li>

                                                        <a href="#">Furniture & Decor</a>

                                                        <span class="category-list__text u-s-m-l-6">(0)</span></li>
                                                    <li>

                                                        <a href="#">Sports & Game</a>

                                                        <span class="category-list__text u-s-m-l-6">(0)</span></li>
                                                    <li>

                                                        <a href="#">Beauty & Health</a>

                                                        <span class="category-list__text u-s-m-l-6">(0)</span></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-30">
                                        <div class="shop-w shop-w--style">
                                            <div class="shop-w__intro-wrap">
                                                <h1 class="shop-w__h">評分</h1>

                                                <span class="fas fa-minus shop-w__toggle" data-target="#s-rating" data-toggle="collapse"></span>
                                            </div>
                                            <div class="shop-w__wrap collapse show" id="s-rating">
                                                <ul class="shop-w__list gl-scroll">
                                                    <li>
                                                        <div class="rating__check">

                                                            <input type="checkbox">
                                                            <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                                        </div>

                                                        <span class="shop-w__total-text">(2)</span>
                                                    </li>
                                                    <li>
                                                        <div class="rating__check">

                                                            <input type="checkbox">
                                                            <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>

                                                                <span>& Up</span></div>
                                                        </div>

                                                        <span class="shop-w__total-text">(8)</span>
                                                    </li>
                                                    <li>
                                                        <div class="rating__check">

                                                            <input type="checkbox">
                                                            <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                                <span>& Up</span></div>
                                                        </div>

                                                        <span class="shop-w__total-text">(10)</span>
                                                    </li>
                                                    <li>
                                                        <div class="rating__check">

                                                            <input type="checkbox">
                                                            <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                                <span>& Up</span></div>
                                                        </div>

                                                        <span class="shop-w__total-text">(12)</span>
                                                    </li>
                                                    <li>
                                                        <div class="rating__check">

                                                            <input type="checkbox">
                                                            <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                                <span>& Up</span></div>
                                                        </div>

                                                        <span class="shop-w__total-text">(1)</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-30">
                                        <div class="shop-w shop-w--style">
                                            <div class="shop-w__intro-wrap">
                                                <h1 class="shop-w__h">運費</h1>

                                                <span class="fas fa-minus shop-w__toggle" data-target="#s-shipping" data-toggle="collapse"></span>
                                            </div>
                                            <div class="shop-w__wrap collapse show" id="s-shipping">
                                                <ul class="shop-w__list gl-scroll">
                                                    <li>

                                                        <!--====== Check Box ======-->
                                                        <div class="check-box">

                                                            <input type="checkbox" id="free-shipping">
                                                            <div class="check-box__state check-box__state--primary">

                                                                <label class="check-box__label" for="free-shipping">免運費</label></div>
                                                        </div>
                                                        <!--====== End - Check Box ======-->
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-30">
                                        <div class="shop-w shop-w--style">
                                            <div class="shop-w__intro-wrap">
                                                <h1 class="shop-w__h">價格</h1>

                                                <span class="fas fa-minus shop-w__toggle" data-target="#s-price" data-toggle="collapse"></span>
                                            </div>
                                            <div class="shop-w__wrap collapse show" id="s-price">
                                                <form class="shop-w__form-p">
                                                    <div class="shop-w__form-p-wrap">
                                                        <div>

                                                            <label for="price-min"></label>

                                                            <input class="input-text input-text--primary-style" type="text" id="price-min" placeholder="最低"></div>
                                                        <div>

                                                            <label for="price-max"></label>

                                                            <input class="input-text input-text--primary-style" type="text" id="price-max" placeholder="最高"></div>
                                                        <div>

                                                            <button class="btn btn--icon fas fa-angle-right btn--e-transparent-platinum-b-2" type="submit"></button></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-30">
                                        <!-- <div class="shop-w shop-w--style">
                                            <div class="shop-w__intro-wrap">
                                                <h1 class="shop-w__h">MANUFACTURER</h1>

                                                <span class="fas fa-minus shop-w__toggle" data-target="#s-manufacturer" data-toggle="collapse"></span>
                                            </div>
                                            <div class="shop-w__wrap collapse show" id="s-manufacturer">
                                                <ul class="shop-w__list-2">
                                                    <li>
                                                        <div class="list__content">

                                                            <input type="checkbox" checked>

                                                            <span>Calvin Klein</span></div>

                                                        <span class="shop-w__total-text">(23)</span>
                                                    </li>
                                                    <li>
                                                        <div class="list__content">

                                                            <input type="checkbox">

                                                            <span>Diesel</span></div>

                                                        <span class="shop-w__total-text">(2)</span>
                                                    </li>
                                                    <li>
                                                        <div class="list__content">

                                                            <input type="checkbox">

                                                            <span>Polo</span></div>

                                                        <span class="shop-w__total-text">(2)</span>
                                                    </li>
                                                    <li>
                                                        <div class="list__content">

                                                            <input type="checkbox">

                                                            <span>Tommy Hilfiger</span></div>

                                                        <span class="shop-w__total-text">(9)</span>
                                                    </li>
                                                    <li>
                                                        <div class="list__content">

                                                            <input type="checkbox">

                                                            <span>Ndoge</span></div>

                                                        <span class="shop-w__total-text">(3)</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="u-s-m-b-30">
                                        <div class="shop-w shop-w--style">
                                            <div class="shop-w__intro-wrap">
                                                <h1 class="shop-w__h">COLOR</h1>

                                                <span class="fas fa-minus shop-w__toggle" data-target="#s-color" data-toggle="collapse"></span>
                                            </div>
                                            <div class="shop-w__wrap collapse show" id="s-color">
                                                <ul class="shop-w__list gl-scroll">
                                                    <li>
                                                        <div class="color__check">

                                                            <input type="checkbox" id="jet">

                                                            <label class="color__check-label" for="jet" style="background-color: #333333"></label></div>

                                                        <span class="shop-w__total-text">(2)</span>
                                                    </li>
                                                    <li>
                                                        <div class="color__check">

                                                            <input type="checkbox" id="folly">

                                                            <label class="color__check-label" for="folly" style="background-color: #FF0055"></label></div>

                                                        <span class="shop-w__total-text">(4)</span>
                                                    </li>
                                                    <li>
                                                        <div class="color__check">

                                                            <input type="checkbox" id="yellow">

                                                            <label class="color__check-label" for="yellow" style="background-color: #FFFF00"></label></div>

                                                        <span class="shop-w__total-text">(6)</span>
                                                    </li>
                                                    <li>
                                                        <div class="color__check">

                                                            <input type="checkbox" id="granite-gray">

                                                            <label class="color__check-label" for="granite-gray" style="background-color: #605F5E"></label></div>

                                                        <span class="shop-w__total-text">(8)</span>
                                                    </li>
                                                    <li>
                                                        <div class="color__check">

                                                            <input type="checkbox" id="space-cadet">

                                                            <label class="color__check-label" for="space-cadet" style="background-color: #1D3461"></label></div>

                                                        <span class="shop-w__total-text">(10)</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-30">
                                        <div class="shop-w shop-w--style">
                                            <div class="shop-w__intro-wrap">
                                                <h1 class="shop-w__h">SIZE</h1>

                                                <span class="fas fa-minus collapsed shop-w__toggle" data-target="#s-size" data-toggle="collapse"></span>
                                            </div>
                                            <div class="shop-w__wrap collapse" id="s-size">
                                                <ul class="shop-w__list gl-scroll">
                                                    <li>

                                                        <!--====== Check Box ======-->
                                                        <div class="check-box">

                                                            <input type="checkbox" id="xs">
                                                            <div class="check-box__state check-box__state--primary">

                                                                <label class="check-box__label" for="xs">XS</label></div>
                                                        </div>
                                                        <!--====== End - Check Box ======-->

                                                        <span class="shop-w__total-text">(2)</span>
                                                    </li>
                                                    <li>

                                                        <!--====== Check Box ======-->
                                                        <div class="check-box">

                                                            <input type="checkbox" id="small">
                                                            <div class="check-box__state check-box__state--primary">

                                                                <label class="check-box__label" for="small">Small</label></div>
                                                        </div>
                                                        <!--====== End - Check Box ======-->

                                                        <span class="shop-w__total-text">(4)</span>
                                                    </li>
                                                    <li>

                                                        <!--====== Check Box ======-->
                                                        <div class="check-box">

                                                            <input type="checkbox" id="medium">
                                                            <div class="check-box__state check-box__state--primary">

                                                                <label class="check-box__label" for="medium">Medium</label></div>
                                                        </div>
                                                        <!--====== End - Check Box ======-->

                                                        <span class="shop-w__total-text">(6)</span>
                                                    </li>
                                                    <li>

                                                        <!--====== Check Box ======-->
                                                        <div class="check-box">

                                                            <input type="checkbox" id="large">
                                                            <div class="check-box__state check-box__state--primary">

                                                                <label class="check-box__label" for="large">Large</label></div>
                                                        </div>
                                                        <!--====== End - Check Box ======-->

                                                        <span class="shop-w__total-text">(8)</span>
                                                    </li>
                                                    <li>

                                                        <!--====== Check Box ======-->
                                                        <div class="check-box">

                                                            <input type="checkbox" id="xl">
                                                            <div class="check-box__state check-box__state--primary">

                                                                <label class="check-box__label" for="xl">XL</label></div>
                                                        </div>
                                                        <!--====== End - Check Box ======-->

                                                        <span class="shop-w__total-text">(10)</span>
                                                    </li>
                                                    <li>

                                                        <!--====== Check Box ======-->
                                                        <div class="check-box">

                                                            <input type="checkbox" id="xxl">
                                                            <div class="check-box__state check-box__state--primary">

                                                                <label class="check-box__label" for="xxl">XXL</label></div>
                                                        </div>
                                                        <!--====== End - Check Box ======-->

                                                        <span class="shop-w__total-text">(12)</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="shop-p">
                                <div class="shop-p__toolbar u-s-m-b-30">
                                    <div class="shop-p__meta-wrap u-s-m-b-60">

                                        <span class="shop-p__meta-text-1">找到18個結果</span>
                                        <div class="shop-p__meta-text-2">

                                            <span>相關搜尋:</span>

                                            <a class="gl-tag btn--e-brand-shadow" href="#">男裝上衣</a>

                                            <a class="gl-tag btn--e-brand-shadow" href="#">女裝外套</a>

                                            <a class="gl-tag btn--e-brand-shadow" href="#">牛仔褲</a></div>
                                    </div>
                                    <div class="shop-p__tool-style">
                                        <div class="tool-style__group u-s-m-b-8">

                                            <span class="js-shop-grid-target is-active">圖格</span>

                                            <span class="js-shop-list-target">清單</span></div>
                                        <form>
                                            <div class="tool-style__form-wrap">
                                                <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2">
                                                        <option>顯示商品數: 8</option>
                                                        <option selected>顯示商品數: 12</option>
                                                        <option>顯示商品數: 16</option>
                                                        <option>顯示商品數: 28</option>
                                                    </select></div>
                                                <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2">
                                                        <option selected>順序: 最新</option>
                                                        <option>順序: 較舊</option>
                                                        <option>順序: 最高銷售</option>
                                                        <option>順序: 最高評分</option>
                                                        <option>順序: 價格低到高</option>
                                                        <option>順序: 價格高到低</option>
                                                    </select></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="shop-p__collection">
                                    <div class="row is-grid-active">
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-m">
                                                <div class="product-m__thumb">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                        <img class="aspect__img" src="images/product/men/product6.jpg" alt=""></a>
                                                    <div class="product-m__quick-look">

                                                        <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                                    <div class="product-m__add-cart">

                                                        <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">加入購物車</a></div>
                                                </div>
                                                <div class="product-m__content">
                                                    <div class="product-m__category">

                                                        <a href="shop-side-version-2.php">
                                                        <?php
                                                            if($Cid==null)
                                                            {
                                                                $SelectSql = "SELECT Name FROM category Where id=2";
                                                                $result=$connect->query($SelectSql);
                                                                $rows= $result->fetch_assoc();
                                                                print_r ($rows['Name']);                                                   
                                                            }
                                                            else
                                                            {
                                                                $SelectSql = "SELECT Name FROM category Where id='$Cid'";
                                                                $result=$connect->query($SelectSql);
                                                                $rows= $result->fetch_assoc();
                                                                print_r ($rows['Name']);  
                                                            }  
                                                        ?>
                                                        </a></div>
                                                    <div class="product-m__name">

                                                        <a href="product-detail.html">
                                                        <?php
                                                            if($Cid==null)
                                                            {
                                                                $Select2Sql="SELECT Name FROM category_product JOIN products ON category_product.product_id=products.id WHERE category_product.category_id=2";
                                                                $result=$connect->query($Select2Sql);
                                                                $rows= $result->fetch_assoc();
                                                                print_r ($rows['Name']);                                                   
                                                            }
                                                            else
                                                            {
                                                               $Select2Sql="SELECT Name FROM category_product JOIN products ON category_product.product_id=products.id WHERE category_product.category_id='$Cid'";
                                                               $result=$connect->query($Select2Sql);
                                                               $rows = $result->fetch_assoc();
                                                               print_r($rows['Name']);
                                                            }
                                                            ;
                                                        ?>
                                                        </a></div>
                                                    <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span class="product-m__review">(23)</span></div>
                                                    <div class="product-m__price">$125.00</div>
                                                    <div class="product-m__hover">
                                                        <div class="product-m__preview-description">

                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                                        <div class="product-m__wishlist">

                                                            <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-m">
                                                <div class="product-m__thumb">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                        <img class="aspect__img" src="images/product/women/product5.jpg" alt=""></a>
                                                    <div class="product-m__quick-look">

                                                        <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                                    <div class="product-m__add-cart">

                                                        <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">加入購物車</a></div>
                                                </div>
                                                <div class="product-m__content">
                                                    <div class="product-m__category">

                                                        <a href="shop-side-version-2.php">女裝</a></div>
                                                    <div class="product-m__name">

                                                        <a href="product-detail.html">
                                                        New Fashion B Nice Elegant
                                                        </a></div>
                                                    <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span class="product-m__review">(23)</span></div>
                                                    <div class="product-m__price">$125.00</div>
                                                    <div class="product-m__hover">
                                                        <div class="product-m__preview-description">

                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                                        <div class="product-m__wishlist">

                                                            <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-m">
                                                <div class="product-m__thumb">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                        <img class="aspect__img" src="images/product/women/product6.jpg" alt=""></a>
                                                    <div class="product-m__quick-look">

                                                        <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                                    <div class="product-m__add-cart">

                                                        <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a></div>
                                                </div>
                                                <div class="product-m__content">
                                                    <div class="product-m__category">

                                                        <a href="shop-side-version-2.php">Women Clothing</a></div>
                                                    <div class="product-m__name">

                                                        <a href="product-detail.html">New Dress B Nice Elegant</a></div>
                                                    <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span class="product-m__review">(23)</span></div>
                                                    <div class="product-m__price">$125.00</div>
                                                    <div class="product-m__hover">
                                                        <div class="product-m__preview-description">

                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                                        <div class="product-m__wishlist">

                                                            <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-m">
                                                <div class="product-m__thumb">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                        <img class="aspect__img" src="images/product/women/product7.jpg" alt=""></a>
                                                    <div class="product-m__quick-look">

                                                        <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                                    <div class="product-m__add-cart">

                                                        <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a></div>
                                                </div>
                                                <div class="product-m__content">
                                                    <div class="product-m__category">

                                                        <a href="shop-side-version-2.php">Women Clothing</a></div>
                                                    <div class="product-m__name">

                                                        <a href="product-detail.html">New Dress C Nice Elegant</a></div>
                                                    <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span class="product-m__review">(23)</span></div>
                                                    <div class="product-m__price">$125.00</div>
                                                    <div class="product-m__hover">
                                                        <div class="product-m__preview-description">

                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                                        <div class="product-m__wishlist">

                                                            <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-m">
                                                <div class="product-m__thumb">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                        <img class="aspect__img" src="images/product/men/product9.jpg" alt=""></a>
                                                    <div class="product-m__quick-look">

                                                        <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                                    <div class="product-m__add-cart">

                                                        <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a></div>
                                                </div>
                                                <div class="product-m__content">
                                                    <div class="product-m__category">

                                                        <a href="shop-side-version-2.php">Men Clothing</a></div>
                                                    <div class="product-m__name">

                                                        <a href="product-detail.html">New Fashion E Nice Elegant</a></div>
                                                    <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span class="product-m__review">(23)</span></div>
                                                    <div class="product-m__price">$125.00</div>
                                                    <div class="product-m__hover">
                                                        <div class="product-m__preview-description">

                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                                        <div class="product-m__wishlist">

                                                            <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-m">
                                                <div class="product-m__thumb">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                        <img class="aspect__img" src="images/product/men/product10.jpg" alt=""></a>
                                                    <div class="product-m__quick-look">

                                                        <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                                    <div class="product-m__add-cart">

                                                        <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a></div>
                                                </div>
                                                <div class="product-m__content">
                                                    <div class="product-m__category">

                                                        <a href="shop-side-version-2.php">Men Clothing</a></div>
                                                    <div class="product-m__name">

                                                        <a href="product-detail.html">New Fashion F Nice Elegant</a></div>
                                                    <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span class="product-m__review">(23)</span></div>
                                                    <div class="product-m__price">$125.00</div>
                                                    <div class="product-m__hover">
                                                        <div class="product-m__preview-description">

                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                                        <div class="product-m__wishlist">

                                                            <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-m">
                                                <div class="product-m__thumb">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                        <img class="aspect__img" src="images/product/electronic/product2.jpg" alt=""></a>
                                                    <div class="product-m__quick-look">

                                                        <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                                    <div class="product-m__add-cart">

                                                        <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a></div>
                                                </div>
                                                <div class="product-m__content">
                                                    <div class="product-m__category">

                                                        <a href="shop-side-version-2.php">Electronics</a></div>
                                                    <div class="product-m__name">

                                                        <a href="product-detail.html">Red Wireless Headphone</a></div>
                                                    <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span class="product-m__review">(23)</span></div>
                                                    <div class="product-m__price">$125.00</div>
                                                    <div class="product-m__hover">
                                                        <div class="product-m__preview-description">

                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                                        <div class="product-m__wishlist">

                                                            <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-m">
                                                <div class="product-m__thumb">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                        <img class="aspect__img" src="images/product/electronic/product3.jpg" alt=""></a>
                                                    <div class="product-m__quick-look">

                                                        <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                                    <div class="product-m__add-cart">

                                                        <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a></div>
                                                </div>
                                                <div class="product-m__content">
                                                    <div class="product-m__category">

                                                        <a href="shop-side-version-2.html">Electronics</a></div>
                                                    <div class="product-m__name">

                                                        <a href="product-detail.html">Yellow Wireless Headphone</a></div>
                                                    <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span class="product-m__review">(23)</span></div>
                                                    <div class="product-m__price">$125.00

                                                        <span class="product-m__discount">$22.00</span></div>
                                                    <div class="product-m__hover">
                                                        <div class="product-m__preview-description">

                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                                        <div class="product-m__wishlist">

                                                            <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-m">
                                                <div class="product-m__thumb">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                        <img class="aspect__img" src="images/product/electronic/product4.jpg" alt=""></a>
                                                    <div class="product-m__quick-look">

                                                        <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                                    <div class="product-m__add-cart">

                                                        <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a></div>
                                                </div>
                                                <div class="product-m__content">
                                                    <div class="product-m__category">

                                                        <a href="shop-side-version-2.html">Electronics</a></div>
                                                    <div class="product-m__name">

                                                        <a href="product-detail.html">Hover Skateboard Scooter</a></div>
                                                    <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span class="product-m__review">(23)</span></div>
                                                    <div class="product-m__price">$125.00

                                                        <span class="product-m__discount">$22.00</span></div>
                                                    <div class="product-m__hover">
                                                        <div class="product-m__preview-description">

                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                                        <div class="product-m__wishlist">

                                                            <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-m">
                                                <div class="product-m__thumb">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                        <img class="aspect__img" src="images/product/electronic/product5.jpg" alt=""></a>
                                                    <div class="product-m__quick-look">

                                                        <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                                    <div class="product-m__add-cart">

                                                        <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a></div>
                                                </div>
                                                <div class="product-m__content">
                                                    <div class="product-m__category">

                                                        <a href="shop-side-version-2.html">Electronics</a></div>
                                                    <div class="product-m__name">

                                                        <a href="product-detail.html">Hover Red Skateboard Scooter</a></div>
                                                    <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span class="product-m__review">(23)</span></div>
                                                    <div class="product-m__price">$125.00

                                                        <span class="product-m__discount">$22.00</span></div>
                                                    <div class="product-m__hover">
                                                        <div class="product-m__preview-description">

                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                                        <div class="product-m__wishlist">

                                                            <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-m">
                                                <div class="product-m__thumb">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                        <img class="aspect__img" src="images/product/electronic/product6.jpg" alt=""></a>
                                                    <div class="product-m__quick-look">

                                                        <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                                    <div class="product-m__add-cart">

                                                        <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a></div>
                                                </div>
                                                <div class="product-m__content">
                                                    <div class="product-m__category">

                                                        <a href="shop-side-version-2.php">Electronics</a></div>
                                                    <div class="product-m__name">

                                                        <a href="product-detail.html">Canon DSLR Camera 4k</a></div>
                                                    <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span class="product-m__review">(23)</span></div>
                                                    <div class="product-m__price">$125.00

                                                        <span class="product-m__discount">$22.00</span></div>
                                                    <div class="product-m__hover">
                                                        <div class="product-m__preview-description">

                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                                        <div class="product-m__wishlist">

                                                            <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-m">
                                                <div class="product-m__thumb">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                        <img class="aspect__img" src="images/product/electronic/product7.jpg" alt=""></a>
                                                    <div class="product-m__quick-look">

                                                        <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                                    <div class="product-m__add-cart">

                                                        <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a></div>
                                                </div>
                                                <div class="product-m__content">
                                                    <div class="product-m__category">

                                                        <a href="shop-side-version-2.php">Electronics</a></div>
                                                    <div class="product-m__name">

                                                        <a href="product-detail.html">Nikon DSLR Camera 4k</a></div>
                                                    <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span class="product-m__review">(23)</span></div>
                                                    <div class="product-m__price">$125.00

                                                        <span class="product-m__discount">$22.00</span></div>
                                                    <div class="product-m__hover">
                                                        <div class="product-m__preview-description">

                                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                                        <div class="product-m__wishlist">

                                                            <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="u-s-p-y-60">

                                    <!--====== Pagination ======-->
                                    <ul class="shop-p__pagination">
                                        <li class="is-active">

                                            <a href="shop-side-version-2.php">1</a></li>
                                        <li>

                                            <a href="shop-side-version-2.php">2</a></li>
                                        <li>

                                            <a href="shop-side-version-2.php">3</a></li>
                                        <li>

                                            <a href="shop-side-version-2.php">4</a></li>
                                        <li>

                                            <a class="fas fa-angle-right" href="shop-side-version-2.php"></a></li>
                                    </ul>
                                    <!--====== End - Pagination ======-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section 1 ======-->
        </div>
        <!--====== End - App Content ======-->


        <!--====== Main Footer ======-->
        <footer>
            <div class="outer-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="outer-footer__content u-s-m-b-40">

                                <span class="outer-footer__content-title">聯絡我們</span>
                                <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>

                                    <span>台北市內湖區ＸＸ路87號</span></div>
                                <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>

                                    <span>02-2459-6853</span></div>
                                <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>

                                    <span>ANKLESCLOTHES@gmail.com</span></div>
                                <div class="outer-footer__social">
                                    <ul>
                                        <li>

                                            <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li>

                                            <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li>

                                            <a class="s-youtube--color-hover" href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li>

                                            <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li>

                                            <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">

                                        <span class="outer-footer__content-title">資訊</span>
                                        <div class="outer-footer__list-wrap">
                                            <ul>
                                                <li>

                                                    <a href="cart.html">購物車</a></li>
                                                <li>

                                                    <a href="dashboard.html">帳戶</a></li>
                                                <li>

                                                    <a href="shop-side-version-2.php">合作夥伴</a></li>
                                                <li>

                                                    <a href="dash-payment-option.html">付款資訊</a></li>
                                                <li>

                                                    <a href="shop-side-version-2.php">我的商城</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">
                                        <div class="outer-footer__list-wrap">

                                            <span class="outer-footer__content-title">關於我們</span>
                                            <ul>
                                                <li>

                                                    <a href="about.html">關於我們</a></li>
                                                <li>

                                                    <a href="contact.html">聯繫我們</a></li>
                                                <li>

                                                    <a href="index-in.php">網站地圖</a></li>
                                                <li>

                                                    <a href="dash-my-order.php">商品進度</a></li>
                                                <li>

                                                    <a href="shop-side-version-2.php">商城</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="outer-footer__content">

                                <span class="outer-footer__content-title">訂閱我們</span>
                                <form class="newsletter">
                                    <div class="u-s-m-b-15">
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="male" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="male">男</label></div>
                                        </div>
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="female" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="female">女</label></div>
                                        </div>
                                    </div>
                                    <div class="newsletter__group">

                                        <label for="newsletter"></label>

                                        <input class="input-text input-text--only-white" type="text" id="newsletter" placeholder="輸入電子郵件">

                                        <button class="btn btn--e-brand newsletter__btn" type="submit">訂閱</button></div>

                                    <span class="newsletter__text">訂閱我們以得到最新資訊</span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="lower-footer__content">
                                <div class="lower-footer__copyright">

                                    <span>Copyright © 2018</span>

                                    <a href="index-in.php">Reshop</a>

                                    <span>All Right Reserved</span></div>
                                <div class="lower-footer__payment">
                                    <ul>
                                        <li><i class="fab fa-cc-stripe"></i></li>
                                        <li><i class="fab fa-cc-paypal"></i></li>
                                        <li><i class="fab fa-cc-mastercard"></i></li>
                                        <li><i class="fab fa-cc-visa"></i></li>
                                        <li><i class="fab fa-cc-discover"></i></li>
                                        <li><i class="fab fa-cc-amex"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--====== Modal Section ======-->


        <!--====== Quick Look Modal ======-->
        <div class="modal fade" id="quick-look">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal--shadow">

                    <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">

                                <!--====== Product Breadcrumb ======-->
                                <div class="pd-breadcrumb u-s-m-b-30">
                                    <ul class="pd-breadcrumb__list">
                                        <li class="has-separator">

                                            <a href="index.hml">Home</a></li>
                                        <li class="has-separator">

                                            <a href="shop-side-version-2.php">Electronics</a></li>
                                        <li class="has-separator">

                                            <a href="shop-side-version-2.php">DSLR Cameras</a></li>
                                        <li class="is-marked">

                                            <a href="shop-side-version-2.php">Nikon Cameras</a></li>
                                    </ul>
                                </div>
                                <!--====== End - Product Breadcrumb ======-->


                                <!--====== Product Detail ======-->
                                <div class="pd u-s-m-b-30">
                                    <div class="pd-wrap">
                                        <div id="js-product-detail-modal">
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-1.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-2.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-3.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-4.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-5.jpg" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-t-15">
                                        <div id="js-product-detail-modal-thumbnail">
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-1.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-2.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-3.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-4.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-5.jpg" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Product Detail ======-->
                            </div>
                            <div class="col-lg-7">

                                <!--====== Product Right Side Details ======-->
                                <div class="pd-detail">
                                    <div>

                                        <span class="pd-detail__name">Nikon Camera 4k Lens Zoom Pro</span></div>
                                    <div>
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__price">$6.99</span>

                                            <span class="pd-detail__discount">(76% OFF)</span><del class="pd-detail__del">$28.97</del></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                            <span class="pd-detail__review u-s-m-l-4">

                                                <a href="product-detail.html">23 Reviews</a></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__stock">200 in stock</span>

                                            <span class="pd-detail__left">Only 2 left</span></div>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__preview-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>

                                                <a href="signin.html">Add to Wishlist</a>

                                                <span class="pd-detail__click-count">(222)</span></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i class="far fa-envelope u-s-m-r-6"></i>

                                                <a href="signin.html">Email me When the price drops</a>

                                                <span class="pd-detail__click-count">(20)</span></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <ul class="pd-social-list">
                                            <li>

                                                <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li>

                                                <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li>

                                                <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li>

                                                <a class="s-wa--color-hover" href="#"><i class="fab fa-whatsapp"></i></a></li>
                                            <li>

                                                <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <form class="pd-detail__form">
                                            <div class="pd-detail-inline-2">
                                                <div class="u-s-m-b-15">

                                                    <!--====== Input Counter ======-->
                                                    <div class="input-counter">

                                                        <span class="input-counter__minus fas fa-minus"></span>

                                                        <input class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000">

                                                        <span class="input-counter__plus fas fa-plus"></span></div>
                                                    <!--====== End - Input Counter ======-->
                                                </div>
                                                <div class="u-s-m-b-15">

                                                    <button class="btn btn--e-brand-b-2" type="submit">Add to Cart</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                        <ul class="pd-detail__policy-list">
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Buyer Protection.</span></li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Full Refund if you don't receive your order.</span></li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Returns accepted if product not as described.</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--====== End - Product Right Side Details ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Quick Look Modal ======-->


        <!--====== Add to Cart Modal ======-->
        <div class="modal fade" id="add-to-cart">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-radius modal-shadow">

                    <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="success u-s-m-b-30">
                                    <div class="success__text-wrap"><i class="fas fa-check"></i>

                                        <span>Item is added successfully!</span></div>
                                    <div class="success__img-wrap">

                                        <img class="u-img-fluid" src="images/product/electronic/product1.jpg" alt=""></div>
                                    <div class="success__info-wrap">

                                        <span class="success__name">Beats Bomb Wireless Headphone</span>

                                        <span class="success__quantity">Quantity: 1</span>

                                        <span class="success__price">$170.00</span></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="s-option">

                                    <span class="s-option__text">1 item (s) in your cart</span>
                                    <div class="s-option__link-box">

                                        <a class="s-option__link btn--e-white-brand-shadow" data-dismiss="modal">CONTINUE SHOPPING</a>

                                        <a class="s-option__link btn--e-white-brand-shadow" href="cart.html">檢查購物車</a>

                                        <a class="s-option__link btn--e-brand-shadow" href="checkout.html">PROCEED TO CHECKOUT</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Add to Cart Modal ======-->
        <!--====== End - Modal Section ======-->
    </div>
    <!--====== End - Main App ======-->


    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="js/vendor.js"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="js/jquery.shopnav.js"></script>

    <!--====== App ======-->
    <script src="js/app.js"></script>

    <!--====== Noscript ======-->
    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                            <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>
</body>
</html>