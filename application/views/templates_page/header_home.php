<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/'); ?>img/icon/pavicon.png">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Font awesome -->
    <link href="<?= base_url('assets/'); ?>css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link href="<?= base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet">
    <!-- Promo Slider CSS -->
    <link href="<?= base_url('assets/'); ?>css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">
    <!-- My Custom CSS -->
    <link href="<?= base_url('assets/'); ?>css/custom/product.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/custom/home.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Start Loading -->
    <div id="wpf-loader-two">
        <div class="wpf-loader-two-inner">
            <span>Loading</span>
        </div>
    </div>
    <!-- End Loading -->

    <!-- Start Header Section -->
    <header id="aa-header">
        <!-- Start Header Top  -->
        <div class="aa-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-top-area">
                            <!-- Start Header Top Left -->
                            <div class="aa-header-top-left">
                                <!-- Start Aplication -->
                                <div class="aplication hidden-xs">
                                    <p><a href="#"><img src="<?= base_url('assets/'); ?>img/icon/iphone.png">Download Lazymart App</a></p>
                                </div>
                                <!-- End Aplication -->

                                <!-- Start Language -->
                                <div class="aa-language">
                                    <div class="dropdown">
                                        <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <img src="<?= base_url('assets/'); ?>img/flag/indonesia.jpg" alt="indonesia flag">INDONESIA
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#"><img src="<?= base_url('assets/'); ?>img/flag/english.jpg" alt="">ENGLISH</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Language -->
                            </div>
                            <!-- End Header Top Left -->

                            <!-- Start Header Top Right -->
                            <div class="aa-header-top-right">
                                <ul class="aa-head-top-nav-right">
                                    <li><a href="#">Tentang Lazymart</a></li>
                                    <li class="hidden-xs"><a href="#">Promo</a></li>
                                    <li class="hidden-xs"><a href="#">Customer Care</a></li>
                                </ul>
                            </div>
                            <!-- End Header Top Right -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top  -->

        <!-- Start Header Bottom  -->
        <div class="aa-header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-bottom-area">
                            <!-- Logo  -->
                            <div class="aa-logo">
                                <!-- Text Based Logo -->
                                <a href="<?= base_url(''); ?>">
                                    <span><img src="<?= base_url('assets/'); ?>img/icon/logo.svg"></span>
                                    <p>lazy<strong>Mart</strong> <span>Belanja Jadi Mudah</span></p>
                                </a>
                            </div>
                            <!-- End logo  -->

                            <!-- Start Search Box -->
                            <div class="aa-search-box">
                                <form action="">
                                    <input class="input-search" type="text" name="" id="" placeholder="Indomie Goreng Jumbo">
                                    <button class="btn-search" type="submit"><span class="fa fa-search"></span></button>
                                </form>
                                <!-- Kategory -->
                                <ul class="navbar-nav">
                                    <li><a href="#">Sabun</span></a></li>
                                    <li><a href="#">Beras</span></a></li>
                                    <li><a href="#">Cemilan</span></a></li>
                                    <li><a href="#">Minuman</span></a></li>
                                    <li><a href="#">Bumbu Masak</span></a></li>
                                    <li><a href="#">Indomie</span></a></li>
                                    <li><a href="#">Kerupuk</span></a></li>
                                    <li><a href="#">Ice Cream</span></a></li>
                                </ul>
                            </div>
                            <!-- End Search Box -->

                            <!-- Start Cart Box -->
                            <div class="aa-cartbox2">
                                <a class="aa-cart-link2" href="#">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End Cart Box -->

                        <!-- Start Btn Login & Register -->
                        <div class="pembatas2"></div>

                        <div class="aa-login">
                            <a class="aa-login-btn" href="<?= base_url('login'); ?>">Masuk</a>
                        </div>
                        <div class="aa-register">
                            <a class="aa-register-btn" href="<?= base_url('register'); ?>">Daftar</a>
                        </div>
                        <!-- End Btn Login & Register -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Bottom  -->
    </header>
    <!-- End Header Section -->