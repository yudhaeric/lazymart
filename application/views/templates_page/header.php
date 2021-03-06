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
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Font awesome -->
    <link href="<?= base_url('assets/'); ?>css/font-awesome.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link href="<?= base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="<?= base_url('assets/'); ?>css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link href="<?= base_url('assets/'); ?>css/jquery.simpleLens.css" rel="stylesheet" type="text/css">
    <!-- slick slider -->
    <link href="<?= base_url('assets/'); ?>css/slick.css" rel="stylesheet" type="text/css">
    <!-- price picker slider -->
    <link href="<?= base_url('assets/'); ?>css/nouislider.css" rel="stylesheet" type="text/css">
    <!-- Theme color -->
    <link href="<?= base_url('assets/'); ?>css/theme-color/default-theme.css" rel="stylesheet" id="switcher">
    <!-- Top Slider CSS -->
    <link href="<?= base_url('assets/'); ?>css/sequence-theme.modern-slide-in.css?v2" rel="stylesheet" media="all">
    <!-- Main style sheet -->
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>produk/css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>keranjang/style.css" rel="stylesheet">
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
                                <a href="<?= base_url('beranda'); ?>">
                                    <span><img src="<?= base_url('assets/'); ?>img/icon/logo.svg"></span>
                                    <p>lazy<strong>Mart</strong> <span>Belanja Jadi Mudah</span></p>
                                </a>
                            </div>
                            <!-- End logo  -->

                            <!-- Start Search Box -->
                            <div class="aa-search-box-beranda">
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
                                </ul>
                            </div>
                            <!-- End Search Box -->

                            <!-- Start Navigasi -->
                            <div class="aa-cartbox">
                                <a class="aa-cart-link" href="#">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                                <div class="aa-cartbox-summary">
                                    <?php $keranjang = 'Keranjang ('.$this->cart->total_items().')' ?>
                                    <p class="aa-cartbox-list"><?= $keranjang ?><a>Lihat Sekarang</a></p>
                                    <hr>
                                    <ul>
                                        <li>
                                            <a class="aa-cartbox-img" href="#"><img src="<?= base_url('assets/img/item/beras.png'); ?>" alt="img"></a>
                                            <div class="aa-cartbox-info">
                                                <h4>Lumbung Padi Indonesia Beras Putih 5Kg</h4>
                                                <p>2 Barang</p>
                                                <p class="price">Rp72.000</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="aa-cartbox-img" href="#"><img src="<?= base_url('assets/img/item/minyak.png'); ?>" alt="img"></a>
                                            <div class="aa-cartbox-info">
                                                <h4>Minyak Goreng Sania Pouch 2 Pack x 2L (Harga + Ongkir)</h4>
                                                <p>3 Barang</p>
                                                <p class="price">Rp66.500</p>
                                            </div>
                                        </li>                                        
                                        <li>
                                            <a class="aa-cartbox-img" href="#"><img src="<?= base_url('assets/img/item/miegoreng.png'); ?>" alt="img"></a>
                                            <div class="aa-cartbox-info">
                                                <h4>Indomie - Goreng Special 85G - 1 Karton</h4>
                                                <p>1 Barang</p>
                                                <p class="price">Rp120.000</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <a class="aa-cartbox-checkout" href="<?= base_url('checkout') ;?>">Checkout</a>
                                </div>
                                <a class="aa-wish-link" href="#">
                                    <i class="fas fa-heart"></i>
                                </a>
                                <a class="aa-notif-link" href="#">
                                    <i class="fas fa-bell"></i>
                                </a>
                            </div>

                            <div class="pembatas"></div>

                            <div class="dropdown profile-menu">
                                <div class="dropbtn">
                                    <img src="<?= base_url('assets/admin/img/users/') . $user['image']; ?>" alt="user" class="profile-pic me-2"></a>
                                    <p class="nama-user"><?= $user['name']; ?> </p>
                                </div>
                                <div class="dropdown-profile">
                                    <a href="#">Profile</a>
                                    <a href="#">Wishlist</a>
                                    <a href="#">Settings</a>
                                    <a href="<?= base_url('home/logout'); ?> ">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Bottom  -->
    </header>
    <!-- End Header Section -->