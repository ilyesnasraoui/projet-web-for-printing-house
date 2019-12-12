<?php
include "../config.php";
session_start();
$bdd = config::getConnexion();
include_once ('cookieconnect.php'); 

if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM membre WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo']) {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);
      $insertpseudo = $bdd->prepare("UPDATE membre SET pseudo = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
      header('Location: userProfile.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE membre SET mail = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      header('Location: userProfile.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE membre SET motdepasse = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location: userProfile.php?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mdp ne correspondent pas !";
      }
   }
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>S.I.A.D- Edit Profile</title>
  <link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
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
              <li class="nav-item active"><a class="nav-link" href="userProfile.html">Home</a></li>
               <li class="nav-item"><a class="nav-link" href="Promotions.html">Promotions</a></li>
              <li class="nav-item submenu dropdown">
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
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><button><i class="ti-search"></i></button></li>
              <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li>
              <li class="nav-item"><a class="button button-header" href="#">Buy Now</a></li>
            </ul>
          </div>
          <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false"><img  src="img/profil.gif" ></a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="edit.php">Edit profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="deconnexion.php">Log out</a></li>
                </ul>
              </li>
        </div>
      </nav>
    </div>
  </header>
  <!--================ End Header Menu Area =================-->
<div class="login_form_inner register_form_inner">
                  <h3>EDIT PROFILE</h3>
         <div align="left">
            <form class="row login_form"   method="post" >
              <div class="col-md-12 form-group">
               <input type="text" class="form-control" id="pseudo" name="newpseudo"  placeholder="Pseudo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pseudo'" value="<?php echo $user['pseudo']; ?>">
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="mail" name="newmail" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" value="<?php echo $user['mail']; ?>">
              </div>
              <div class="col-md-12 form-group">
                <input type="password" class="form-control" id="mdp" name="newmdp1" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
              </div>
              <div class="col-md-12 form-group">
                <input type="password" class="form-control" id="mdp2" name="newmdp2" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
               </div>
              <div class="col-md-12 form-group">
                <button type="submit" value="submit" class="button button-register w-100"  >Submit</button>
              </div>
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
         </div>
      </div>
   </body>
</html>
<?php   
}
else {
   header("Location: connexion.php");
}
?>


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


