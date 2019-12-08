<?php
session_start ();
require_once "D:\wamp64\www\projet\projet\Core\panier&commande_CORE.php";
$i= new fonctionC();
$c=$i->getCart(getHostByName(getHostName()));?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>S.I.A.D- produit</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt="" style="height: 100px"></a>
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo2.png" alt="" style="height: 50px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
               <li class="nav-item"><a class="nav-link" href="Promotions.html">Promotions</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="produit.php">Product</a></li>
                  <li class="nav-item"><a class="nav-link" href="checkout.php">Product Checkout</a></li>
                  <li class="nav-item"><a class="nav-link" href="cart.php">Shopping Cart</a></li>
                  <li class="nav-item"><a class="nav-link" href="orders.php">Orders</a></li>
                  <li class="nav-item"><a class="nav-link" href="adresses.php">My adresses</a></li>
                </ul>
              </li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><button><i class="ti-search"></i></button></li>
              <li class="nav-item"><button> <a href="cart.php"> <i class="ti-shopping-cart"></i><span class="nav-shop__circle"><?php echo $c->rowCount()?></span></button></a> </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Shop products</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shop products</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
  <section class="section-margin--small mb-5">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
          <div class="sidebar-categories">
            <div class="head">Browse Categories</div>
            <ul class="main-categories">
              <li class="common-filter">
                <form action="#">
                  <ul>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="men" name="brand"><label for="men">Visit card<span> </span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="women" name="brand"><label for="women">A stamp of the office<span></span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="accessories" name="brand"><label for="accessories">Wedding card<span></span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="footwear" name="brand"><label for="footwear">certificate<span> </span></label></li>
                    <!--<li class="filter-list"><input class="pixel-radio" type="radio" id="bayItem" name="brand"><label for="bayItem">Bay item<span> (3600)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="electronics" name="brand"><label for="electronics">Electronics<span> (3600)</span></label></li>
                    <li class="filter-list"><input class="pixel-radio" type="radio" id="food" name="brand"><label for="food">Food<span> (3600)</span></label></li> -->
                  </ul>
                </form>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
          <!-- Start Filter Bar -->
          <div class="filter-bar d-flex flex-wrap align-items-center">
            <div class="sorting">
              <select>
                <option value="1">Default sorting</option>
                <option value="1">Default sorting</option>
                <option value="1">Default sorting</option>
              </select>
            </div>
            <div class="sorting mr-auto">
              <select>
                <option value="1">Show 12</option>
                <option value="1">Show 12</option>
                <option value="1">Show 12</option>
              </select>
            </div>
            <div>
              <div class="input-group filter-bar-search">
                <input type="text" placeholder="Search">
                <div class="input-group-append">
                  <button type="button"><i class="ti-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          </div>
          </div>
          </div>
<?php
$p=$i->getProds();
?>
<section class="cat_product_area section_gap">
  <div class="container">
      <div class="row flex-row-reverse">
          <div class="col-lg-9">
              <div class="product_top_bar">
                  <div class="left_dorp">
                      <div class="latest_product_inner">
                        <div class="row">
                          <?php
                            foreach ($p as $t)
                            {

                              echo '
                              <div class="card-body">
                                <h4 class="card-product__title"> <h4>'.$t["nom"].'</h4></h4>
                                <p class="card-product__price">'.$t["prix"].'</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="card text-center card-product">
                              <div class="card-product__img">
                                <img class="card-img" src="../views/img/'.$t["image"].'" alt="product img">
                                <form style="display: inline-block;"  method="post" action="..\Backend\production\views\forms.php">
                                                   <input type="hidden" name="pId" value="'.$t["id_produit"].'" >
                                                    <input type="hidden" name="form" value="addCart" >
                                                    <ul class="card-product__imgOverlay">
                                                      <li><button><i class="ti-search"></i></button></li>
                                                      <li><button><i class="ti-shopping-cart"></i></button></li>
                                                      <li><button><i class="ti-heart"></i></button></li>
                                                    </ul>
                                            </form>
                              </div>
                              ';
                            }
                           ?>


                        </div>
                    </div>
                </div>
            </div>
              </div>
                </div>
                  </div>

    </section>
    <footer class="footer">
      <div class="footer-area">
        <div class="container">
          <div class="row section_gap">
            <div class="col-lg-3 col-md-6 col-sm-6">

            </div>
            <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">

            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">

            </div>
            <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
              <div class="single-footer-widget tp_widgets">
                <h4 class="footer_title">Contact Us</h4>
                <div class="ml-40">
                  <p class="sm-head">
                    <span class="fa fa-location-arrow"></span>
                    Head Office
                  </p>
                  <p>AV habib borguiba, Grombalia</p>

                  <p class="sm-head">
                    <span class="fa fa-phone"></span>
                    Phone Number
                  </p>
                  <p>
                    +216 72 211 611 <br>
                    +216 98 319 629
                  </p>

                  <p class="sm-head">
                    <span class="fa fa-envelope"></span>
                    Email
                  </p>
                  <p>
                    impaicha96@yahoo.fr <br>

                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="container">
          <div class="row d-flex">
            <p class="col-lg-12 footer-text text-center">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    <!--================ End footer Area  =================-->



    <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="vendors/skrollr.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="vendors/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/mail-script.js"></script>
    <script src="js/main.js"></script>
    </body>
    </html>
