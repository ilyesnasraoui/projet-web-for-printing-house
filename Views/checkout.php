<?php
session_start();
require_once "D:\wamp64\www\projet\projet\Core\panier&commande_CORE.php";
require_once "D:\wamp64\www\projet\projet\Entities\addresse.php";
$i= new fonctionC();
$c=$i->getCart(getHostByName(getHostName()));
$uname1="YOUSSEF";
$add=$i->showAdress($uname1);
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>S.I.A.D- Cart</title>
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
              <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
               <li class="nav-item"><a class="nav-link" href="Promotions.html">Promotions</a></li>
              <li class="nav-item active submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
                  <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
                  <li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
                </ul>
							</li>

							<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="tracking-order.html">Tracking</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><button><i class="ti-search"></i></button></li>
              <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li>
              <li class="nav-item"><a class="button button-header" href="#">Buy Now</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->

	<!-- ================ start banner area ================= -->
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>checkout </h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">checkout </li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
<main>
    <div class="container">
        <form method="post" onsubmit="return checkout_control()" action="..\Backend\production\views\forms.php">
        <div style="margin: 10% auto;" class="row">
            <div style="box-shadow: 2px 2px 11px 0px rgba(0, 0, 0, 0.4); background-color:white;border: 2px solid gray" class="col-lg-8 col-md-12">

                    <section id="checkout-addresses-step" class="">
                        <h1 class="mb-3 mt-2 step-title text-center h3"><i class="fa fa-home"></i><span class="step-number"></span> Adresses</h1>
                        <div class="content">
                            <div class="js-address-form">

                                    <p class="m-3 text-center">
                                        L'adresse de livraison.
                                    </p>
                                    <div id="delivery-addresses" class="address-selector js-address-selector">
                                        <article class="address-item selected" id="id-address-delivery-address-118911">
                                            <?php
                                            foreach ($add as $ad)
                                            {
                                                echo '
                                                    <header style="background-color: lightgrey; border-radius: 25px; " class="h4">
                                                        <label class="radio-block">
                                                            <span class="custom-radio">
                                                              <input type="radio" name="addId" value="'.$ad["add_id"].'">
                                                              <span></span>
                                                            </span>
                                                            <span class="address-alias h5">'.$ad["add_name"].'</span>
                                                            <span style="color: grey;font-size: 16px" class="address">'.$ad["name"].', '.$ad["street"].', '.$ad["zip_code"].' '.$ad["city"].','.$ad["country"].','.$ad["phone"].'</span>
                                                        </label>
                                                    </header>
                                                ';
                                            }
                                            ?>
                                            <span class="text-danger" id="err-add"></span>
                                            <hr>

                                            <footer class="address-footer">
                                                <input type="hidden" name="form" value="addOrder">
                                                <input type="hidden" name="uname" value="<?php echo $uname1; ?>">

                                                <a href="adresses.php" ><i class="fa fa-edit"></i> Edit Or Add adress</a>
                                                <button type="submit" class="btn-sm btn-success" style="float: right;">Confirm Order</button>
                                            </footer>
                                        </article>



                            </div>

                        </div>
                    </section>

            </div>
            <div style="box-shadow: 2px 2px 11px 0px rgba(0, 0, 0, 0.4); background-color:white;border: 2px solid gray;" class="col-lg-4 col-md-12">
                <?php
                    $x=0;foreach ($c as $item) {$x=$x+$item["qty"];}
                    $q=$i->getCart(getHostByName(getHostName()));
                    echo '<h3 class="mt-2 mb-3 text-center"> '.$x.' items </h3>';
                    echo '<ul style="list-style: none;">';
                    $h=0;
                    foreach ($q as $a)
                    {
                        $d=$i->getProd($a["p_id"]);
                        $h=$h+$d["prix"]*$a["qty"];

                        echo '
                            <li class="media">
                                <div class="mb-3">
                                  <a href="#" title="">
                                    <img style="border: 2px solid #4A8239;" width="50px" class="media-object rounded-circle" src="views/img/'.$d["image"].'" alt="">
                                  </a>
                                </div>
                                <hr>
                                <div class="media-body">
                                  <span class="product-name">'.$d["nom"].'</span>
                                  <span style="font-size: 9px;" class="product-quantity">x'.$a["qty"].'</span>
                                  <div class="product-price pull-right">'.$d["prix"].' Tnd</div>
                                </div>
                            </li>
                            <hr>
                        ';


                    }
                    echo '<li>Prix Totale : '.$h.' Tnd </li>';
                    echo '</ul>';
                ?>
            </div>


        </div>
    </div>
    </form>
</main>
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