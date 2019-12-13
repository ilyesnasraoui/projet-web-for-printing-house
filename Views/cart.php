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
  <title>s_i_a_d- Cart</title>
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
  <?php
  if (isset($_SESSION['pseudo'])){
     include "header2.php";}
     else
         { include "header.php";}
     ?>
	<!--================ End Header Menu Area =================-->

	<!-- ================ start banner area ================= -->
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Shopping Cart</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->



  <!--================Cart Area =================-->
  <div class="container cart-container">
              <div class="row">
                  <div class="col-md-12 col-sm-12 ol-lg-12">
                    <div class="table-stats table-hover order-table ov-h">
                        <table class="table ">
                                  <thead>
                                  <tr class="title-top">
                                      <th class="product-thumbnail">Image</th>
                                      <th class="product-name">Product</th>
                                      <th class="product-price">Price</th>
                                      <th class="product-quantity">Quantity</th>
                                      <th class="product-subtotal">Total</th>
                                      <th class="product-remove">Remove</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <?php
                                  $v=0;
                                  if($c->rowCount()==0)
                                  {
                                      echo '
                                      <tr>
                                          <td colspan="6"><h3>Your Cart Is Empty</h3></td>
                                      </tr>
                                      <tr>
                                          <td colspan="6"><h3>Go to <a href="produit.php">shop</a></h3></td>
                                      </tr>
                                      ';
                                  }
                                  foreach ($c as $row)
                                  {

                                      $d=$i->getProd($row["p_id"]);
                                      $v=$v+$d["prix"]*$row["qty"];
                                      echo '
                                  <tr>
                                      <td class="product-thumbnail"><a href="#"><img src="../Backend/'.$d["image"].'" width="80px" alt="product img"></a></td>
                                      <td class="product-name"><a href="#">'.$d["nom"].'</a></td>
                                      <td class="product-price"><span class="amount">'.$d["prix"].' TND</span></td>
                                      <td class="product-quantity">
                                          <form action="..\Backend\production\views\forms.php" method="post">
                                              <input min="1" type="number" name="qty" value="'.$row["qty"].'">
                                              <input type="hidden" name="pId" value="'.$row["p_id"].'">
                                              <input type="hidden" name="form" value="updateCart" >
                                              <button  type="submit" class="btn btn-outline-success"><i class="fas fa-edit"></i></button
                                          </form>
                                      </td>
                                      <td class="product-subtotal">'.($d["prix"]*$row["qty"]).'</td>
                                      <td class="product-remove">
                                          <form action="..\Backend\production\views\forms.php" method="post">
                                              <input type="hidden" name="pId" value="'.$row["p_id"].'">
                                              <input type="hidden" name="form" value="deleteCart" >
                                              <button  type="submit" class="btn btn-outline-danger">X</button>
                                          </form>
                                      </td>
                                  </tr>

                                  ';
                                  }
                                  ?>
                                  </tbody>
                              </table>
                          </div>
                      <div class="cartbox__btn">
                          <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">

                              <?php
                              if($c->rowCount()!=0)
                              {
                                  echo '  <li><a href="#">Coupon Code</a></li>
                                          <li><a href="#">Apply Code</a></li>
                                          <li><a href="checkout.php">Check Out</a></li>';
                              }
                              ?>

                          </ul>
                      </div>
                  </div>
                  <div class="row">

            </div>
              </div>


  <!--================ Start footer Area  =================-->
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
