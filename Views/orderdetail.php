<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>s_i_a_d- orders details</title>
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
  session_start ();
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
// $inno="2212341";
// $uname="Youssef";
// $add="26";
// $orders=$i->getOrderProds($inno);
// $add=$i->showAdress($uname,$add)->fetch();
$_SESSION['uname']="YOUSSEF";
$orders=$i->getOrderProds($_POST['inno']);
$add=$i->showAdress($_SESSION["uname"],$_POST["add"])->fetch();
?>

<main style="margin:10% auto;">
    <div class="container adresses-container">
        <div class="row">
                <div style="background-color: #fff; border: 2px solid grey; " class="col-lg-8 col-md-12 card p-0" >
                    <div class="card-header">
                        <strong class="card-title">Order Details: # <?php echo $_POST["inno"] ?> </strong>
                    </div>
                    <div class="card-body">
                        <table class="table text-center">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">U Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $x=1;
                            $v=0;
                            foreach ($orders as $o)
                            {
                                $p=$i->getProd($o["prodId"]);
                                echo'
                                <tr>
                                    <th scope="row">'.$x.'</th>
                                    <td>'.$p["nom"].'</td>
                                    <td>'.$o["qty"].'</td>
                                    <td>'.$p["prix"].' TND</td>
                                </tr>
                                ';
                                $v=$v+$o["qty"]*$p["prix"];
                                $x++;
                            }
                            ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td class="text-center" style="background-color: #212529; color: white;"></td>
                                <td class="text-center" style="background-color: #212529; color: white;"></td>
                                <td class="text-center" style="background-color: #212529; color: white;"><strong>Total</strong></td>
                                <td><?php echo $v." TND"?></td>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
            </div>
            <div style="background-color: #fff; border: 2px solid grey;height: 250px" class="card-body col-lg-4 col-md-12">
                <h4>Order Address</h4>
                <h5 class="text-capitalize card-title"><?php echo $add["add_name"]?></h5>
                <h6 class="text-capitalize card-subtitle mb-2 text-muted"><?php echo $add["name"]?></h6>
                <p class="card-text"><?php echo $add["street"]?>,<?php echo  $add["city"]?>,<?php echo  $add["zip_code"]?></p>
                <p class="card-text"><?php echo $add["state"]?>,<?php echo  $add["country"]?></p>
                <p class="card-text"><?php echo $add["phone"]?></p>
            </div>
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
