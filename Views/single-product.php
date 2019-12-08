<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>S.I.A.D- Product Details</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

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
              <li class="nav-item"><button> <a href="cart.php"> <i class="ti-shopping-cart"></i><span class="nav-shop__circle"></span></button></a> </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->

	<!-- ================ start banner area ================= -->
	<section class="blog-banner-area" id="blog">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Shop Single</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shop Single</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->


  <!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="owl-carousel owl-theme s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="img/s1.jpg" alt="">
						</div>
						<!-- <div class="single-prd-item">
							<img class="img-fluid" src="img/category/s-p1.jpg" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/category/s-p1.jpg" alt="">
						</div> -->
					</div>
				</div>
        <div class="container" style="width: 65%">
            <h2>Shopping Cart</h2>
            <?php
            include "controlPanier.php";
                $query = "SELECT * FROM produits ORDER BY id_produit ASC ";
                $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result)>0) {

                    while ($row = mysqli_fetch_array($result)) {

                        ?>
                        <div class="col-md-3">

                            <form method="post" action="Cart.php?action=add&id=<?php echo $row["id_produit"]; ?>">

                                <div class="product">
                                    <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                    <h5 class="text-info"><?php echo $row["nom"]; ?></h5>
                                    <h5 class="text-danger"><?php echo $row["prix"]; ?></h5>
                                    <input type="text" name="quantite" class="form-control" value="1">
                                    <input type=hidden name="nom" value="<?php echo $row["nom"]; ?>">
                                    <input type="hidden" name="prix" value="<?php echo $row["prix"]; ?>">
                                    <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                           value="Add to Cart">
                                </div>
                            </form>
                        </div>
                        <?php
                    }
                }
            ?>
				<!-- <div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>A stamp of the office</h3>
						<h2>249.99DT</h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Category</span> : Household</a></li>
							<li><a href="#"><span>Availibility</span>:In Stock</a></li>
						</ul>
						<p>Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for
							something that can make your interior look awesome, and at the same time give you the pleasant warm feeling
							during the winter.</p>
						<div class="product_count">
              <label for="qty">Quantity:</label>
              <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="ti-angle-left"></i></button>
							<input type="text" name="qty" id="sst" size="2" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
               class="reduced items-count" type="button"><i class="ti-angle-right"></i></button>
							<a class="button primary-btn" href="Cart.php?action=add&id=<?php echo $row["id_produit"];?>">Add to Cart</a>
						</div>
						<div class="card_area d-flex align-items-center">
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->




	<!--================End Product Description Area =================-->

	<!--================ Start related Product area =================-->
	<section class="related-product-area">
		<div class="container">
			<div class="section-intro pb-60px">
        <p>Popular Item in the market</p>
        <h2>Top <span class="section-intro__style">Product</span></h2>
      </div>
			<div class="row mt-30">
        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="#"><img src="p1.jpg" alt=""></a>
              <div class="desc">
                  <a href="#" class="title">Visit card</a>
                  <div class="price">170DT</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="v1.jpg" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Wedding card</a>
                <div class="price">150DT</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="s1.jpg" alt=""></a>
              <div class="desc">
                <a href="#" class="title">A stamp of the office</a>
                <div class="price">200DT</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="#"><img src="k1.jpg" alt=""></a>
              <div class="desc">
                  <a href="#" class="title">certificate</a>
                  <div class="price">170DT</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="p2.jpg" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Visit card</a>
                <div class="price">150DT</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="s2.jpg" alt=""></a>
              <div class="desc">
                <a href="#" class="title">A stamp of the office</a>
                <div class="price">200DT</div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
            <div class="single-search-product d-flex">
              <a href="#"><img src="v2.jpg" alt=""></a>
              <div class="desc">
                  <a href="#" class="title">Wedding card</a>
                  <div class="price">90DT</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="k2.jpg" alt=""></a>
              <div class="desc">
                <a href="#" class="title">certificate</a>
                <div class="price">180DT</div>
              </div>
            </div>
            <div class="single-search-product d-flex">
              <a href="#"><img src="p3.jpg" alt=""></a>
              <div class="desc">
                <a href="#" class="title">Visit card</a>
                <div class="price">115DT</div>
              </div>
            </div>
          </div>
        </div>


      </div>
		</div>
	</section>
	<!--================ end related Product area =================-->

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
