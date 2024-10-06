<?php 
include('includes/config.php');
include_once('functions/middleware.php');
?>

<!DOCTYPE html>
<html lang="en" class="color-two">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> MarketPro - E-commerce HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- select 2 -->
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- Wow -->
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.css">
</head> 
<style>
        table {
            width: 70%;
            border-collapse: collapse; /* Đảm bảo các ô không bị ngăn cách bởi khoảng cách */
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
            border: 2px solid black; /* Khung viền quanh toàn bộ bảng */
        }
        th, td {
            border: 1px solid black; /* Khung viền cho từng ô trong bảng */
            padding: 12px;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
<body>
    
<!--==================== Preloader Start ====================-->
  <div class="preloader">
    <img src="assets/images/icon/preloader.gif" alt="">
    <!-- <div class="loader"></div> -->
  </div>
<!--==================== Preloader End ====================-->

<!--==================== Overlay Start ====================-->
<div class="overlay"></div>
<!--==================== Overlay End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

<!-- ==================== Scroll to Top End Here ==================== -->
<div class="progress-wrap">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>
<!-- ==================== Scroll to Top End Here ==================== -->

<!-- ==================== Search Box Start Here ==================== -->
 <form action="#" class="search-box">
  <button type="button" class="search-box__close position-absolute inset-block-start-0 inset-inline-end-0 m-16 w-48 h-48 border border-gray-100 rounded-circle flex-center text-white hover-text-gray-800 hover-bg-white text-2xl transition-1">
    <i class="ph ph-x"></i>
  </button>
  <div class="container">
    <div class="position-relative">
      <input type="text" class="form-control py-16 px-24 text-xl rounded-pill pe-64" placeholder="Search for a product or brand">
      <button type="submit" class="w-48 h-48 bg-main-600 rounded-circle flex-center text-xl text-white position-absolute top-50 translate-middle-y inset-inline-end-0 me-8">
        <i class="ph ph-magnifying-glass"></i>
      </button>
    </div>
  </div>
 </form>
<!-- ==================== Search Box End Here ==================== -->

<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu scroll-sm d-lg-none d-block">
    <button type="button" class="close-button"> <i class="ph ph-x"></i> </button>
    <div class="mobile-menu__inner">
        <a href="index.php" class="mobile-menu__logo">
            <img src="assets/images/logo/logo.png" alt="Logo">
        </a>
        <div class="mobile-menu__menu">
            <!-- Nav Menu Start -->
<ul class="nav-menu flex-align nav-menu--mobile">
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Home</a>
        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home One</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index-two.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home Two</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="shop.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details-two.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details Two</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="cart.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Cart</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="checkout.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Checkout </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="account.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Account</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog-details.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog Details</a>
            </li>
        </ul>
    </li>
    <li class="nav-menu__item">
        <a href="contact.php" class="nav-menu__link">Contact Us</a>
    </li>
</ul>
<!-- Nav Menu End -->
        </div>
    </div>
</div>
<!-- ==================== Mobile Menu End Here ==================== -->


    <!-- ======================= Middle Header Two Start ========================= -->
<header class="header-middle style-two bg-color-neutral">
    <div class="container container-lg">
        <nav class="header-inner flex-between">
            <!-- Logo Start -->
            <div class="logo">
                <a href="index.php" class="link">
                    <img src="assets/images/logo/logo-two.png" alt="Logo">
                </a>
            </div>
            <!-- Logo End  -->

            <!-- form Category Start -->
            <div class="flex-align gap-16">
                <div class="select-dropdown-for-home-two d-lg-none d-block">
                    <!-- Dropdown Select Start -->
<ul class="header-top__right style-two flex-align flex-wrap">
    <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
        <a href="javascript:void(0)" class="selected-text text-heading text-sm py-8">Eng</a>
        <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    English
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Japan
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    French
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Germany
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Bangladesh
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    South Korea
                </a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
        <a href="javascript:void(0)" class="selected-text text-heading text-sm py-8">USD</a>
       <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    USD
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Yen
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Franc 
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    EURO
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    BDT
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    WON
                </a>
            </li>
        </ul>
    </li>
</ul>
<!-- Dropdown Select End -->
                </div>
                 
                <form action="#" class="flex-align flex-wrap form-location-wrapper">
                    <div class="search-category style-two d-flex h-48 search-form d-sm-flex d-none">
                        <select class="js-example-basic-single border border-gray-200 border-end-0 rounded-0 border-0" name="state">
                            <option value="1" selected disabled>All Categories</option>
                            <option value="1">Grocery</option>
                            <option value="1">Breakfast & Dairy</option>
                            <option value="1">Vegetables</option>
                            <option value="1">Milks and Dairies</option>
                            <option value="1">Pet Foods & Toy</option>
                            <option value="1">Breads & Bakery</option>
                            <option value="1">Fresh Seafood</option>
                            <option value="1">Fronzen Foods</option>
                            <option value="1">Noodles & Rice</option>
                            <option value="1">Ice Cream</option>
                        </select>
                        <div class="search-form__wrapper position-relative">
                            <input type="text" class="search-form__input common-input py-13 ps-16 pe-18 rounded-0 border-0" placeholder="Search for a product or brand">
                        </div>
                        <button type="submit" class="bg-main-two-600 flex-center text-xl text-white flex-shrink-0 w-48 hover-bg-main-two-700 d-lg-flex d-none"><i class="ph ph-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
            <!-- form Category start -->
             
            <!-- Header Middle Right start -->
            <div class="header-right flex-align d-lg-block d-none">
                <div class="header-two-activities flex-align flex-wrap gap-32">
    <button type="button" class="flex-align search-icon d-lg-none d-flex gap-4 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative item-hover__text">
            <i class="ph ph-magnifying-glass"></i>
        </span>
    </button>
    <a href="account.php" class="flex-align flex-column gap-8 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative item-hover__text">
            <i class="ph ph-user"></i>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Profile</span>
    </a>
    <a href="cart.php" class="flex-align flex-column gap-8 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-heart"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Wishlist</span>
    </a>
    <a href="cart.php" class="flex-align flex-column gap-8 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph-fill ph-shuffle"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Compare</span>
    </a>
    <a href="cart.php" class="flex-align flex-column gap-8 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-shopping-cart-simple"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Cart</span>
    </a>
</div>
            </div>
            <!-- Header Middle Right End  -->
        </nav>
    </div>
</header>
<!-- ======================= Middle Header Two End ========================= -->

    <!-- ==================== Header Two Start Here ==================== -->
<header class="header bg-white border-bottom border-gray-100">
    <div class="container container-lg">
        <nav class="header-inner d-flex justify-content-between gap-8">
            <div class="flex-align menu-category-wrapper">

                <!-- Category Dropdown Start -->
                <div class="category-two d-none">
                    <button hidden type="button" class="category__button flex-align gap-8 fw-medium bg-main-two-600 p-16 text-white">
                        <span class="icon text-2xl d-xs-flex d-none"><i class="ph ph-dots-nine"></i></span>
                        <span class="d-sm-flex d-none">All</span>  Categories
                        <span class="arrow-icon text-xl d-flex"><i class="ph ph-caret-down"></i></span>
                    </button>

                    <div class="responsive-dropdown common-dropdown d-lg-none d-block nav-submenu p-0 submenus-submenu-wrapper shadow-none border border-gray-100">
    <button type="button" class="close-responsive-dropdown rounded-circle text-xl position-absolute inset-inline-end-0 inset-block-start-0 mt-4 me-8 d-lg-none d-flex"> <i class="ph ph-x"></i> </button>

    <div class="logo px-16 d-lg-none d-block">
        <a href="index.php" class="link">
            <img src="assets/images/logo/logo.png" alt="Logo">
        </a>
    </div>

    <ul class="scroll-sm p-0 py-8 overflow-y-auto">
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Cell Phone</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Cell Phone</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.php">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.php">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.php">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.php">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.php">Itel</a>
                    </li>
                    <li>
                        <a href="shop.php">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Wear</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Wear</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.php">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.php">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.php">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.php">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.php">Itel</a>
                    </li>
                    <li>
                        <a href="shop.php">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Computer</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Computer</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.php">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.php">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.php">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.php">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.php">Itel</a>
                    </li>
                    <li>
                        <a href="shop.php">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Headphone</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Headphone</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.php">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.php">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.php">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.php">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.php">Itel</a>
                    </li>
                    <li>
                        <a href="shop.php">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Smart Screen</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Smart Screen</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.php">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.php">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.php">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.php">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.php">Itel</a>
                    </li>
                    <li>
                        <a href="shop.php">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Smart Home</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Smart Home</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.php">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.php">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.php">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.php">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.php">Itel</a>
                    </li>
                    <li>
                        <a href="shop.php">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Digital Accessories</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Digital Accessories</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.php">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.php">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.php">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.php">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.php">Itel</a>
                    </li>
                    <li>
                        <a href="shop.php">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span> Value Added Services</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title"> Value Added Services</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.php">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.php">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.php">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.php">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.php">Itel</a>
                    </li>
                    <li>
                        <a href="shop.php">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Car Products</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Car Products</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.php">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.php">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.php">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.php">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.php">Itel</a>
                    </li>
                    <li>
                        <a href="shop.php">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Ecological Products</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Ecological Products</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.php">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.php">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.php">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.php">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.php">Itel</a>
                    </li>
                    <li>
                        <a href="shop.php">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Flat</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Flat</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.php">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.php">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.php">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.php">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.php">Itel</a>
                    </li>
                    <li>
                        <a href="shop.php">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Commercial Terminal</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Commercial Terminal</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.php">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.php">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.php">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.php">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.php">Itel</a>
                    </li>
                    <li>
                        <a href="shop.php">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Headphone</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Headphone</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.php">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.php">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.php">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.php">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.php">Itel</a>
                    </li>
                    <li>
                        <a href="shop.php">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="has-submenus-submenu">
            <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                <span>Smart Screen</span>
                <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
            </a>

            <div class="submenus-submenu py-16">
                <h6 class="text-lg px-16 submenus-submenu__title">Smart Screen</h6>
                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                    <li>
                        <a href="shop.php">Samsung</a>
                    </li>
                    <li>
                        <a href="shop.php">Iphone</a>
                    </li>
                    <li>
                        <a href="shop.php">Vivo</a>
                    </li>
                    <li>
                        <a href="shop.php">Oppo</a>
                    </li>
                    <li>
                        <a href="shop.php">Itel</a>
                    </li>
                    <li>
                        <a href="shop.php">Realme</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>
                </div> 
                <div class="category d-block on-hover-item bg-main-600 text-white">

                    <div class="responsive-dropdown on-hover-dropdown common-dropdown nav-submenu p-0 submenus-submenu-wrapper">
                        <button type="button" class="close-responsive-dropdown rounded-circle text-xl position-absolute inset-inline-end-0 inset-block-start-0 mt-4 me-8 d-lg-none d-flex"> <i class="ph ph-x"></i> </button>
                        <div class="logo px-16 d-lg-none d-block">
                            <a href="index.php" class="link">
                                <img src="assets/images/logo/logo.png" alt="Logo">
                            </a>
                        </div>
                        <ul class="scroll-sm p-0 py-8 w-300 max-h-400 overflow-y-auto">
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-carrot"></i></span>
                                    <span>Vegetables &amp; Fruit</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
    
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Vegetables &amp; Fruit</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.php">Potato &amp; Tomato</a>
                                        </li>
                                        <li>
                                            <a href="shop.php">Cucumber &amp; Capsicum</a>
                                        </li>
                                        <li>
                                            <a href="shop.php">Leafy Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop.php">Root Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop.php">Beans &amp; Okra</a>
                                        </li>
                                        <li>
                                            <a href="shop.php">Cabbage &amp; Cauliflower</a>
                                        </li>
                                        <li>
                                            <a href="shop.php">Gourd &amp; Drumstick</a>
                                        </li>
                                        <li>
                                            <a href="shop.php">Specialty</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Beverages</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Beverages</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.php">Soda &amp; Cocktail Mix </a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Sports &amp; Energy Drinks</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Non Alcoholic Drinks</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Packaged Water </a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Spring Water</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Flavoured Water    </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Meats &amp; Seafood</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Meats &amp; Seafood</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.php"> Fresh Meat </a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Frozen Meat</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Marinated Meat</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Fresh &amp; Frozen Meat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Breakfast &amp; Dairy</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Breakfast &amp; Dairy</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.php"> Oats &amp; Porridge</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Kids Cereal</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Muesli</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Flakes</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Granola &amp; Cereal Bars</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Instant Noodles</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Frozen Foods</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Frozen Foods</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.php"> Instant Noodles </a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Hakka Noodles</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Cup Noodles</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Vermicelli</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Instant Pasta</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Biscuits &amp; Snacks</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Biscuits &amp; Snacks</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.php"> Salted Biscuits </a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Marie, Health, Digestive</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Cream Biscuits &amp; Wafers </a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Glucose &amp; Milk biscuits</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Cookies</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)" class="text-gray-500 text-15 py-12 px-16 flex-align gap-8 rounded-0">
                                    <span class="text-xl d-flex"><i class="ph ph-brandy"></i></span>
                                    <span>Grocery &amp; Staples</span>
                                    <span class="icon text-md d-flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Grocery &amp; Staples</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.php"> Lemon, Ginger &amp; Garlic </a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Indian &amp; Exotic Herbs</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Orangic Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop.php">Orangic Fruits </a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Orangic Dry Fruits</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Orangic Dals &amp; pulses</a>
                                        </li>
                                        <li>
                                            <a href="shop.php"> Orangic Millet &amp; Flours</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Category Dropdown End  -->
    
                <!-- Menu Start  -->
                <div class="header-menu d-lg-block d-none">
                    <!-- Nav Menu Start -->
<ul class="nav-menu flex-align ">
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Home</a>
        <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="index.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home One</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="shop.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="product-details.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <span class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
        <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="cart.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Cart</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="checkout.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Checkout </a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="account.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Account</a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item nav-menu__item has-submenu">
        <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
         <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog</a>
            </li>
            <li class="common-dropdown__item nav-submenu__item">
                <a href="blog-details.php" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog Details</a>
            </li>
        </ul>
    </li>
    <li class="nav-menu__item">
        <a href="contact.php" class="nav-menu__link">Contact Us</a>
    </li>
</ul>
<!-- Nav Menu End -->
                </div>
                <!-- Menu End  -->
            </div>

            <!-- Header Right start -->
            <div class="header-right flex-align">

                <div class="select-dropdown-for-home-two d-lg-block d-none">
                    <!-- Dropdown Select Start -->
<ul class="header-top__right style-two flex-align flex-wrap">
    <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
        <a href="javascript:void(0)" class="selected-text text-heading text-sm py-8">Eng</a>
        <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    English
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Japan
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    French
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Germany
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Bangladesh
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    South Korea
                </a>
            </li>
        </ul>
    </li>
    <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
        <a href="javascript:void(0)" class="selected-text text-heading text-sm py-8">USD</a>
       <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    USD
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Yen
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    Franc 
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    EURO
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    BDT
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                    <img src="assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                    WON
                </a>
            </li>
        </ul>
    </li>
</ul>
<!-- Dropdown Select End -->
                 </div>
                
                <div class="me-8 d-lg-none d-block">
                    <div class="header-two-activities flex-align flex-wrap gap-32">
    <button type="button" class="flex-align search-icon d-lg-none d-flex gap-4 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative item-hover__text">
            <i class="ph ph-magnifying-glass"></i>
        </span>
    </button>
    <a href="account.php" class="flex-align flex-column gap-8 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative item-hover__text">
            <i class="ph ph-user"></i>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Profile</span>
    </a>
    <a href="cart.php" class="flex-align flex-column gap-8 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-heart"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Wishlist</span>
    </a>
    <a href="cart.php" class="flex-align flex-column gap-8 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph-fill ph-shuffle"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Compare</span>
    </a>
    <a href="cart.php" class="flex-align flex-column gap-8 item-hover-two">
        <span class="text-2xl text-white d-flex position-relative me-6 mt-6 item-hover__text">
            <i class="ph ph-shopping-cart-simple"></i>
            <span class="w-16 h-16 flex-center rounded-circle bg-main-two-600 text-white text-xs position-absolute top-n6 end-n4">2</span>
        </span>
        <span class="text-md text-white item-hover__text d-none d-lg-flex">Cart</span>
    </a>
</div>
                </div>
                <button type="button" class="toggle-mobileMenu d-lg-none ms-3n text-gray-800 text-4xl d-flex"> <i class="ph ph-list"></i> </button>
            </div>
            <!-- Header Right End  -->
        </nav>
    </div>
</header>
<!-- ==================== Header End Here ==================== -->

    <!-- ========================= Breadcrumb Start =============================== -->
<div class="breadcrumb py-26 bg-main-two-50">
    <div class="container container-lg">
        <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
            <h6 class="mb-0">Orders</h6>
            <ul class="flex-align gap-8 flex-wrap">
                <li class="text-sm">
                    <a href="index.php" class="text-gray-900 flex-align gap-8 hover-text-main-600">
                        <i class="ph ph-house"></i>
                        Home
                    </a>
                </li>
                <li class="flex-align">
                    <i class="ph ph-caret-right"></i>
                </li>
                <li class="text-sm text-main-600"> Orders </li>
            </ul>
        </div>
    </div>
</div>
<!-- ========================= Breadcrumb End =============================== -->

    <!-- ================================= Checkout Page Start ===================================== -->
 <section class="checkout py-80">
    <div class="container container-lg">
<?php
  if(isset($_GET['action']) && $_GET['action'] == 'read-history' && !isset($_GET['orderid'])){
      $sql= "SELECT * FROM `orders` join users on users.UserID = orders.CustomerID Where orders.CustomerID = " . $_SESSION['Userid'];
      $result = $conn->query($sql);
      echo <<<EOT
      <table>
      <thead>
          <tr>
              <th>OrderID</th>
              <th>CustomerName</th>
              <th>OrderDate</th>
              <th>Status</th>
          </tr>
      </thead>
      <tbody>
  EOT;
      while($row = $result->fetch_assoc()){
        $OrderID= $row['OrderID'];
        $CustomerName = $row['UserName'];
        $date = $row['OrderDate'];
        $status = $row['Status'];
                   
       echo <<<EOT
            <tr>
                <td> $OrderID</td>
                <td>$CustomerName</td>
                <td>$date</td>
                <td>$status</td>
                <td><a href="./orders.php?action=read-history&orderid=$OrderID">View Details</a>
            </tr>
       EOT;
                  
      }
      echo "</tbody>
      </table>"   ; 

}
if(isset($_GET['orderid'])){
    $orderid =$_GET['orderid'];
    $sql = "SELECT * FROM `orderdetails` join products on products.ProductID=orderdetails.ProductID  WHERE OrderID=$orderid";
    $result = $conn->query($sql);
    while($row=$result->fetch_assoc()){
        $productName =  $row['ProductName'];
        $price =     $row['UnitPrice'];
        $image =     $row['ImageURL'];
        $quantity =    $row['Quantity'];
        $rating =   $row['Rating'];
        $productID =  $row['ProductID'];
        $subtotal = $price * $quantity;
        echo <<<EOT
        <tr>
       <td>
           <div class="table-product d-flex align-items-center gap-24">
               <a href="product-details-two.php" class="table-product__thumb border border-gray-100 rounded-8 flex-center ">
                   <img src="$image" alt="">
               </a>
               <div class="table-product__content text-start">

                   <h6 class="title text-lg fw-semibold mb-8">
                       <a href="product-details.php?id=$productID" class="link text-line-2" tabindex="0">Taylor Farms Broccoli Florets Vegetables</a>
                   </h6>

                   <div class="flex-align gap-16 mb-16">
                       <div class="flex-align gap-6">
                           <span class="text-md fw-medium text-warning-600 d-flex"><i class="ph-fill ph-star"></i></span>
                           <span class="text-md fw-semibold text-gray-900">4.8</span>
                       </div>
                       <span class="text-sm fw-medium text-gray-200">|</span>
                       <span class="text-neutral-600 text-sm">128 Reviews</span>
                   </div>

                   <div class="flex-align gap-16">
                       <a href="cart.php" class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                           Camera
                       </a>
                       <a href="cart.php" class="product-card__cart btn bg-gray-50 text-heading text-sm hover-bg-main-600 hover-text-white py-7 px-8 rounded-8 flex-center gap-8 fw-medium">
                           Videos
                       </a>
                   <div>
                   </div>
                   <input name="$productID" value="$quantity" hidden>
               </div>
           </div>
       </td>
       <td>
           <span class="text-lg h6 mb-0 fw-semibold">$$price</span>
       </td>
       <td>
           <div class="d-flex rounded-4 overflow-hidden">
               <span   data-productID=$productID class="quantity__input flex-grow-1 border border-gray-100 border-start-0 border-end-0 text-center w-32 px-4">$quantity</span>  
           </div>
       </td>
       <td>
           <span class="text-lg h6 mb-0 fw-semibold">$$subtotal</span>
       </td></div>
   </tr>
EOT;
    }
}
?>

    </div>
 </section>
<!-- ================================= Checkout Page End ===================================== -->

    <!-- ========================== Shipping Section Start ============================ -->
 <section class="shipping mb-24" id="shipping">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-xxl-3 col-sm-6">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-car-profile"></i></span>
                    <div class="">
                        <h6 class="mb-0">Free Shipping</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-hand-heart"></i></span>
                    <div class="">
                        <h6 class="mb-0"> 100% Satisfaction</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-credit-card"></i></span>
                    <div class="">
                        <h6 class="mb-0"> Secure Payments</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-chats"></i></span>
                    <div class="">
                        <h6 class="mb-0"> 24/7 Support</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- ========================== Shipping Section End ============================ -->
    
    
<!-- ==================== Footer Two Start Here ==================== -->
<footer class="footer py-80">
    <div class="container container-lg">
        <div class="footer-item-two-wrapper d-flex align-items-start flex-wrap">
            <div class="footer-item max-w-275">
                <div class="footer-item__logo">
                    <a href="index.php"> <img src="assets/images/logo/logo-two-black.png" alt=""></a>
                </div>
                <p class="mb-24">Marketpro  become the largest computer parts, gaming pc parts, and other IT related products.</p>
                <div class="flex-align gap-16 mb-16">
                    <span class="w-32 h-32 flex-center rounded-circle border border-gray-100 text-main-two-600 text-md flex-shrink-0"><i class="ph-fill ph-phone-call"></i></span>
                    <a href="tel:+00123456789" class="text-md text-gray-900 hover-text-main-600">+00 123 456 789</a>
                </div>
                <div class="flex-align gap-16 mb-16">
                    <span class="w-32 h-32 flex-center rounded-circle border border-gray-100 text-main-two-600 text-md flex-shrink-0"><i class="ph-fill ph-envelope"></i></span>
                    <a href="mailto:support24@marketpro.com" class="text-md text-gray-900 hover-text-main-600">support24@marketpro.com</a>
                </div>
                <div class="flex-align gap-16 mb-16">
                    <span class="w-32 h-32 flex-center rounded-circle border border-gray-100 text-main-two-600 text-md flex-shrink-0"><i class="ph-fill ph-map-pin"></i></span>
                    <span class="text-md text-gray-900 ">789 Inner Lane, California, USA</span>
                </div>
            </div>
            
            <div class="footer-item">
                <h6 class="footer-item__title">About us</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Company Profile</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">All Retail Store</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Merchant Center</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Affiliate</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Contact Us</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Feedback</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Huawei Group</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Rules & Policy</a>
                    </li>
                </ul>
            </div>

            <div class="footer-item">
                <h6 class="footer-item__title">Customer Support</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Help Center</a>
                    </li>
                    <li class="mb-16">
                        <a href="contact.php" class="text-gray-600 hover-text-main-600">Contact Us</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Gift Card</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Report Abuse</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Submit and Dispute</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Policies & Rules</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Online Shopping</a>
                    </li>
                    <li class="">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Redeem Voucher</a>
                    </li>
                </ul>
            </div>

            <div class="footer-item">
                <h6 class="footer-item__title">My Account</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">My Account</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Order History</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Shoping Cart</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Compare</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Help Ticket</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Wishlist</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Order History</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Product Support</a>
                    </li>
                </ul>
            </div>

            <div class="footer-item">
                <h6 class="footer-item__title">Information</h6>
                <ul class="footer-menu">
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Become a Vendor</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Affiliate Program</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Privacy Policy</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Our Suppliers</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Extended Plan</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Extended Plan</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Community</a>
                    </li>
                    <li class="mb-16">
                        <a href="shop.php" class="text-gray-600 hover-text-main-600">Community</a>
                    </li>
                </ul>
            </div>
            
            <div class="footer-item">
                <h6 class="">Shop on The Go</h6>
                <p class="mb-16">Marketpro App is available.  Get it now</p>
                <div class="flex-align gap-8 my-32">
                    <a href="https://www.apple.com/store" class="">
                        <img src="assets/images/thumbs/store-img1.png" alt="">
                    </a>
                    <a href="https://play.google.com/store/apps?hl=en" class="">
                        <img src="assets/images/thumbs/store-img2.png" alt="">
                    </a>
                </div>

                <ul class="flex-align gap-16">
                    <li>
                        <a href="https://www.facebook.com/" class="w-44 h-44 flex-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white">
                            <i class="ph-fill ph-facebook-logo"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/" class="w-44 h-44 flex-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white">
                            <i class="ph-fill ph-twitter-logo"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/" class="w-44 h-44 flex-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white">
                            <i class="ph-fill ph-instagram-logo"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.com/" class="w-44 h-44 flex-center bg-main-two-50 text-main-two-600 text-xl rounded-8 hover-bg-main-two-600 hover-text-white">
                            <i class="ph-fill ph-linkedin-logo"></i>
                        </a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
</footer>

<!-- bottom Footer -->
<div class="bottom-footer bg-color-one py-8">
    <div class="container container-lg">
        <div class="bottom-footer__inner flex-between flex-wrap gap-16 py-16">
            <p class="bottom-footer__text ">Marketpro eCommerce &copy; 2024. All Rights Reserved </p>
            <div class="flex-align gap-8 flex-wrap">
                <span class="text-heading text-sm">We Are Acepting</span>
                <img src="assets/images/thumbs/payment-method.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- ==================== Footer Two End Here ==================== -->
  

    
    <!-- Jquery js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="assets/js/boostrap.bundle.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="assets/js/phosphor-icon.js"></script>
    <!-- Select 2 -->
    <script src="assets/js/select2.min.js"></script>
    <!-- Slick js -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Slick js -->
    <script src="assets/js/count-down.js"></script>
    <!-- wow js -->
    <script src="assets/js/jquery-ui.js"></script>

    <!-- main js -->
    <script src="assets/js/main.js"></script>



    </body>

<!-- Mirrored from wowtheme7.com/tf/marketpro/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Sep 2024 15:20:02 GMT -->
</html>