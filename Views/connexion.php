<?php
session_start();
include "../Entities/utilisateur.php";
include "../Core/utilisateurCore.php";
include_once ('cookieconnect.php');
   if(isset($_POST['formconnexion'])) {
   $nameconnect = ($_POST['nameconnect']);
   $mdpconnect = ($_POST['mdpconnect']);
   $empty="test";
    if(!empty($nameconnect) AND !empty($mdpconnect)) {
  $utilisateur1 = new utilisateur($nameconnect,$mdpconnect,$empty);
                        $utilisateur1C = new utilisateurCore();
                        $tab=$utilisateur1C->connection($utilisateur1);
                        $userexist=$tab[0];
                        $requser=$tab[1];
echo $userexist;
      if($userexist == 1) {
         if (isset($_POST['rememberme'])) {
                setcookie('email',$mailconnect,time()+365*24*3600,null,null,false,true);
                setcookie('password',$mdpconnect,time()+365*24*3600,null,null,false,true);
            }
       $userinfo = $requser->fetch();
      $confirme =  $userinfo['confirme'];
       if ($userinfo['role']==0 && $confirme == 1)   {
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         $_SESSION['role'] = $userinfo['role'];
         header("Location: userProfile.php?id=".$_SESSION['id']);}
         else{
           $erreur ="votre compte n'est pas encore confirmé";
         }
         if ($userinfo['role']==2) { header("Location: ../Backend/production/views/template.php");}
        if ($userinfo['role']==1) { header("Location: ../Backend/production/views/template2.php");}
        }
        else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>S.I.A.D- Login</title>
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
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-product.html">Blog Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>
                  <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>
                  <li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>
                </ul>
              </li>

              <li class="nav-item active submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
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
          <h1>Login / Register</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Login/Register</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
   <?php
     if(isset($erreur))
             {
                echo '<font color="red">'.$erreur."</font>";
             }
         ?>
  <!-- ================ end banner area ================= -->

  <!--================Login Box Area =================-->
  <section class="login_box_area section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="login_box_img">
            <div class="hover">
              <h4>New to our website?</h4>
              <p>There are advances being made in science and technology everyday, and a good example of this is the</p>
              <a class="button button-account" href="register.html">Create an Account</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="login_form_inner">
            <h3>Log in to enter</h3>
            <form class="row login_form" action="connexion.php"  method="POST" name="formconnexion" >
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="nameconnect" name="nameconnect" placeholder="E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'">
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="mdpconnect" name="mdpconnect" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
              </div>
              <div class="col-md-12 form-group">
                <div class="creat_account">
                  <input type="checkbox" name="rememberme" id="f-option2" name="selector">
                  <label for="f-option2">Keep me logged in</label>
                </div>
              </div>
              <div class="col-md-12 form-group">
                <button type="submit" value="submit" class="button button-login w-100"  onClick="proceed();" name="formconnexion">Log In</button>
                <a href="recuperer1.php">Forgot Password?</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Login Box Area =================-->



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
