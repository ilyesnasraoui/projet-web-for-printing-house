<!DOCTYPE html>
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
                  <li class="nav-item"><a class="nav-link" href="produit.php">Product Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="checkout.php">Product Checkout</a></li>
                  <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
                  <li class="nav-item"><a class="nav-link" href="cart.php">Shopping Cart</a></li>
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
<?php
session_start ();
include "../Core/panier&commande_CORE.php";
$f=new fonctionC();
$p=$f->getProds();
?>
    <section class="cat_product_area section_gap">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="product_top_bar">

                    </div>

                    <div class="latest_product_inner">
                        <div class="row">
                          <?php
                            foreach ($p as $t)
                            {

                              echo '
                              <div class="col-lg-4 col-md-6">
                                  <div class="single-product">
                                      <div class="product-img">
                                          <img
                                              class="card-img"
                                              src="views/img/'.$t["image"].'"
                                              alt=""
                                          />
                                          <div class="p_icon">
                                              <a href="#">
                                                  <i class="far fa-eye"></i>
                                              </a>
                                              <a href="#">
                                                  <i class="far fa-heart"></i>
                                              </a>
                                              <form style="display: inline-block;"  method="post" action="..\Backend\production\views\forms.php">
                                                  <input type="hidden" name="pId" value="'.$t["id_produit"].'" >
                                                  <input type="hidden" name="form" value="addCart" >
                                                  <button id="add-to-cart" type="submit"><i class="fas fa-cart-plus"></i></button>

                                              </form>

                                          </div>
                                      </div>
                                      <div class="product-btm">
                                          <a href="#" class="d-block">
                                              <h4>'.$t["nom"].'</h4>
                                          </a>
                                          <div class="mt-3">
                                             <span class="mr-4">'.$t["prix"].' dt</span>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                              ';
                            }
                           ?>


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
