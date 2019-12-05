<?php
session_start();
include "D:\wamp64\www\projet\projet\Core\panier&commande_CORE.php";
$f=new fonctionC();
$la=$f->getOrders();
$inno="2212341";
$uname="Youssef";
$add="26";
?>

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
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Prods</a></li>
                            <li class="active">Orders</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Order List</strong>
                    </div>

                    <div class="table-stats order-table ov-h">
                        <table class="table table-hover text-center">
                            <thead>
                            <tr>
                                <th class="serial">#</th>
                                <th class="avatar">Innovice number</th>
                                <th>Status</th>
                                <th>login</th>
                                <th>Date</th>
                                <th>Amount Due</th>
                                <th class="text-center">Edit Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $x=1;
                            foreach ($la as $a)
                            {
                                echo '
                                <tr>
                                    <td class="serial">'.$x.'.</td>
                                    <td class="avatar">
                                        <form action="orderDetail.php" method="post">
                                            <input type="hidden" name="add" value="'.$a["idAdd"].'">
                                            <input type="hidden" name="inno" value="'.$a["innoNumber"].'">
                                            <button class="btn-outline-dark" type="submit"># '.$a["innoNumber"].'</button>
                                        </form>
                                    </td>
                                    <td>';
                                if($a["Status"]==-1)
                                {
                                    echo '<span class="badge badge-danger">cancelled</span>';
                                }
                                else if($a["Status"]==1)
                                {
                                    echo '<span class="badge badge-complete">confirmed</span>';
                                }
                                else
                                {
                                    echo '<span class="badge badge-pending">pending</span>';
                                }
                                echo '
                                    </td>
                                    <td> '.$a["uname"].' </td>
                                    <td>  <span class="name">'.$a["OrderDate"].'</span> </td>
                                    <td> <span class="email"> '.$a["dueAmount"].'</span> </td>';
                                if ($_SESSION["status"]==55)
                                {
                                    echo '

                                    <td>
                                    <div class="text-center">';
                                    if($a['Status']==0)
                                    {
                                        echo '<a href="" class="btn-sm btn-success" data-toggle="modal" data-target="#modalRegisterForm'.$x.$x.'">confirm</a>';
                                        echo '<a href="" class="btn-sm btn-danger" data-toggle="modal" data-target="#modalRegisterForm'.$x.'">cancel</a>';
                                    }
                                    else if($a['Status']==1)
                                    {
                                        echo '<span class="badge badge-complete">confirmed</span>';
                                    }
                                    else
                                    {
                                        echo '<span class="badge badge-danger">cancelled</span>';
                                    }

                                    echo '
                                    </div>
                                    <div class="modal fade" id="modalRegisterForm'.$x.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Cancel Order</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <form action="D:\wamp64\www\projet\projet\Backend\production\views\forms.php" method="post">
                                            <div class="modal-body mx-3">
                                            <div class="md-form mb-5">
                                              <p class="text-center"> Innovice number </p>
                                              <input type="text" id="orangeForm-name" name="" class="form-control validate text-center" value="'.$a["innoNumber"].'" disabled>
                                            </div>
                                            <div class="md-form mb-5">
                                                <p class="text-center text-danger">Do you Really Want to cancel the order with the above innovice number</p>
                                            </div>
                                            <input type="hidden" name="inno" value="'.$a["innoNumber"].'">
                                            <input type="hidden" name="form" value="cancelOrder">
                                          </div>
                                          <div class="modal-footer d-flex justify-content-center">
                                            <input type="submit" class="btn btn-danger" value="Confirm">
                                            <input type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close" value="Cancel">

                                          </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal fade" id="modalRegisterForm'.$x.$x.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Confirm Order</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <form action="D:\wamp64\www\projet\projet\Backend\production\views\forms.php" method="post">
                                            <div class="modal-body mx-3">
                                            <div class="md-form mb-5">
                                              <p class="text-center"> Innovice number </p>
                                              <input type="text" id="orangeForm-name" name="" class="form-control validate text-center" value="'.$a["innoNumber"].'" disabled>
                                            </div>
                                            <div class="md-form mb-5">
                                                    <p class="text-center text-success">Do you Really Want to confirm the order with the above innovice number</p>
                                            </div>
                                            <input type="hidden" name="inno" value="'.$a["innoNumber"].'">
                                            <input type="hidden" name="form" value="confirmOrder">
                                          </div>
                                          <div class="modal-footer d-flex justify-content-center">
                                            <input type="submit" class="btn btn-danger" value="Confirm">
                                            <input type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close" value="Cancel">

                                          </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                </td>
                                            ';
                                }
                                echo '



                                </tr>
                                ';
                                $x++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>
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
