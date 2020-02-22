<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>s_i_a_d- produit</title>
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


  <script>
function showResult(str) {

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("DATA").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","SearchP.php?<?php if(isset($_GET['ID_Cat'])) if($_GET['ID_Cat']!="") echo"ID_Cat=".$_GET['ID_Cat']."&"; ?>kword=".concat(document.getElementById("kword").value));
  xmlhttp.send();
}
</script>
  <!--================ Start Header Menu Area =================-->
  <?php
  session_start();
  ?>
  <?php
  if (isset($_SESSION['pseudo'])){
     include "header2.php";}
     else
         { include "header.php";}
     ?>
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
                <input type="text" placeholder="Search" id="kword" onkeyup="showResult(this.value)">
                <div class="input-group-append">
                 <a href="QRReader.php"> <button type="button"><i class="ti-search"></i></button></a>
                </div>

              </div>
            </div>
          </div>
          </div>
          </div>
          </div>
<?php
include_once "../config.php";
include "../core/ProduitC.php";
$f=new ProduitC();
if(isset($_GET['ID_Cat']))
$p=$f->afficherProduits_Cat($_GET['ID_Cat']);
else
$p=$f->afficherProduits();
?>
<section class="cat_product_area section_gap">
  <div class="container">
      <div class="row flex-row-reverse">
          <div class="col-lg-9">
              <div class="product_top_bar">
                  <div class="left_dorp">
                      <div class="latest_product_inner" id="DATA">

                        <?php
                            foreach ($p as $t)
                            {

                              echo '
                        <div class="row">

                              <div class="card-body">
                                <h4 class="card-product__title"> <h4>'.$t["nom"].'</h4></h4>
                                <div class="col-md-6 col-lg-6">

                            <div class="card text-center card-product">
                              <div class="card-product__img">
                              <a href="single-product.php?ID='.$t["id_produit"].'">
                                <img class="card-img" src="../Backend/production/views/'.$t["image"].'" alt="product img"></a>
                                <p class="card-product__price">'.$t["prix"].' DT</p>

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
                            </div>
                          </div>
                              </div>







                              ';
                            }
                           ?>



                        </div>';
                          
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
