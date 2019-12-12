<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>s_i_a_d- order </title>
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
  session_start();
    ?>
    <?php
    if (isset($_SESSION['pseudo'])){
       include "header2.php";}
       else
           { include "header.php";}
       ?>
<?php

require_once 'D:\wamp64\www\projet\projet\Core\panier&commande_CORE.php';
$i= new fonctionC();
$orders=$i->getOrders($_SESSION["pseudo"]);
?>

<main style="margin:10% auto;">
    <div style="background-color: white;" class="container">
        <div class="table-stats table-hover order-table ov-h">
            <table class="table ">
                <thead>
                <tr>
                    <th class="serial">#</th>
                    <th>Innovice Number</th>
                    <th>Date</th>
                    <th>Due Amount</th>
                    <th>Status</th>
                    <th>details</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $x=1;
                foreach ($orders as $o)
                {
                    echo'
                        <tr>
                            <td class="serial">'.$x.'.</td>
                            <td> #'.$o["innoNumber"].' </td>
                            <td> '.$o["OrderDate"].' </td>
                            <td> '.$o["dueAmount"].' DT</span> </td>
                            <td>';
                                if($o["Status"]==1){echo '<span class="badge badge-complete">Complete</span>';}
                                else if($o["Status"]==0) {echo '<span class="badge badge-pending">pending</span>';}
                                else {echo '<span class="badge badge-danger">cancelled</span>';}
                                echo'
                            </td>
                            <td>
                                <form action="orderdetail.php" method="post">

                                    <input type="hidden" name="inno" value="'.$o["innoNumber"].'">
                                    <input type="hidden" name="add" value="'.$o["idAdd"].'">
                                    <button type="submit"class="btn ">view details</button>
                                </form>

                            </td>
                        </tr>
                    ';
                    $x++;
                }
                ?>
                <a href="orders_tri.php">trier selon prix</a> <br>
                  <a href="tri_orders.php">trier avec pagination</a>
                </tbody>
            </table>
        </div>
    </div>
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
